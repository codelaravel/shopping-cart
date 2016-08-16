@extends('layouts.master')

@section('title')
  Laravel Shopping Cart - Profile
@endsection

@section('styles')
  <link rel="stylesheet" href="{{ URL::to('src/css/sign.css') }}" media="screen" title="no title" charset="utf-8">
@endsection

@section('content')
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <h1>User Profile</h1>
      <hr>
      <h2>My Orders</h2>
      @foreach($orders as $order)
        <div class="panel panel-default">
          <div class="panel-body">
            <ul class="list-group">
              @foreach($order->cart->items as $item)
                <li class="list-group-item">
                  <span class="badge">{{ $item['price'] }}</span>
                  {{ $item['item']['title'] }} | {{ $item['qty'] }} Units
                </li>
              @endforeach
            </ul>
          </div>
          <div class="panel-footer">
            <strong>Total Price: ${{ $order->cart->totalPrice }}</strong>
          </div>
        </div>
      @endforeach
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
  </div>
@endsection
