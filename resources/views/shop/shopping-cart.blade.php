@extends('layouts.master')

@section('title')
  Laravel Shopping Cart - Shopping-cart
@endsection

@section('styles')
  <link rel="stylesheet" href="{{ asset('src/css/shopping-cart.css') }}">
@endsection

@section('content')
  @if(Session::has('cart'))
    <header id="site-header">
		<div class="container">
			<h1>Shopping cart <span class="fa fa-shopping-bag"></span></h1>
		</div>
	</header>
		<section id="cart">
      @foreach($products as $product)
			<article class="product">
				<header>
					<a class="remove">
						<img src="{{ $product['item']['imagePath'] }}" alt="">

						<a href="{{ route('product.remove', ['id' => $product['item']['id']]) }}"><h3>Remove product</h3></a>
					</a>
				</header>

				<div class="content">

					<h1>{{ $product['item']['title'] }}</h1>
          {{ substr($product['item']['description'], 0, 200) }}{{ strlen($product['item']['description']) > 200 ? '...' : '' }}
				</div>

				<footer class="content">
					<a href="{{ route('product.reduceByOne', ['id' => $product['item']['id']]) }}"><span class="qt-minus">-</span></a>
					<span class="qt">{{ $product['qty'] }}</span>
					<a href="{{ route('product.addByOne', ['id' => $product['item']['id']]) }}"><span class="qt-plus">+</span></a>

					<h2 class="full-price">
            {{ $product['price'] }}
					</h2>

					<h2 class="price">
            {{ $product['item']['price'] }}
					</h2>
				</footer>
			</article>
    @endforeach
		</section>

	<footer id="site-footer">
	<div class="row">
    <div class="col-md-6">
      {{-- <h2 class="subtotal">Subtotal: <span>163.96</span>€</h2>
      <h3 class="tax">Taxes (5%): <span>8.2</span>€</h3>
      <h3 class="shipping">Shipping: <span>5.00</span>€</h3> --}}
    </div>
    <div class="col-md-4 pull-right">
      <h1 class="total">Total: <span>${{ $totalPrice }}</span></h1>
      <a class="btn" href="{{ route('checkout') }}">Checkout</a>
    </div>
  </div>
	</footer>
  @else
    <link rel="stylesheet" href="{{ URL::to('src/css/shopping_cart.css') }}">
    <div class="row">
      <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
        <h2>No Items in Cart!</h2>
      </div>
    </div>
    <ul class="bg-bubbles">
  		<li></li>
  		<li></li>
  		<li></li>
  		<li></li>
  		<li></li>
  		<li></li>
  		<li></li>
  		<li></li>
  		<li></li>
  		<li></li>
  	</ul>
  @endif
@endsection
