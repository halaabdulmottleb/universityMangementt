@extends('dashboard')
@section('dashboard_content')

  <div class="container">
               <!-- start form -->
          <form method="post" action="{{ route('enroll') }}">
                 @csrf
             <!-- Courses  -->
            <div class="form-group row">
              <label for="inputPassword3" class="col-sm-2 col-form-label">Course</label>
              <div class="col-sm-10">
                <select class="form-control" name="course">
                    <option disabled> select Course ..</option>
                    @foreach($courses as $course)
                    <option value="{{$course->id}}"> {{$course->name}} -- {{$course->code}} </option>
                    @endforeach
         
                 </select>
              </div>
            </div>
           <div class="form-group row">
              <button type="submit" class="btn btn-primary">Enroll</button>
           </div>
        </form>
        @if(Session::has('fail'))
            <script type="text/javascript">alert("You enrolled for it before!");</script>
                    
         @endif    
          @if(Session::has('success'))
            <script type="text/javascript">alert("success!");</script>
                    
         @endif    
               
   </div>


     
@endsection
