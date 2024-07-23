@extends('backend.layouts.app')

<!--for custom styling-->
@section('style')
@endsection

@section('content')


<div class="col-lg-12">

  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Add New User</h5>

      @include('layouts._messages')
      <form class="row g-3" action="" method="post">
        {{ csrf_field() }}
        <div class="col-12">
          <label for="inputNanme4" class="form-label">Name</label>
          <input type="text" class="form-control" value="{{old('name')}}" name="name" >
          @error('name')
            <p class="m-0 small alert alert-danger shadow-sm">{{ $message }}</p> <!-- Use $message for error messages -->
          @enderror
        </div>
        <div class="col-12">
          <label for="inputEmail4" class="form-label">Email</label>
          <input type="email" class="form-control" id="inputEmail4" value="{{old('name')}}" name="email" >
          @error('email')
          <p class="m-0 small alert alert-danger shadow-sm">{{ $message }}</p> <!-- Use $message for error messages -->
        @enderror
        </div>
        <div class="col-12">
          <label for="inputPassword4" class="form-label">Password</label>
          <input type="password" class="form-control" id="inputPassword4" name="password" required>
          @error('password')
          <p class="m-0 small alert alert-danger shadow-sm">{{ $message }}</p> <!-- Use $message for error messages -->
        @enderror
        </div>
        <div class="col-12">
          <label for="inputAddress" class="form-label">status</label>
           <select class="form-control" name="status">
            <option {{old('status')? 'selected': ''}} value="1">Active</option>
            <option {{old('status')? 'selected': ''}} value="0">In Active</option>
           </select>
        </div>
        <div class="col-12">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form><!-- Vertical Form -->

    </div>
  </div>




@endsection

<!--customer js-->
@section('script')
@endsection
