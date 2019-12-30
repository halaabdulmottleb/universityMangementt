@extends('layouts.lib')
@section('title','Search')
@section('content')
<div class="content">
    {{-- header --}}
    <div class="header">
        <h3 class="p-2 pb-1">Searching for ..</h3>
        {{-- search --}}
        <div class="search m-1">
            {{-- search --}}
            <div class="form-group mb-0">
                <div class="p-0 position-relative">
                    <form action="" method="">
                        @csrf
                        <label for="search" class="position-absolute"><i class="fas fa-search"></i></label>
                        <input id="search" type="text" class="form-control search-input" name="search"
                            placeholder="Search Books">
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- content --}}
    <div class="main-table m-3">
        {{-- view boook  in table --}}
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th scope="col">Book title</th>
                        <th scope="col">Book author</th>
                        <th scope="col">Book code</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>kan mn badry :)</td>
                        <td>Mahmoud beh</td>
                        <td>21as2d1a</td>
                        <td>
                            <div class="w-100 d-flex justify-end position-relative">
                                <i class="fas fa-ellipsis-v cursor-pointer" id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item edit" href="#">Edit</a>
                                    <a class="dropdown-item delete" href="#">Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection