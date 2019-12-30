
@extends('dashboard')
@section('dashboard_content')

<div class="container">
        <!-- start form -->
            <table class="table">
  <thead>
     <tr>
      <th scope="col">Name</th>
      <th scope="col">Code</th>
      <th scope="col">Grade</th>
      <th scope="col">Attendance</th>
     
    </tr>
  </thead>
  <tbody>
     @foreach($courses as $course)
    <tr>
     
       <td>

       <?php
       
        $field = \App\course::where('id','=', $course->course_id)->get(); 

           echo $field->name;

       ?>

      
      </td>

      <td>

       <?php
       
        $field = \App\course::where('id','=', $course->course_id)->first(); 

           echo $field->code;

       ?>

      
      </td>

      

      

      <td style="color: red">{{$course->grade}}</td>
      <td style="color: red">{{$course->atten}}</td>
      
      
      
      <!-- authorization -->
     
       
    </tr>
    @endforeach
  </tbody>
</table>
   </div>


     
@endsection
