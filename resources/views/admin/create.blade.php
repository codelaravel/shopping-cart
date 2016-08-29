@extends('layouts.master')

@section('title')
  Profile Page
@endsection

@section('styles')
  <link rel="stylesheet" href="{{ URL::to('src/css/signin.css') }}">
@endsection

@section('content')
  <div class="row">
      <div class="wrapper">
          <h1>Create Product</h1>
          {{-- Error message  --}}
            @if ($errors->has())
          <div class="alert alert-danger">
              @foreach ($errors->all() as $error)
                  {{ $error }}<br>
              @endforeach
          </div>
          @endif
      		<form action="{{ route('admin.product') }}" method="post" class="form">
            <div class="row">
              <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <form class="" action="index.html" method="post">
                  <div class="col-xs-12">
                    <div class="form-group">
                      <label for="title">Product Name</label>
                      <input type="text" name="title" class="form-control" id="title" required>
                    </div>
                  </div>
                  <div class="col-xs-12">
                    <div class="row">
                      <div class="col-xs-6">
                        <div class="form-group">
                          <label for="price">Product Price</label>
                          <input type="number" name="price" class="form-control" id="price" min="0" required>
                        </div>
                      </div>
                      <div class="col-xs-6">
                        <div class="form-group">
                          <label for="qty">Product Qty</label>
                          <input type="number" name="qty" class="form-control" id="qty" min="0" required>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xs-12">
                    <div class="form-group">
                        <label for="file">Product Image Path</label>
                        <input type="text" name="imagePath" class="form-control" id="imagePath" required>
                    </div>
                  </div>
                  <div class="col-xs-12">
                    <div class="form-group">
                      <label for="description">Description</label>
                      <textarea rows="8" cols="40" name="description" class="form-control" required></textarea>
                    </div>
                  </div>
                  <div class="col-xs-12">
                    <button type="submit" class="btn btn-block btn-primary">Create Product</button>
                  </div>
                  {!! csrf_field() !!}
                </form>
            </div>
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
  </div>
@endsection
