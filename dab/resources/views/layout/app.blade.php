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

    <link rel="stylesheet" type="text/css" href="css/fonts/font-awesome/css/font-awesome.css">



<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css"  href="css/style.css">
<link href='http://fonts.googleapis.com/css?family=Lato:400,700,900,300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/modernizr.custom.js"></script>



</head>
<body>
    
    <div>
      @include('inc.navbar')

        </div>

         <div class="col-md-10 col-md-push-2">
      @include('inc.slide')
      <br>
       <p style="font-size:16px;text-align: left;">The vision of Da Afghanistan Bank is that of a monetary instituation which upholds international best practice in fostering price stability and a sound financial system conducive to macro-economic stability, favorable investment climate, private sector development and broad-based economic growth.
        <br><br>
        The mission of Da Afghanistan Bank is to foster price stability and build a robust financial system. </p>
            <br><br>
            <h2 style="color: #1a344e;"><i class="fa fa-newspaper-o" aria-hidden="true" >  Latest News   </h2></p></i>
<hr style="width: 100%;">

        @foreach ($news as $post)
        
        
        <div class="col-md-2">{{$post->image}}  <img src="css/images/slide1.jpg" alt="..." class="img img-responsive"></div>

        <div class="col-md-10 title" ><a href="{{route('pages.show', $post->id)}}" target="blank"><p>{{$post->title}}</p></a> 
              <i class="fa fa-clock-o" aria-hidden="true" style="color: orange; padding: 1%;" > </i><span style="color: #8c8c8d;">Publish Date :  {{$post->date}} </span>


            <hr style="background-color: #edf1f4;width: 100%;"></div>

        @endforeach

         {{$news->links()}}
        
        </div>



        <div class="col-md-2 col-md-pull-10">
     

<div class="col-md-12">
<img src="{{ asset('css/images/logo3.png') }}" class="img img-responsive"><br>
</div>

<div div class="col-md-12"></div>
<div div class="col-md-12"></div>


<div class=" btn-rate table-responsive col-md-12">
    <h4 style="color: white">Exchange Rates</h4>

    <table class="table">
        <tr><td></td><td>Sell</td><td>Buy</td></tr>
        <div>
        <tr><td>Usd </td>   <td>87.1375</td>    <td>86.5375</td> </tr>
        <tr><td>Euro</td><td>88.9361</td><td>86.5375</td></tr>
        <tr><td>Toman </td>     <td>0.0059</td>     <td>0.0053</td></tr>
        <tr><td>Swiss </td> <td>75.0359</td>    <td>74.5359</td></tr>
        <tr><td>Riyal</td>  <td>19.9691</td>    <td>19.8691</td></tr>
        

        
    </div>
    </table>
    <p>For more Info <a href="{{url('/exchange')}}" target="blank" style="color: #cad9e5;"> click here</a></p>

    
</div>

<div div class="col-md-12"></div>
<div div class="col-md-12"></div>
<div div class="col-md-12"></div>
<div div class="col-md-12"></div>
<div div class="col-md-12"></div>
<div div class="col-md-12"></div>
<div div class="col-md-12"></div>
<div div class="col-md-12"></div>
<div div class="col-md-12"></div>
<div div class="col-md-12"></div>
<div div class="col-md-12"></div>
<div div class="col-md-12"></div>
<div div class="col-md-12"></div>
<div div class="col-md-12"></div>
<div div class="col-md-12"></div>
<div div class="col-md-12"></div>
<div div class="col-md-12"></div>
<div div class="col-md-12"></div>
<div div class="col-md-12"></div>
<div div class="col-md-12"></div>

<div div class="col-md-12"></div>
<div div class="col-md-12"></div>
<div div class="col-md-12"></div>
<div div class="col-md-12"></div>
<div div class="col-md-12"></div>
<div div class="col-md-12"></div>
<div div class="col-md-12"></div>
<div div class="col-md-12"></div>
<div div class="col-md-12"></div>
<div div class="col-md-12"></div>
<div div class="col-md-12"></div>
<div div class="col-md-12"></div>
<div div class="col-md-12"></div>
<div div class="col-md-12"></div>
<div div class="col-md-12"></div>
<div div class="col-md-12"></div>
<div div class="col-md-12"></div>
<div div class="col-md-12"></div>
<div div class="col-md-12"></div>
<div div class="col-md-12"></div>


<div div class="col-md-12"></div>
<div div class="col-md-12"></div>
<div div class="col-md-12"></div>
<div div class="col-md-12"></div>
<div div class="col-md-12"></div>
<div div class="col-md-12"></div>
<div div class="col-md-12"></div>
<div div class="col-md-12"></div>
<div div class="col-md-12"></div>
<div div class="col-md-12"></div>
<div div class="col-md-12"></div>
<div div class="col-md-12"></div>
<div div class="col-md-12"></div>
<div div class="col-md-12"></div>
<div div class="col-md-12"></div>
<div div class="col-md-12"></div>
<div div class="col-md-12"></div>
<div div class="col-md-12"></div>
<div div class="col-md-12"></div>





<div div class="col-md-12"></div>

<div class="form-group btn btn-sub col-md-12">
    <input type="text" class="form-control">
    <button class="btn btn-sub">Subscribe</button>
    
</div>

<div div class="col-md-12"></div>
<div div class="col-md-12"></div>
<div div class="col-md-12"></div>

        </div>
    
        <div>
            @yield('content')
          
        </div>
  
    <div>
        @include('inc.footer')
    </div>


    <!-- Scripts -->


    <script src="js/jquery.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
    
   
  
   
   
</body>
</html>
