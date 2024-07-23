@extends('backend.layouts.app')

<!--for custom styling-->
@section('style')
@endsection

@section('content')


<div class="col-lg-12">

  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Add New Category</h5>

      @include('layouts._messages')
      <form class="row g-3" action="" method="post">
        {{ csrf_field() }}
        <div class="col-12">
          <label for="inputNanme4" class="form-label">Name*</label>
          <input type="text" class="form-control" value="{{old('name')}}" name="name" >
          @error('name')
            <p class="m-0 small alert alert-danger shadow-sm">{{ $message }}</p>
          @enderror
        </div>
        <div class="col-12">
          <label for="inputEmail4" class="form-label">Title*</label>
          <input type="email" class="form-control" id="inputEmail4" value="{{old('title')}}" name="email" >
          @error('title')
          <p class="m-0 small alert alert-danger shadow-sm">{{ $message }}</p>
        @enderror
        </div>

    <hr>

          <div  class="col-12">
          <label for="inputEmail4" class="form-label">Meta Title</label>
          <input type="meta_title" class="form-control"  value="{{old('title')}}" name="title" required >
          @error('title')
          <p class="m-0 small alert alert-danger shadow-sm">{{ $message }}</p>
        @enderror
        </div>


        <div class="col-12">
            <label for="inputEmail4" class="form-label">Meta Description</label>
             <textarea name="meta_description" class="form-control" value="{{old('meta_description')}}">

             </textarea>
            @error('meta_description')
            <p class="m-0 small alert alert-danger shadow-sm">{{ $message }}</p>
             @enderror
        </div>

         <div  class="col-12">
          <label for="inputEmail4" class="form-label">Meta Keywords</label>
          <input type="email" class="form-control" id="inputEmail4" value="{{old('meta_keywords')}}" name="meta_keywords" >
          @error('meta_keywords')
          <p class="m-0 small alert alert-danger shadow-sm">{{ $message }}</p>
        @enderror
        </div>

    <hr>

        <div class="col-12">
          <label for="inputAddress" class="form-label">status*</label>
           <select class="form-control" name="status">
            <option value="1">Active</option>
            <option value="0">In Active</option>
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
