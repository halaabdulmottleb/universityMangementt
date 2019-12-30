
@extends('dashboard')
@section('dashboard_content')


<div class="container">
        <!-- start form -->
        <div class="col-md-4 offset-md-4">
           <p style="font-size:32px; font-weight: bold;">{{$name}}</p>
        </div>

  <table class="table">
  <thead>
     <tr>
      <th scope="col"></th>
      <th scope="col">Stdent Name</th>
      <th scope="col">Stdent ID</th>
      <th scope="col">Grade</th>
      <th scope="col">Attendance</th>
     
    </tr>
  </thead>
  <tbody>
     @foreach($courses as $course)
    <tr>
     
      <td></td>
      
       <td>

       <?php
       
        $field = \App\User::where('id','=', $course->student_id)->first(); 

           echo $field->name;

       ?>

      
      </td>
       <td>

       <?php
       
        $field = \App\User::where('id','=', $course->student_id)->first(); 

           echo "<p>" . $field->userID. "</p>";

       ?>


      
      </td>

    
      <td>

        <form style="display: inline;" method="post" action="{{ route('UpdateGrd') }}">
           @csrf
            <input type="hidden" name="course" value="{{$course->id}}">
              <div class="input-group  ">
                 <input type="text" class="form-control input-xsmall"   name="grade" value="{{$course->grade}}">
                 <div class="input-group-append">
                   <button class="btn btn-outline-secondary btn-sm" type="button">Update</button>
                 </div>
               </div>        
        </form>
      </td>

      <td>
        <form style="display: inline;" method="post" action="{{ route('UpdateAtten') }}">
           @csrf
             <input type="hidden" name="course" value="{{$course->id}}">

              <div class="input-group  ">
                 <input type="text" class="form-control" name="aten" value="{{$course->atten}}"  >
                 <div class="input-group-append">
                   <button class="btn btn-outline-secondary btn-sm" type="button">Update</button>
                 </div>
               </div>
        </form>
      </td>
      
      
      
      <!-- authorization -->
     
       
    </tr>
    @endforeach
  </tbody>
</table>
   </div>


     
@endsection
