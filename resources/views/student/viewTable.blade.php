@extends('dashboard')
@section('dashboard_content')

  <div class="container">
      <div class="row">

     <div class="col-md-8 offset-md-2 mt-5">
      <div class="card">
         <div class="card-body">
           <h5 class="card-title">TimeTable</h5>
           <hr>
           
           <p class="card-text">
            <small style="display: inline;">Level:</small>
            {{$table->level}}
          </p>
           <a href="/Dashboard/Student/donwloadTable/{{$table->id}}" class="card-link">Download</a>
         </div>
       </div>
       
     </div>
     
      </div>
   </div>


     
@endsection
