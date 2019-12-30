<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

     <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Document</title>


 
      <!-- Styles -->
    <link href="{{ asset('css/Auth/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/Auth/css/registration.css') }}" rel="stylesheet">
    <link href="{{ asset('css/Auth/css/all.css') }}" rel="stylesheet">



       <!-- Scripts -->
    <script src="{{ asset('js/Auth/js/jquery.min.js') }}" defer></script>
    <script src="{{ asset('js/Auth/js/bootstrap.min.js') }}" defer></script>
    <script src="{{ asset('js/Auth/js/popper.js') }}" defer></script>
    <script src="{{ asset('js/Auth/js/all.js') }}" defer></script>
    <script src="{{ asset('js/Auth/js/main.js') }}" defer></script>

   <style type="text/css">
      #registration{
         background: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),
       url("{{ asset('css/Auth/css/computer_keyboard_mouse_laptop_mac_apple_66734_1920x1080.jpg') }}") ;
}
   </style>



   
</head>
<body id="registration">
    <div class="container ">
        <div class="row">
            <div class="col-md-7 uni">
                <h1 class="text-left">University Management System</h1>
                <h3><i class="fas fa-users edit"></i>
                    Student and staff  information management</h3>
                <h3><i class="fas fa-calendar-week edit"></i>
                    Calendar and classrooms distribution management</h3>
                <h3><i class="fas fa-book edit"></i>
                    Courses management</h3>
                <h3><i class="fas fa-money-check edit"></i>
                    Finance management .</h3>
                    
                    
            </div>
        
            <div class="col-md-5 registration-section ">
                <div class="model-content">
                
                  <form method="POST" action="{{ route('sign') }}" class="text-center">
                        @csrf

                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Name">
                             {!! $errors->first('name', '<small style="color:red;">:message</small>') !!}

                            
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Email">
                             {!! $errors->first('email', '<small style="color:red;">:message</small>') !!}
                        </div>
                        <div class="form-group">
                            <input type="number" name="mobile"class="form-control" placeholder="Phone Number">
                             {!! $errors->first('mobile', '<small style="color:red;">:message</small>') !!}
                        </div>
                        <div class="form-group">
                            <input type="text" name="level"class="form-control" placeholder="Level">
                            {!! $errors->first('level', '<small style="color:red;">:message</small>') !!}

                        </div>
                        
                        <div class="form-group">
                            <input type="number" name="code" class="form-control" placeholder="Code">
                             {!! $errors->first('code', '<small style="color:red;">:message</small>') !!}
                        </div>
                        <div class="form-group">
                            <input type="number" name="id" class="form-control" placeholder="ID">
                             {!! $errors->first('id', '<small style="color:red;">:message</small>') !!}
                        </div>
                        <div class="form-group">
                            
                            <input type="radio"  value="Student" name="type"> <span class="users">Student</span>
                            <input type="radio" value="professor" name="type"> <span class="users"> professor </span>

                            

                        </div>
                        <div class="form-group">

                             {!! $errors->first('type', '<small style="color:red;">:message</small>') !!}
                         </div>
                        <button class="btn btn-primary form-group" type="submit"> <i class=" fa fa-arrow-circle-right"></i> Submit</button>
                        
                    </form>
                        
                </div>
            </div>   
        </div>
    </div>
    @if(Session::has('fail'))
            <script type="text/javascript">alert("You Can't SIGN-UP with this EMAIL or CODE");</script>
                    
   @endif  
   @if(Session::has('success'))
            <script type="text/javascript">alert("success!");</script>
                    
   @endif 

</body>
</html>