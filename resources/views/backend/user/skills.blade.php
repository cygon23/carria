@extends('backend.layouts.app')

<!--for custom styling-->
@section('style')
<link rel="stylesheet" href="{{url('assets/tags/bootstrap-tagsinput.css')}}">
@endsection

@section('content')


<div class="col-lg-12">

  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Add Skills</h5>

      @include('layouts._messages')
      <form class="row g-3" action="" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}

       
        <div class="col-12">
            <label class="form-label">Category*</label>
            <select name="category_id" class="form-control">
                <option value="">Select Category</option>
                {{-- @foreach ($getCategory as $category )
                    <option value="{{$category->id}}">{{$category->title}}</option>
                @endforeach --}}
            </select>
        </div>

        
          <div class="col-12">
            <label  class="form-label tinymce-editor">Description*</label>
            <textarea name="description" id="" cols="30" rows="10" class="form-control tinymce-editor">

            </textarea>
          </div>

    <div class="col-12">
        <label for="inputAddress" class="form-label">Publish*</label>
         <select class="form-control" name="is_publish">
          <option value="1">Yes</option>
          <option value="0">No</option>
         </select>
      </div>

        <div class="col-12" style="margin-top:30px; ">
          <label for="inputAddress" class="form-label">status*</label>
           <select class="form-control" name="status">
            <option value="1">Active</option>
            <option value="0">In Active</option>
           </select>
        </div>
        <div class="col-12">
          <button type="submit" class="btn btn-primary">Add</button>
        </div>
      </form><!-- Vertical Form -->

    </div>
  </div>
@endsection

<!--customer js-->
@section('script')
<script src="{{ url('assets/tags/bootstrap-tagsinput.js') }}"></script>

<script type="text/javascript">
    $("#tags").tagsinput();
</script>
@endsection
