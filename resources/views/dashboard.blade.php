@extends('layouts.app')
@section('content')
 <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gray sidebar sidebar-dark toggled" id="accordionSidebar">
      <!-- Sidebar Toggler (Sidebar) -->
      <nav class="navbar navbar-dark">
        <button id="sidebarToggle" class="navbar-toggler" type="button">
            <span class="navbar-toggler-icon"></span>
        </button>
      </nav>
      <!-- Divider -->
      <!-- admin Items -->
        @if (Auth::user()->type == "admin")

      <!-- Nav Item - Dashboard -->
     
      <li class="nav-item active">
        <a class="nav-link" href="{{url('/home')}}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Create User -->

       <li class="nav-item active">
        <a class="nav-link" href="/Dashboard/CreateUser">
          <i class="fas fa-users"></i>
          <span>Create User</span></a>
      </li>

      <!-- Authorization -->

       <li class="nav-item active">
        <a class="nav-link" href="/Dashboard/AuthUser">
          <i class="fas fa-user-check"></i>
          <span>Authorization</span></a>
      </li>

      <!-- TimeTable -->

      <li class="nav-item active">
        <a class="nav-link" href="/Dashboard/Table">
          <i class="fas fa-table"></i>
          <span>Create Timetable </span></a>
      </li>
       <li class="nav-item active">
        <a class="nav-link" href="/Dashboard/viewTable">
          <i class="fas fa-table"></i>
          <span>View Timetable </span></a>
      </li>


      <!-- Create Course -->

      <li class="nav-item active">
        <a class="nav-link" href="/Dashboard/CreateCourse">
          <i class="fas fa-book"></i>
          <span>Create Course </span></a>
      </li>
      




      @elseif(Auth::User()->type == "student")

       <!-- Course -->
       <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true"
          aria-controls="collapsePages">
          <i class="fas fa-fw fa-book"></i>
          <span>Course</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="/Dashboard/enrollcourse">Enroll course</a>
            <a class="collapse-item" href="/Dashboard/course">view Course</a>
          </div>
        </div>
      </li>
       <li class="nav-item active">
        <a class="nav-link" href="/Dashboard/StudentTable">
          <i class="fas fa-table"></i>
          <span>View Timetable </span></a>
      </li>

      @elseif(Auth::User()->type == "professor")
       <!-- Create Course -->

      <li class="nav-item active">
        <a class="nav-link" href="/Dashboard/CourseManage">
          <i class="fas fa-book"></i>
          <span>Course manage </span></a>
      </li>

      <!-- viewTable -->
       <li class="nav-item active">
        <a class="nav-link" href="/Dashboard/viewTable">
          <i class="fas fa-table"></i>
          <span>View Timetable </span></a>
      </li>

      @endif


      
    </ul>
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
    <!-- test -->
   
    <!-- Content  -->
     
      @yield('dashboard_content')

    </div>
  </div>
    
   

@endsection