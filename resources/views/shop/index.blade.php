@extends('layouts.master')

@section('title')
    Laravel Shopping Cart
@endsection

@section('content')
  @if(Session::has('success'))
    <div class="row">
      <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
        <div id="charge-message" class="alert alert-success">
          {{ Session::get('success') }}
        </div>
      </div>
    </div>
  @endif
  @foreach($products->chunk(3) as $productChunk)
    <div class="row">
      @foreach($productChunk as $product)
        <div class="col-sm-6 col-md-4">
          <div class="quintity">
            <p>
              {{ $product->qty }}
            </p>
          </div>
            <div class="thumbnail">
                <img src="{{ $product->imagePath }}" alt="..." class="img-responsive">
                <div class="caption">
                    <h3>{{ $product->title }}</h3>
                    <p class="description">{{ substr($product->description, 0, 250) }}{{ strlen($product->description) > 250 ? '...' : ''  }}</p>
                    <span><a href="{{route('product.single', ['id' => $product->id])}}">Read more</a></span>
                    <div class="clearfix">
                        <div class="pull-left price">${{ $product->price }}</div>
                        @if($product->qty <= 0)
                          <button type="button" class="btn btn-success pull-right disabled">Add to Cart</button>
                        @else
                        <a href="{{ route('product.addToCart', ['id' => $product->id]) }}" class="btn btn-success pull-right" role="button">Add to Cart</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
      @endforeach
    </div>
  @endforeach
  <div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="text-center">
				{!! $products->links() !!}
			</div>
		</div>
	</div>
@endsection
