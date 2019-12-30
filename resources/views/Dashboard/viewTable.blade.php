@extends('dashboard')
@section('dashboard_content')

  <div class="container">
      <div class="row">

        
     @foreach($tables as $table)
     <div class="col-md-4 offset-md-1 mt-3">
      <div class="card" style="width: 18rem;">
         <div class="card-body">
           <h5 class="card-title">TimeTable</h5>
           <hr>
           
           <p class="card-text">
            <small style="display: inline;">Level:</small>
            {{$table->level}}
          </p>
           <a href="/Dashboard/donwloadTable/{{$table->id}}" class="card-link">Download</a>
         </div>
       </div>
       
     </div>
      @endforeach
      </div>
   </div>


     
@endsection
