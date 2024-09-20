

@extends('backend.layouts.app')

<!--for custom styling-->
@section('style')

@endsection

@section('content')

<!-- Dashboard Container -->
<div class="container-fluid">
  <div class="row">
    
    <!-- Sidebar -->
    {{-- <nav class="col-xxl-2 col-md-3 bg-light sidebar">
      <div class="sidebar-header">
        <h4>Company Dashboard</h4>
      </div>
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link active" href="#">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Analytics</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Projects</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Settings</a>
        </li>
      </ul>
    </nav>
    <!-- End Sidebar --> --}}
    
    <!-- Main Content -->
    <main class="col-xxl-10 col-md-9">
      <div class="row">
        
        <!-- Revenue Card -->
        <div class="col-xxl-4 col-md-6">
          <div class="card info-card revenue-card">
            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>
                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
              </ul>
            </div>
            <div class="card-body">
              <h5 class="card-title">Revenue <span>| This Month</span></h5>
              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-currency-dollar"></i>
                </div>
                <div class="ps-3">
                  <h6>$3,264</h6>
                  <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End Revenue Card -->
        
        <!-- User Analytics Card -->
        <div class="col-xxl-4 col-md-6">
          <div class="card info-card user-card">
            <div class="card-body">
              <h5 class="card-title">Users <span>| This Month</span></h5>
              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-person"></i>
                </div>
                <div class="ps-3">
                  <h6>1,235</h6>
                  <span class="text-danger small pt-1 fw-bold">5%</span> <span class="text-muted small pt-2 ps-1">decrease</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End User Analytics Card -->
        
        <!-- Performance Metrics Card -->
        <div class="col-xxl-4 col-md-6">
          <div class="card info-card performance-card">
            <div class="card-body">
              <h5 class="card-title">Performance <span>| This Quarter</span></h5>
              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-bar-chart"></i>
                </div>
                <div class="ps-3">
                  <h6>85%</h6>
                  <span class="text-success small pt-1 fw-bold">3%</span> <span class="text-muted small pt-2 ps-1">increase</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End Performance Metrics Card -->
        
      </div>

      <!-- Notifications Section -->
      <div class="row mt-4">
        <div class="col-12">
          <div class="card notifications-card">
            <div class="card-body">
              <h5 class="card-title">Notifications</h5>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">New user registered.</li>
                <li class="list-group-item">Project deadline approaching.</li>
                <li class="list-group-item">Revenue report generated.</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- End Notifications Section -->

    </main>
    <!-- End Main Content -->
    
  </div>
</div>


@endsection
<!--customer js-->
@section('script')

@endsection
