@extends('dashboard')
@section('dashboard_content')

  <div class="container">
       <!-- start form -->
               <form   action="{{ route('Table') }}" method="post"  enctype="multipart/form-data" >
                @csrf
                <!-- file -->
       <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label"> TimeTable</label>
    <div class="col-sm-10">
      <input type="file" name="file" class="form-control" id="inputEmail3" placeholder="file">
      {!! $errors->first('file', '<small style="color:red;">:message</small>') !!}

    </div>
  </div>
        <!-- level -->
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">level</label>
    <div class="col-sm-10">
       <select class="form-control" name="level">
          <option value="freshman">freshman</option>
          <option value="first">first</option>
          <option value="second">second</option>
          <option value="third">third</option>
          <option value="fourth">fourth</option>

     </select>
           {!! $errors->first('level', '<small style="color:red;">:message</small>') !!}

   </div>
    
  </div> 
    <br>       
        <div class="form-group row">
            
              <button type="submit" class="btn btn-primary">Submit</button>
            
          </div>
     </form>
            
   </div>

   @if(Session::has('fail'))
            <script type="text/javascript">alert("You already uploaded TIMETABLE for this LEVEL");</script>
                    
   @endif  
   @if(Session::has('success'))
            <script type="text/javascript">alert("success!");</script>
                    
   @endif 


     
@endsection
