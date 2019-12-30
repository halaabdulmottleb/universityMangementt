@extends('dashboard')
@section('dashboard_content')

  <div class="container">
        <!-- start form -->
            
            <table class="table">
  <thead>
     <tr>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col">#</th>
      <th scope="col">ID</th>
      <th scope="col">Code</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Type</th>
      <th scope="col">Authorization</th>
    </tr>
  </thead>
  <tbody>
     @foreach($requests as $request)
    <tr>
     
      <td></td>
      <td></td>
      <td>{{$request->id}}</td>
      <td>{{$request->user_id}}</td>
      <td>{{$request->code}}</td>
      <td>{{$request->name}}</td>
      <td>{{$request->email}}</td>
      <td>{{$request->type}}</td>
      <!-- authorization -->
      <td>
        
           <div class="btn-group">
              <button  type="submit" form="Accept" class="btn btn-success">Accept</button>
              <button type="submit"  form="Rejec" class="btn btn-danger">Delete</button>
            </div>
        <!-- acceptUser -->
        <form id="Accept" style="display: inline;" method="post" action="{{ route('acceptUser', [$request->id]) }}">
           @csrf
        </form>
       <!-- deletUser -->
         <form  id="Rejec" style="display: inline;" method="post" action="{{ route('deleteUser', [$request->id]) }}">
           @csrf
        </form>
        
      </td>
       
    </tr>
    @endforeach
  </tbody>
</table>
   </div>


     
@endsection
