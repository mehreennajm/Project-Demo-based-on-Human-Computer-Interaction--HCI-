@extends('inc.s')

        
@section('content')
       



<div class="row">

 
         <div class="col-md-10 col-md-push-2">
     
      <div class="row">
	<div class="col-md-10">
		<ol class="breadcrumb">
  <li><a href="{{route('pages.index')}}"><i class="fa fa-home"></i></a></li>
  <li><a href="{{route('pages.index')}}">Dab</a></li>

</ol>
	</div>
</div>
     
        <div class="col-md-12">
        
               
            <h1 style="color: #1d3061">Exchange Rates</h1>
            <br><br>
            <div class="row">
              <div class="col-md-3"></div>

              <div class="col-md-6">
                <div class="form-group row">
                  <div class="col-md-6">
                  <input type="text" placeholder="Search for Rates" class="form-control"></div><div class="col-md-3"> <button class="btn btn-warning">Submit</button></div>
                </div>
              </div>
              <div class="col-md-3"></div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <img src="{{ asset('css/images/e1.png') }}" class="img img-responsive"><br>
              </div>
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

            