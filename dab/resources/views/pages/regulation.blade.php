@extends('inc.s')

        
@section('content')
       



<div class="row">

 
         <div class="col-md-10 col-md-push-2">
     
      <div class="row">
	<div class="col-md-10">
		<ol class="breadcrumb">
  <li><a href="{{route('pages.index')}}"><i class="fa fa-home"></i></a></li>
  <li><a href="#">Laws & Regulations</a></li>
  <li><a href="#">Regulations</a></li>

</ol>
	</div>
</div>
     
        <div class="col-md-12">
        
               
            <h1 style="color: #1d3061">Regulations</h1>
<br>
            <div class="table table-responsive">
              <table class="table table-bordered">
                <tr style="background-color: #f5932a;color: white;"><th>#</th><th><p>Title</p></th><th><p>Catagory</p></th><th></th></tr>
                @foreach($report as $r)
                <tr>
                  <td>{{$r->id}}</td>
                  <td><p>{{$r->title}}</p></td>
                  <td><p>{{$r->catagory}}</p></td>
                  <td> <a href="#" target="blank"><div class="col-md-8"><p>Download File</p></div><div class="col-md-4"> <img src="{{ asset('css/images/icon.jpg') }}" class="img img-responsive"></a></div><br></td>
                </tr>

                @endforeach

               
              </table>
               {{$report->links()}}
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

            