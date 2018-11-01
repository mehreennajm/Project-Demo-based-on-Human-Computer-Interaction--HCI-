@extends('inc.s')

        
@section('content')
       



<div class="row">

 
         <div class="col-md-10 col-md-push-2">
     
      <div class="row">
	<div class="col-md-10">
		<ol class="breadcrumb">
  <li><a href="{{route('pages.index')}}"><i class="fa fa-home"></i></a></li>
  <li><a href="#">Procurments and Careers</a></li>
  <li><a href="#">Jobs</a></li>

</ol>
	</div>
</div>
     
        <div class="col-md-12">
        
               
            <h1 style="color: #1d3061">Job Announcements</h1>

<br>
   <div class="form-group row">
                  <div class="col-md-4">
                    <select class="form-control" id="exampleFormControlSelect1">
      
      <option>Managerical</option>
      <option>Non-Managerical</option>
      <option>Internship</option>
    
    </select>
                  </div>
                </div>
            <div class="table table-responsive">
              <table class="table table-bordered">
                <tr style="background-color: #f5932a;color: white;"><th>#</th><th><p>Title</p></th><th><p>Description</p></th><th><p>Publish Date</p></th><th><p>Expire Date</p></th></tr>
                @foreach($report as $r)
                <tr>
                  <td>{{$r->id}}</td>
                  <td><p>{{$r->title}}</p></td>
                  <td><p>{{$r->descc}} <br><br>Apply here <a href="dab.gov@info.af" style="color: #195e6a;">dab@gov.af</a></p></td>
                  <td>{{$r->publish}}</td>
                  <td>{{$r->expire}}</td>
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

            