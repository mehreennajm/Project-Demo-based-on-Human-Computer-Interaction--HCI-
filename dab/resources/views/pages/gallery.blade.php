@extends('inc.s')

        
@section('content')
       



<div class="row">

 
         <div class="col-md-10 col-md-push-2">
     
      <div class="row">
	<div class="col-md-10">
		<ol class="breadcrumb">
  <li><a href="{{route('pages.index')}}"><i class="fa fa-home"></i></a></li>
  <li><a href="#">Media Center</a></li>
  <li class="active">Gallery</li>

</ol>
	</div>
</div>
     
        <div class="col-md-12">
        
               
            <h1 style="color: #1d3061">Da Afghanistan Bank Gallery</h1>
            <br><br>

            <div class="row">
              <div class="col-md-4"><img src="{{ asset('css/images/slide1.jpg') }}" class="img img-responsive img-thumbnail"></div>
              <div class="col-md-4"><img src="{{ asset('css/images/slide2.png') }}" class="img img-responsive img-thumbnail"></div>
              <div class="col-md-4"><img src="{{ asset('css/images/slide3.jpg') }}" class="img img-responsive img-thumbnail"></div>
            </div>
<br><br>
             <div class="row">
              <div class="col-md-4"><img src="{{ asset('css/images/slide4.png') }}" class="img img-responsive img-thumbnail"></div>
              <div class="col-md-4"><img src="{{ asset('css/images/slide2.png') }}" class="img img-responsive img-thumbnail"></div>
              <div class="col-md-4"><img src="{{ asset('css/images/slide1.jpg') }}" class="img img-responsive img-thumbnail"></div>
            </div>
            
           
        </div>
       

        
           


            
     
</div>
 
        <div class="col-md-2 col-md-pull-10">
      @include('inc.sidebar')

        </div>
        <div class="col-md-12"></div>
         <div class="col-md-12"></div>
          <div class="col-md-12"></div>
           <div class="col-md-12"></div>
           <div class="col-md-12"></div>
         <div class="col-md-12"></div>
          <div class="col-md-12"></div>
           <div class="col-md-12"></div><div class="col-md-12"></div>
         <div class="col-md-12"></div>
          <div class="col-md-12"></div>
           <div class="col-md-12"></div><div class="col-md-12"></div>
         <div class="col-md-12"></div>
          <div class="col-md-12"></div>
           <div class="col-md-12"></div>
</div>
  

  
@endsection

            