<!DOCTYPE html>

<html lang="en">

  <head>
    <!-- CSS & File Pendukung -->
  	<link rel="shortcut icon" href="{{{ asset('img/favicon.png') }}}">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Final Task</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  </head>

  <body>
  <!-- Header -->
	@include('shared.head_nav')

  <!-- Muncul Error -->
  @if (Session::has('error'))
  <div class="session-flash alert-danger">
  {{Session::get('error')}}
  </div>
  @endif
  @if (Session::has('notice'))
  <div class="session-flash alert-info">
  {{Session::get('notice')}}
  </div>
  @endif
  
  <!-- Isi -->
	@yield("content")

  <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>

  <!-- Footer -->
  @include("shared.footer")
</html>