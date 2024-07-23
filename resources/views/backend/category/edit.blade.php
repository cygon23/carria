@extends('backend.layouts.app')

<!--for custom styling-->
@section('style')
@endsection

@section('content')


<div class="col-lg-12">

  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Edit New Category</h5>

      @include('layouts._messages')
      <form class="row g-3" action="" method="post">
        {{ csrf_field() }}
        <div class="col-12">
          <label for="inputNanme4" class="form-label">Name*</label>
          <input type="text" class="form-control" value="{{$getRecord->name}}" name="name" >
          @error('name')
            <p class="m-0 small alert alert-danger shadow-sm">{{ $message }}</p>
          @enderror
        </div>
        <div class="col-12">
          <label for="inputEmail4" class="form-label">Title*</label>
          <input type="text" class="form-control" value="{{$getRecord->title}}" name="email" >
          @error('title')
          <p class="m-0 small alert alert-danger shadow-sm">{{ $message }}</p>
        @enderror
        </div>

    <hr>

          <div  class="col-12">
          <label  class="form-label">Meta Title</label>
          <input type="meta_title" class="form-control"  value="{{$getRecord->title}}" name="title" required >
          @error('title')
          <p class="m-0 small alert alert-danger shadow-sm">{{ $message }}</p>
        @enderror
        </div>


        <div class="col-12">
            <label class="form-label">Meta Description</label>
             <textarea name="meta_description" class="form-control" value="{{$getRecord->meta_description}}">

             </textarea>
            @error('meta_description')
            <p class="m-0 small alert alert-danger shadow-sm">{{ $message }}</p>
             @enderror
        </div>

         <div  class="col-12">
          <label for="inputEmail4" class="form-label">Meta Keywords</label>
          <input type="text" class="form-control" id="inputEmail4" value="{{$getRecord->meta_keywords}}" name="meta_keywords" >
          @error('meta_keywords')
          <p class="m-0 small alert alert-danger shadow-sm">{{ $message }}</p>
        @enderror
        </div>

    <hr>

        <div class="col-12">
          <label for="inputAddress" class="form-label">status*</label>
           <select class="form-control" name="status">
            <option {{($getRecord->status == 1)? 'selected' : ''}} value="1">Active</option>
            <option {{($getRecord->status == 0)? 'not selected' : ''}} value="0">In Active</option>
           </select>
        </div>
        <div class="col-12">
          <button type="submit" class="btn btn-primary">Upadate</button>
        </div>
      </form><!-- Vertical Form -->

    </div>
  </div>

@endsection

<!--customer js-->
@section('script')
@endsection
