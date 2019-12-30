@extends('dashboard')
@section('dashboard_content')

  <div class="container">
               <!-- start form -->
               <form method="post" action="{{ route('CreateUser') }}" >
  @csrf
  <!-- Name -->
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
      <input type="text" name="name" class="form-control" id="inputEmail3" placeholder="Name">
        {!! $errors->first('name', '<small style="color:red;">:message</small>') !!}

    </div>
  </div>
  <!-- Email  -->
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" name="email" class="form-control" id="inputPassword3" placeholder="Email">
       {!! $errors->first('email', '<small style="color:red;">:message</small>') !!}
    </div>
  </div>
   <!-- Mobile  -->
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Mobile</label>
    <div class="col-sm-10">
      <input type="number" name='mobile' class="form-control" id="inputPassword3" placeholder="Mobile">
       {!! $errors->first('mobile', '<small style="color:red;">:message</small>') !!}
    </div>
  </div>
  <!-- Code  -->
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Code</label>
    <div class="col-sm-10">
      <input type="text" name = "code" class="form-control" id="inputPassword3" placeholder="Code">
       {!! $errors->first('code', '<small style="color:red;">:message</small>') !!}
    </div>
  </div>
   <!-- ID  -->
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">ID</label>
    <div class="col-sm-10">
      <input  type="text" name = "ID" class="form-control" id="inputPassword3" placeholder="ID">
       {!! $errors->first('ID', '<small style="color:red;">:message</small>') !!}
    </div>
  </div>
  <!-- level  -->
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">level</label>
    <div class="col-sm-10">
      <input  type="text" name = "level" class="form-control" id="inputPassword3" placeholder="level">
       {!! $errors->first('level', '<small style="color:red;">:message</small>') !!}
    </div>
  </div>
  
  <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">type</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="type" id="type1" value="student" checked>
          <label class="form-check-label" for="type1">
            Student
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="type" id="type2" value="professor">
          <label class="form-check-label" for="type2">
            Professor
          </label>
        </div>
        <div class="form-check ">
          <input class="form-check-input" type="radio" name="type" id="type3" value="admin" >
          <label class="form-check-label" for="type3">
           Admin
          </label>
        </div>
         {!! $errors->first('type', '<small style="color:red;">:message</small>') !!}
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
            <script type="text/javascript">alert("This Email OR Code exits!");</script>
                    
   @endif  
   @if(Session::has('success'))
            <script type="text/javascript">alert("success!");</script>
                    
   @endif 


     
@endsection
