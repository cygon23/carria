

@extends('backend.layouts.app')

<!--for custom styling-->
@section('style')
<style>
    .main {
    min-height: 100vh; /* Full viewport height */
    display: flex;
    flex-direction: column;
    justify-content: space-between; /* Adjust this as needed */
  }
  .row {
    flex-grow: 1; /* Allow row to grow and take available space */
    height: 100%; /* Optional, ensure full height */
  }
  .col-xl-4, .col-xl-8 {
    height: 100%; /* Make sure columns take full height */
  }
</style>
@endsection

@section('content')

<div class="col-lg-12">
  <div style="height: 95px;"></div> <!-- Space for top margin -->
<div class="unit-5 overlay" style="background-image: url({{ asset('external/images/hero_2.jpg') }}); padding: 60px 0;">
    <div class="container text-center">
        <h1 class="mb-0 text-white" style="font-size: 2.5rem;">Profile</h1>
    </div>
</div>

<div class="site-section bg-light">
    <div class="container">
        <div class="row">
            <div class="col-xl-4">
                <div class="card">
                    <div class="card-body profile-card pt-2 d-flex flex-column align-items-center">
                      <img src="{{ asset('storage/uploads/avatar/' . Auth::user()->profile_image_url) }}" alt="Avatar">
                        <h2>{{ Auth::user()->name }}</h2>
                        <h3>{{ Auth::user()->department }}</h3>
                        <div class="social-links mt-2">
                            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body ">
                        <ul class="nav nav-tabs nav-tabs-bordered">
                            <li class="nav-item">
                                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                            </li>

                            <li class="nav-item">
                              <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-avator">Avator</button>
                          </li>

                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-settings">Settings</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
                            </li>
                        </ul>

                        <div class="tab-content ">
                            <div class="tab-pane fade show active profile-overview" id="profile-overview">
                                <h5 class="card-title">About</h5>
                                <p class="small fst-italic">{{ Auth::user()->bio }}</p>
                                <h5 class="card-title">Profile Details</h5>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Full Name</div>
                                    <div class="col-lg-9 col-md-8">{{ Auth::user()->name }}</div>
                                </div>
                                <hr />

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Job</div>
                                    <div class="col-lg-9 col-md-8">{{ Auth::user()->target_role }}</div>
                                </div>

                                <hr />
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Experience</div>
                                    <div class="col-lg-9 col-md-8">{{ Auth::user()->experience }} years</div>
                                </div>

                                <hr />
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Address</div>
                                    <div class="col-lg-9 col-md-8">{{ Auth::user()->address }}</div>
                                </div>
                                <hr />

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Phone</div>
                                    <div class="col-lg-9 col-md-8">{{ Auth::user()->phone }}</div>
                                </div>
                                <hr />

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Email</div>
                                    <div class="col-lg-9 col-md-8">{{ Auth::user()->email }}</div>
                                </div>
                            </div>

                            <div class="tab-pane fade profile-edit pt-3" id="profile-avator">
                              @include('layouts._messages')
                              <form action=" " method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="card">
                                    <div class="card-header mb-3">
                                        Avatar
                                    </div>
                                             @if (!empty(Auth::user()->profile_image_url))
                                          <img src="{{ asset('storage/uploads/avatar/' . Auth::user()->profile_image_url) }}" style="width:100px; height:100px; border-radius:100px; object-fit:cover; margin:0px auto" class="border mb-3" alt="Avatar">
                                          @else
                                    <img src="https://i.pravatar.cc/150" style="width:100px; border-radius:100px; margin:0px auto" class="border mb-3" alt="Default Avatar">
                                @endif


                                    <div class="card-body p-0 text-center">
                                        <input type="file" class="form-control{{ $errors->has('profile_image_url') ? ' is-invalid' : '' }}" name="profile_image_url">
                                        <button class="btn btn-success w-100 mt-3">Update</button>
                            
                                        @error('profile_image_url')
                                            <p class="m-0 small alert alert-danger shadow-sm">{{ $message }}</p> <!-- Use $message for error messages -->
                                        @enderror
                            
                                        @if (Session::has('avatar'))
                                            <div class="alert alert-success mt-3 alert-dismissible fade show" role="alert">
                                                {{ Session::get('avatar') }}
                                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </form>                       
                          </div>

                            <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
                                @include('layouts._messages')
                                <form action=" " method="POST">
                                    @csrf
                                    <div class="row mb-3">
                                        <label for="address" class="col-md-4 col-lg-3 col-form-label">Address</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input type="text" class="form-control" name="address" value="{{ old('address', Auth::user()->address) }}">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="phone" class="col-md-4 col-lg-3 col-form-label">Phone number</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input type="text" class="form-control" name="phone" value="{{ old('phone', Auth::user()->phone) }}">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="experience" class="col-md-4 col-lg-3 col-form-label">Experience</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input type="text" class="form-control" name="experience" value="{{ old('experience', Auth::user()->experience) }}">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="bio" class="col-md-4 col-lg-3 col-form-label">Bio</label>
                                        <div class="col-md-8 col-lg-9">
                                            <textarea name="bio" class="form-control" style="height: 120px">{{ old('bio', Auth::user()->bio) }}</textarea>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button class="btn btn-success">Update</button>
                                    </div>
                                </form>
                            </div>

                            <div class="tab-pane fade pt-3" id="profile-settings">
                                <!-- Settings Form -->
                                <form>
                                    <div class="row mb-3">
                                        <label for="emailNotifications" class="col-md-4 col-lg-3 col-form-label">Email Notifications</label>
                                        <div class="col-md-8 col-lg-9">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="changesMade" checked>
                                                <label class="form-check-label" for="changesMade">Changes made to your account</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary">Save Changes</button>
                                    </div>
                                </form>
                            </div>

                            <div class="tab-pane fade pt-3" id="profile-change-password">
                                <!-- Change Password Form -->
                                <form>
                                    <div class="row mb-3">
                                        <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="password" type="password" class="form-control" id="currentPassword">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="newpassword" type="password" class="form-control" id="newPassword">
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary">Change Password</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

    @endsection

<!--customer js-->
@section('script')
@endsection
