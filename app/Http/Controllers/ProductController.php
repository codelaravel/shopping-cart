<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Product;

use App\Cart;

use Session;

use Stripe\Stripe;

use Stripe\Charge;

use App\Order;

use Auth;

class ProductController extends Controller
{
    public function getIndex()
    {
      // $products = Product::all();
      $products = Product::paginate(9);
      return view('shop.index')->withProducts($products);
    }

    public function getSingleItem($id)
    {
      $product = Product::find($id);
      return view('shop.single')->withProduct($product);
    }

    public function getAddToCart(Request $request, $id)
    {
      $product = Product::find($id);
      $oldCart = Session::has('cart') ? Session::get('cart') : null;
      $cart = new Cart($oldCart);
      $cart->add($product, $product->id);

      $request->session()->put('cart', $cart);
      return redirect()->route('product.index');
    }

    public function getReduceByOne($id)
    {
      $oldCart = Session::has('cart') ? Session::get('cart') : null;
      $cart = new Cart($oldCart);
      $cart->reduceByOne($id);

      if (count($cart->items) > 0) {
        Session::put('cart', $cart);
      } else {
        Session::forget('cart');
      }
      return redirect()->route('product.shoppingCart');
    }

    public function getAddByOne($id)
    {
      $oldCart = Session::has('cart') ? Session::get('cart') : null;
      $cart = new Cart($oldCart);
      $cart->addByOne($id);

      if (count($cart->items) > 0) {
        Session::put('cart', $cart);
      } else {
        Session::forget('cart');
      }
      return redirect()->route('product.shoppingCart');
    }

    public function getRemovItem($id)
    {
      $oldCart = Session::has('cart') ? Session::get('cart') : null;
      $cart = new Cart($oldCart);
      $cart->removeItem($id);

      if (count($cart->items) > 0) {
        Session::put('cart', $cart);
      } else {
        Session::forget('cart');
      }

      return redirect()->route('product.shoppingCart');
    }

    public function getCart()
    {
      if (!Session::has('cart')) {
        return view('shop.shopping-cart', ['products' => null]);
      }
      $oldCart = Session::get('cart');
      $cart = new Cart($oldCart);
      return view('shop.shopping-cart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }

    public function getCheckout()
    {
      if (!Session::has('cart')) {
        return view('shop.shopping-cart');
      }
      $oldCart = Session::get('cart');
      $cart = new Cart($oldCart);
      $total = $cart->totalPrice;
      return view('shop.checkout', ['total' => $total]);
    }

    public function postCheckout(Request $request)
    {
      if (!Session::has('cart')) {
        return redirect()->route('shop.shoppingCart');
      }
      $oldCart = Session::get('cart');
      $cart = new Cart($oldCart);

      Stripe::setApiKey("sk_test_fWm0GsyOGDc0gy2Gjfr99cf6");
      try {
        $charge = Charge::create(array(
          "amount" => $cart->totalPrice * 100,
          "currency" => "usd",
          "source" => $request->input('stripeToken'), // obtained with Stripe.js
          "description" => "Test Charge"
        ));
        $order = new Order();
        $order->cart    = serialize($cart);
        $order->address = $request->input('address');
        $order->name    = $request->input('name');
        $order->payment_id = $charge->id;

        Auth::user()->orders()->save($order);
        
        // Update Product Qty
        $order->cart = unserialize($order->cart);
        foreach ($order->cart->items as $item) {
          $id = $item['item']['id'];
          $product = Product::find($id);
          $product->qty -= $item['qty'];
          $product->save();
        }

      } catch(\Exception $e){
        return redirect()->route('checkout')->withError($e->getMessage());
      }

      Session::forget('cart');
      return redirect()->route('product.index')->withSuccess('Successfully purchased');
    }

    public function postAdminProductCreate(Request $request)
    {

      $product = new Product([
        'imagePath' => $request->input('imagePath'),
        'title'     => $request->input('title'),
        'price'     => $request->input('price'),
        'qty'     => $request->input('qty'),
        'description' => $request->input('description')
      ]);
      $product->save();
      Session::flash('flash_message','Product Created Successfully');
      return redirect()->route('admin.all');
    }

    public function getAdminIndex()
    {
      $products = Product::paginate(9);
      return view('admin.profile')->withProducts($products);
    }

    public function getProductUpdate(Request $request, $id)
    {
      $product = Product::find($id);
      $product->qty = $request->input('qty');
      $product->save();
      Session::flash('flash_message','Product Quientity Update Successfully');
      return redirect()->route('admin.all');
    }

    public function getProductDelete($id)
    {
      $product = Product::find($id);
      $product->delete();
      Session::flash('flash_message','Product Delete Successfully');
      return redirect()->route('admin.all');
    }
}
