@extends('layouts.app')
@section('content')
<div id="wrapper">
	<div class="col-md-8 offset-md-2">
	<div class="mt-5">
		<div class="card" >
            <div class="card-body">
              <h5 class="card-title">Personal Info :</h5>
              <hr>
            </div>
            <div class="card-body">
            	<div class="col-md-8 offset-md-2">
            		<!--perosonal  -->
            		<p style="font-size: 30px ;text-transform: uppercase; font-weight: bold" > {{Auth::user()->name}}</p>
            		<p > <small>Email</small>{{Auth::user()->email}}</p>
            		<p > <small>Mobile</small>{{Auth::user()->mobile}}</p>
            		<!--  -->
            		<p > <small>ID</small>{{Auth::user()->userID}}</p>
            		<p > <small>Code</small>{{Auth::user()->code}}</p>
            		<p > <small>Level</small>{{Auth::user()->level}}</p>

            	</div>
            	 
   
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                       Update Info
                      </button>
                
             
            </div>
        </div>
     
		</div>
	</div>
    <!-- Update -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Info</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<!-- body -->
        <form style="display: inline;" method="POST">
        	@csrf
        	<!-- Name -->
           <div class="form-group row">
             <label for="inputPassword" class="col-sm-2 col-form-label">Name</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputPassword" name="name" placeholder="Name">
              </div>
           </div>
           <!-- Mobile -->
           <div class="form-group row">
             <label for="inputPassword" class="col-sm-2 col-form-label">Mobile</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputPassword" name="mobile" placeholder="mobile">
              </div>
           </div>
           <!-- password -->
           <div class="form-group row">
             <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputPassword" name="password" placeholder="Password">
              </div>
           </div>
           
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
       </form>
      </div>
    </div>
  </div>
</div>




</div>
@endsection