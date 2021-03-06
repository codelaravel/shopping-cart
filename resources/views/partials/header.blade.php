<nav class="navbar navbar-default nav-index">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/"><i class="fa fa-shopping-bag" aria-hidden="true"></i> Laravel Shopping Cart</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                  <a href="{{ route('product.shoppingCart') }}">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i> Shopping Cart
                    <span class="badge">{{ Session::has('cart') ? Session::get('cart')->totalQty : '' }}</span>
                  </a>
                </li>
                <li class="dropdown">
                  @if(Auth::check())
                      @if(Auth::user()->is_admin)
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="position:relative; padding-left:50px;"><img src="/uploads/avatars/{{ Auth::user()->avatar }}" style="width:32px; height:32px; position:absolute; top:10px; left:10px; border-radius:50%">  {{ Auth::user()->name }} <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                        <li><a href="{{ route('admin.all') }}">Product Page</a></li>
                        <li><a href="{{ route('admin.profile') }}">Create Product</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="{{ route('user.logout') }}"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
                      @else
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="position:relative; padding-left:50px;"> <img src="/uploads/avatars/{{ Auth::user()->avatar }}" style="width:32px; height:32px; position:absolute; top:10px; left:10px; border-radius:50%">  {{ Auth::user()->name }} <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                        <li><a href="{{ route('user.profile') }}">User Profile</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="{{ route('user.logout') }}"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
                      @endif
                  @else
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i>  User Management <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                      <li><a href="{{ route('user.signup') }}"><i class="fa fa-user-plus" aria-hidden="true"></i> Signup</a></li>
                      <li><a href="{{ route('user.signin') }}"><i class="fa fa-sign-in" aria-hidden="true"></i> Signin</a></li>
                   @endif
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
