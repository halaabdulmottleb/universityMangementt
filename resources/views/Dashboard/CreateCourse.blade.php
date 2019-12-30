@extends('dashboard')
@section('dashboard_content')

  <div class="container">
               <!-- start form -->
               <form method="post" action="{{ route('CreateCourse') }}">
  @csrf
  <!-- Code -->
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Code</label>
    <div class="col-sm-10">
      <input type="text" name="code" class="form-control" id="inputEmail3" placeholder="Code">
    {!! $errors->first('code', '<small style="color:red;">:message</small>') !!}

    </div>
  </div>
   <!-- Name -->
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
      <input type="text" name="name" class="form-control" id="inputEmail3" placeholder="Name">
      {!! $errors->first('name', '<small style="color:red;">:message</small>') !!}

    </div>
  </div>
  
  
   <!-- prof  -->
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">professor</label>
    <div class="col-sm-10">
       <select class="form-control" name="professor">
           @foreach($profs as $prof)
           <option value="{{$prof->id}}"> {{$prof->name}} -- {{$prof->code}} </option>
           @endforeach

           
     </select>
           {!! $errors->first('professor', '<small style="color:red;">:message</small>') !!}

   </div>
    
  </div>

  <!-- Type -->
  <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Level</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" value="freshman" id="type1" name="level">
          <label class="form-check-label" for="type1">
            Freshman
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" value="first" id="type1" name="level">
          <label class="form-check-label" for="type1">
            First
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" value="second" id="type1" name="level">
          <label class="form-check-label" for="type1">
            Second
          </label>
        </div>
        
        <div class="form-check">
          <input class="form-check-input" type="radio" value="third" id="type2" name="level">
          <label class="form-check-label" for="type2">
            Third
          </label>
        </div>
        <div class="form-check ">
          <input class="form-check-input" type="radio" value="fourth" id="type3" name="level" >
          <label class="form-check-label" for="type3">
           fourth
          </label>
        </div>
    {!! $errors->first('level', '<small style="color:red;">:message</small>') !!}
      </div>
    </div>

  </fieldset>
 
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Sign in</button>
    </div>
  </div>
</form>
               
   </div>
   @if(Session::has('fail'))
            <script type="text/javascript">alert("You created this course before!");</script>
                    
   @endif  
   @if(Session::has('success'))
            <script type="text/javascript">alert("success!");</script>
                    
   @endif  

     
@endsection
