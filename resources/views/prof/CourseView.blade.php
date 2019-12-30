@extends('dashboard')
@section('dashboard_content')

  <div class="container">
      <div class="row">

        
     @foreach($courses as $course)
     <div class="col-md-4 offset-md-1 mt-3">
      <div class="card" style="width: 18rem;">
         <div class="card-body">
           <h5 class="card-title">{{$course->name}}</h5>
           <hr>
           <p class="card-text">
            <small style="display: inline;">Code:</small>
            {{$course->code}}
          </p>
           <p class="card-text">
            <small style="display: inline;">Level:</small>
            {{$course->level}}
          </p>
           <a href="/Dashboard/studentUpdate/{{$course->id}}" class="card-link">Update</a>
         </div>
       </div>
       
     </div>
      @endforeach
      </div>
   </div>


     
@endsection
