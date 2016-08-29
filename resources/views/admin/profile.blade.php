@extends('layouts.master')

@section('title')
  Product Page
@endsection

@section('styles')
  <link rel="stylesheet" href="{{ URL::to('src/css/signin.css') }}">
  <link rel="stylesheet" href="{{ URL::to('src/css/profile.css') }}">
@endsection

@section('content')
  @if(Session::has('flash_message'))
    <div class="alert alert-success"><a href="#" class="close" data-dismiss="alert">&times;</a><em> {!! session('flash_message') !!}</em></div>
@endif
	<h1>All Product</h1>
  <table class='shopping-cart'>
    <tr>
      <th></th>
      <th>Image</th>
      <th>Product</th>
      <th>Price Per</th>
      <th>Quantity</th>
      <th></th>
    </tr>
    @foreach($products as $product)
    <tr>
      <td class='product-removal'>
        <a href="{{ route('product.delete', ['id' => $product->id]) }}" class='remove-product btn btn-default'>
          <i class="fa fa-trash" aria-hidden="true" style="color: red;"></i>
        </a>
      </td>
      <td class='product-image'>
        <img src='{{ $product->imagePath }}'>
      </td>
      <td class='product-name'>
        {{ $product->title }}
      </td>
      <td class='product-price'>
        {{ $product->price }}
      </td>
      <form action="{{ route('product.update', ['id' => $product->id]) }}" method="get">
        <td class='product-quantity'>
          <input type='number' name='qty' value='{{ $product->qty }}' min='1'>
        </td>
        <td>
          <button type="submit"class='remove-product btn btn-primary'>
            Update
          </button>
        </td>
      </form>
    </tr>
    @endforeach
  </table>
			<div class="text-center">
				{!! $products->links(); !!}
			</div>

@endsection
