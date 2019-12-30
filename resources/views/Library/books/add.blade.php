@extends('layouts.lib')
@section('title','Add book')
@section('content')
<div class="content">
  {{-- header --}}
  <div class="header">
    <h3 class="p-2 pb-1">Add New Book..</h3>
  </div>
  {{-- form --}}
  <div class="main">
    <form method="POST" action="" class="w-100 row m-0 justify-content-around">
      @csrf
      <div class="m-3 w-100">
        <div class="p-3">
          <div class="container">
            {{-- title --}}
            <div class="form-group mb-0">
              <div class="col-12 col-md-8 ml-md-4">
                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title"
                  placeholder="  " required>
                <label for="title" class="col-md-12">{{ __('Book title') }}</label>
                @error('title')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>
            {{-- author --}}
            <div class="form-group mb-0">
              <div class="col-12 col-md-8 ml-md-4">
                <input id="author" type="text" class="form-control @error('author') is-invalid @enderror" name="author"
                  placeholder="  " required>
                <label for="author" class="col-md-12">{{ __('Book author') }}</label>

                @error('author')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>
            {{-- code --}}
            <div class="form-group mb-0">
              <div class="col-12 col-md-8 ml-md-4">
                <input id="code" type="text" class="form-control @error('code') is-invalid @enderror" name="code"
                  placeholder="  " required>
                <label for="code" class="col-md-12">{{ __('Book code') }}</label>

                @error('code')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>
            {{-- btn --}}
            <div class="form-group col-12 col-md-10 ml-md-4">
              {{-- submit --}}
              <div class="col-md-4 mb-2">
                <button type="submit" class="btn btn-primary w-100 border-0">
                  {{ __('Add Book') }}
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>
@endsection