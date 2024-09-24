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
      <form class="row g-3"  enctype="multipart/form-data">

        <div class="col-12">
          <label class="form-label">Skills*</label>
          <select name="skills" class="form-control" multiple>
              <option value="html">HTML</option>
              <option value="css">CSS</option>
              <option value="javascript">JavaScript</option>
              <option value="php">PHP</option>
              <option value="python">Python</option>
              <option value="laravel">Laravel</option>
              <option value="django">Django</option>
              <option value="networking">Networking</option>
              <option value="cybersecurity">Cybersecurity</option>
              <option value="docker">Docker</option>
              <!-- Add more skills as needed -->
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
