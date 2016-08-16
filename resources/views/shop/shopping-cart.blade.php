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
    <style media="screen">
      body {
        background: #50a3a2;
        color: white;
        font-weight: 700;
        font-family: 'Source Sans Pro', sans-serif;
      }
      h2 {
        margin: 254px 116px;
      }

      .nav-index {
        z-index: 99999;
      }

      #container h1 {
        font-size: 40px;
        transition-duration: 1s;
        transition-timing-function: ease-in-put;
        font-weight: 200;
      }

      .bg-bubbles {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 1;
      }
      .bg-bubbles li {
        position: absolute;
        list-style: none;
        display: block;
        width: 40px;
        height: 40px;
        background-color: rgba(255, 255, 255, 0.15);
        bottom: -160px;
        animation: square 25s infinite;
        transition-timing-function: linear;
      }
      .bg-bubbles li:nth-child(1) {
        left: 10%;
      }
      .bg-bubbles li:nth-child(2) {
        left: 20%;
        width: 80px;
        height: 80px;
        animation-delay: 2s;
        animation-duration: 17s;
      }
      .bg-bubbles li:nth-child(3) {
        left: 25%;
        animation-delay: 4s;

      }
      .bg-bubbles li:nth-child(4) {
        left: 40%;
        width: 60px;
        height: 60px;
        animation-duration: 22s;
        background-color: rgba(255, 255, 255, 0.25);
      }
      .bg-bubbles li:nth-child(5) {
        left: 70%;
      }
      .bg-bubbles li:nth-child(6) {
        left: 80%;
        width: 120px;
        height: 120px;
        animation-delay: 3s;
        background-color: rgba(255, 255, 255, 0.2);
      }
      .bg-bubbles li:nth-child(7) {
        left: 32%;
        width: 160px;
        height: 160px;
        animation-delay: 7s;
      }
      .bg-bubbles li:nth-child(8) {
        left: 55%;
        width: 20px;
        height: 20px;
        animation-delay: 15s;
        animation-duration: 40s;
      }
      .bg-bubbles li:nth-child(9) {
        left: 25%;
        width: 10px;
        height: 10px;
        animation-delay: 2s;
        animation-duration: 40s;
        background-color: rgba(255, 255, 255, 0.3);
      }
      .bg-bubbles li:nth-child(10) {
        left: 90%;
        width: 160px;
        height: 160px;
        animation-delay: 11s;
      }
      @keyframes square {
        0% {
        transform: translateY(0);
        }
        100% {
        transform: translateY(-700px) rotate(600deg);
        }
        }
        @keyframes square {
        0% {
              transform: translateY(0);
        }
        100% {
              transform: translateY(-700px) rotate(600deg);
        }
      }

    </style>
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
