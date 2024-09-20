@extends('backend.layouts.app')

<!--for custom styling-->
@section('style')
@endsection

@section('content')
@include('layouts._messages')
{{-- <form action="" method="POST" enctype="multipart/form-data">
    @csrf
<div class="card mt-3">
    <div class="card-header">
        Upload Resume
    </div>
    <div class="card-body">
        
        <input type="file" class="form-control{{ $errors->has('resume') ? ' is-invalid' : '' }}" name="resume">
        <button class="btn btn-success mt-3">Update</button>
        @if (Session::has('resume'))
            <div class="alert alert-success mt-3 alert-dismissible fade show" role="alert">
                <strong>Wow !</strong> {{ Session::get('resume') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            
        @endif

        @error('resume')
        <p class="m-0 small alert alert-danger shadow-sm">{{ $message }}</p> <!-- Use $message for error messages -->
        @enderror

    </div>
</div>

</form> --}}


<div class="col-lg-12">
    <div class="card">
        <div class="card-body ">
            <ul class="nav nav-tabs nav-tabs-bordered">
                <li class="nav-item">
                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-status">Status</button>
                </li>
                <li class="nav-item">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#upload-cv">Upload CV</button>
                </li>
                <li class="nav-item">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#edit-cv">Edit CV</button>
                </li>
                <li class="nav-item">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#delete-cv">Delete CV</button>
                </li>
            </ul>
            
            <div class="tab-content pt-3">
                <!-- Status Tab -->
                <div class="tab-pane fade show active profile-status" id="profile-status">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Profile Status</h5>
                            <div class="status-section">
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label"><strong>CV Uploaded:</strong></div>
                                    <div class="col-lg-9 col-md-8">
                                        @if(Auth::user()->cv_uploaded)
                                            <span class="text-success">✅ Yes</span>
                                        @else
                                            <span class="text-danger">❌ No</span>
                                        @endif
                                    </div>
                                </div>
                                <hr />
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label"><strong>Upload Date:</strong></div>
                                    <div class="col-lg-9 col-md-8">
                                        {{ Auth::user()->cv_uploaded ? Auth::user()->cv_upload_date : 'N/A' }}
                                    </div>
                                </div>
                                <hr />
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label"><strong>Status:</strong></div>
                                    <div class="col-lg-9 col-md-8">
                                        @if(Auth::user()->cv_uploaded)
                                            <span class="text-info">Your CV is currently under review.</span>
                                        @else
                                            <span class="text-warning">Please upload your CV for review.</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
                <!-- Upload CV Tab -->
                <div class="tab-pane fade" id="upload-cv">
                    <form action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Upload Your CV</h5>
                                <input type="file" name="cv" class="form-control" required>
                                <button type="submit" class="btn btn-primary mt-3">Upload</button>
                            </div>
                        </div>
                    </form>
                </div>
            
                <!-- Edit CV Tab -->
                <div class="tab-pane fade" id="edit-cv">
                    <form action="" method="POST">
                        @csrf
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Edit Your CV</h5>
                                <textarea name="cv_content" class="form-control" rows="5">{{ Auth::user()->cv_content }}</textarea>
                                <button type="submit" class="btn btn-success mt-3">Save Changes</button>
                            </div>
                        </div>
                    </form>
                </div>
            
                <!-- Delete CV Tab -->
                <div class="tab-pane fade" id="delete-cv">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Delete Your CV</h5>
                            <p>Are you sure you want to delete your CV? This action cannot be undone.</p>
                            <form action="" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-danger">Delete CV</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
@endsection

<!--customer js-->
@section('script')
@endsection
