<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

use Auth;

use Session;


class UserController extends Controller
{
    public function getSignup()
    {
      return view('user.signup');
    }

    public function postSignUp(Request $request)
    {
      $this->validate($request, [
        'name'            => 'required|min:3',
        'email'           => 'email|required|unique:users',
        'password'        => 'required|min:4',
        'confirmpassword' => 'required|same:password',
        'avatar'          => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
      ]);

      $user = new User([
        'name'     => $request->input('name'),
        'email'    => $request->input('email'),
        'password' => bcrypt($request->input('password'))
      ]);
      $avatar = $request->file('avatar');
      $user->avatar = time().'.'.$avatar->getClientOriginalExtension();
      $destinationPath = public_path('uploads/avatars');
      $avatar->move($destinationPath, $user->avatar);
      $user->save();
      Auth::login($user);

      if (Session::has('oldUrl')) {
        $oldUrl = Session::get('oldUrl');
        Session::forget('oldUrl');
        return redirect()->to($oldUrl);
      }

      return redirect()->route('user.profile');
    }

    public function getSignin()
    {
      return view('user.signin');
    }

    public function postSignin(Request $request)
    {
      $this->validate($request, [
        'email'    => 'email|required',
        'password' => 'required|min:4'
      ]);
      if(Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
        if (Auth::user()->is_admin) {
          return redirect()->route('admin.all');
        } elseif (Session::has('oldUrl')) {
          $oldUrl = Session::get('oldUrl');
          Session::forget('oldUrl');
          return redirect()->to($oldUrl);
        } else {
          return redirect()->route('user.profile');
        }
      }
      return redirect()->back();

    }

    public function getProfile()
    {
      $orders = Auth::user()->orders;
      $orders->transform(function($order, $key) {
      $order->cart = unserialize($order->cart);

      return $order;
      });
      return view('user.profile', ['orders' => $orders]);
    }

    public function getAdminProfile()
    {
      return view('admin.create');
    }

    public function getLogout()
    {
      Auth::logout();
      Session::forget('cart');
      return redirect()->route('user.signin');
    }
}
