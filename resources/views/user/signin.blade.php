@extends('layouts.master')

@section('title')
  Laravel Shopping Cart - Signin
@endsection

@section('styles')
  <link rel="stylesheet" href="{{ URL::to('src/css/signin.css') }}" media="screen" title="no title" charset="utf-8">
@endsection

@section('content')
  <div class="row">
    <div class="wrapper">
    	<div class="container">
    		<h1>Welcome</h1>
        {{-- Error message  --}}
          @if ($errors->has())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                {{ $error }}<br>
            @endforeach
        </div>
        @endif
    		<form action="{{ route('user.signin') }}" method="post">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control">
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control">
              </div>
              <button type="sumit" class="btn btn-primary">Sign In</button>
              {{ csrf_field() }}
            </form>
            <p>Don't have an account? <a href="{{ route('user.signup') }}">Sign up instead!</a></p>
          </div>
            {{ csrf_field() }}
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
      {{-- <form action="{{ route('user.signin') }}" method="post">
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" name="email" id="email" class="form-control">
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" name="password" id="password" class="form-control">
        </div>
        <button type="sumit" class="btn btn-primary">Sign In</button>
        {{ csrf_field() }}
      </form>
      <p>Don't have an account? <a href="{{ route('user.signup') }}">Sign up instead!</a></p>
    </div>
  </div> --}}
@endsection
