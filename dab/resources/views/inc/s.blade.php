<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <style>
    .right{
        display:inline-block;
    }
    .left{
        display:inline-block;
    } 
    .navbar .navbar-inverse{
        border-radius: 0px;
    }

    

 </style>
  <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Da Afghanistan Bank</title>

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link rel="icon" href="css/favicon.ico">
    <link rel="shortcut icon" href="css/favicon.ico" />

    <link rel="stylesheet" type="text/css" href="{{ asset('css/fonts/font-awesome/css/font-awesome.css') }}">



<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css"  href="{{ asset('css/style.css') }}">
<link href='http://fonts.googleapis.com/css?family=Lato:400,700,900,300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/modernizr.custom.js"></script>



</head>
<body>
    
   <div>
      @include('inc.navbar')

        </div>


<div>
   @yield('content')
</div>
           



    
<div>
    @include('inc.footer');
</div>

    <script src="js/jquery.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
    
   
  
   
   
</body>
</html>
