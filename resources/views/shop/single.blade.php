@extends('layouts.master')

@section('title')
  {{ $product->title }}
@endsection

@section('styles')
  <link rel="stylesheet" href="{{URL::to('src/css/single.css')}}">
@endsection

@section('content')
  <div id="container">

    <div id="slider">
      <nav class="slide">
        <ul>
          <li><img src="{{ $product->imagePath }}"></li>
        </ul>
      </nav>
    </div>

    <div id="product-info">
      <h2>{{ $product->title }}</h2>
      <p class="price">&#36; {{ $product->price }}</p>

      <div class="info-wrapper">

        <div class="tab">
           <input type="radio" id="tab-1" name="tab-group-1" checked>
           <label for="tab-1"><span>Description</span></label>

          <div class="content">
            <p>
              {{ $product->description }}
            </p>
          </div>
        </div>

      </div>

      <div class="buy">
        <a href="{{route('product.addToCart', ['id' => $product->id])}}" class="chart">Add to Chart</a>
      </div>

    </div>

  </div>
@endsection
