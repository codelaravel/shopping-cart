<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profile page</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ URL::to('src/css/about.css') }}" media="screen">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <header class="header-title header-title-style-1">
    <div class="_links __top">
        <a href="{{ url('/') }}" class="button border left"><i class="fa fa-home fa-3x"></i></a>
    </div>
    <div class="xv-center">
        <div class="_avatar"></div>
        <a href="#" class="_hgroup button border">
          <h1>Shuvro Roy</h1>
          <h2>Web-Developer</h2>
          <h5>shuvroshopno@gmail.com</h5>
        </a>
    </div>
    <div class="_links __bottom">
        <a href="https://bd.linkedin.com/in/shuvro-roy-82ba56127" target="_blank" class="button link right"><i class="fa fa-linkedin-square fa-3x"></i></a>
        <a href="https://www.facebook.com/shuvro.roy.75" target="_blank" class="button link right"><i class="fa fa-facebook-square fa-3x"></i></a>
        <a href="https://twitter.com/shuvro_008" target="_blank" class="button link"><i class="fa fa-twitter fa-3x"></i></a>
    </div>
</header>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>
