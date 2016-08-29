@extends('layouts.master')

@section('title')
  Laravel Shopping Cart - Signup
@endsection

@section('styles')
  <link rel="stylesheet" href="{{ URL::to('src/css/signin.css') }}">
@endsection

@section('content')
  <div class="row">
      <div class="wrapper">
      	<div class="container">
          <h1>Sign Up</h1>
          {{-- Error message  --}}
            @if ($errors->has())
          <div class="alert alert-danger">
              @foreach ($errors->all() as $error)
                  {{ $error }}<br>
              @endforeach
          </div>
          @endif
      		<form action="{{ route('user.signup') }}" method="post" enctype="multipart/form-data">
            <div class="row">
              <div class="col-md-8 col-md-offset-2">
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" name="name" id="name" class="form-control" value="{{Request::old('name')}}" required>
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" name="email" id="email" class="form-control" value="{{Request::old('email')}}" required>
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" name="password" id="password" class="form-control" required>
                </div>
                <div class="form-group">
                  <label for="confirmpassword">Confirm Password</label>
                  <input type="password" name="confirmpassword" id="confirmpassword" class="form-control" required>
                </div>
                <div class="form-group">
                  <label>Update Profile Image</label>
                  <input type="file" name="avatar">
                </div>
                <button type="submit" class="btn btn-primary">Sign up</button>
                {{ csrf_field() }}
        		</form>
            </div>
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
      {{-- <form action="{{ route('user.signup') }}" method="post">
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" name="email" id="email" class="form-control">
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" name="password" id="password" class="form-control">
        </div>
        <button type="sumit" class="btn btn-primary">Sign up</button>
        {{ csrf_field() }}
      </form>--}}
  </div>
@endsection
