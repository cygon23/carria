@extends('backend.layouts.app')

@section('style')
<link rel="stylesheet" href="{{url('assets/tags/bootstrap-tagsinput.css')}}">
@endsection

@section('content')


<div class="col-lg-12">

  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Edit New Blog</h5>

      @include('layouts._messages')
      <form class="row g-3" action="" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}

        <div class="col-12">
          <label for="inputEmail4" class="form-label">Title*</label>
          <input type="text" class="form-control" value="{{$getRecord->title}}"  name="title" >
        </div>

        <div class="col-12">
            <label  class="form-label">Category*</label>
            <select name="category_id" class="form-control">
                <option value="">Select Category</option>
               @foreach ($getCategory as $value )
               <option {{ ($getRecord->category_id == $value->id) ? 'selected' : ''}} value="{{$value->id}}">{{$value->name}}</option>
               @endforeach
            </select>
          </div>

          <div class="col-12">
            <label  class="form-label">Image</label>
            <input type="file" class="form-control"  name="image_file">
            @if(!empty($value->image_url))
            <img src="{{ $value->image_url }}" alt="" style="height:50px; width:50px">
        @endif
          </div>

          <div class="col-12">
            <label  class="form-label tinymce-editor">Description</label>
            <textarea  name="description" cols="30" rows="10" class="form-control tinymce-editor"> {{$getRecord->description}} </textarea>
          </div>

    <hr>

        <div class="col-12">
            @php
            $tags = '';
        @endphp

        @foreach ($getRecord->getTag as $value)
            @php
                $tags .= $value->name.',';
            @endphp
        @endforeach

        {{$tags}}
          <label  class="form-label">Tags</label>
             <input  type="text" id="tags" class="form-control" value="{{$tags}}"  name="tags" >
        </div>

        <div class="col-12">
            <label class="form-label">Meta Description</label>
             <textarea  name="meta_description" class="form-control" > {{$getRecord->meta_description}}</textarea>
        </div>

         <div  class="col-12">
          <label  class="form-label">Meta Keywords</label>
          <input type="text" class="form-control" value="{{$getRecord->meta_keywords}}"  name="meta_keywords" >
        </div>



    <hr>

    <div class="col-12">
        <label for="inputAddress" class="form-label">Publish*</label>
         <select class="form-control" name="is_publish">
          <option {{ ($getRecord->is_publish == 1) ? 'selected' : ''}} value="1">Yes</option>
          <option {{ ($getRecord->is_publish == 0) ? 'Not selected' : ''}} value="0">No</option>
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
          <button type="submit" class="btn btn-primary">update</button>
        </div>
      </form><!-- Vertical Form -->

    </div>
  </div>
@endsection

@section('script')
<script src="{{ url('assets/tags/bootstrap-tagsinput.js') }}"></script>

<script type="text/javascript">
    $("#tags").tagsinput();
</script>
@endsection
