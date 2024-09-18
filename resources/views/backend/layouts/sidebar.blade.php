  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link @if(Request::segment(2) != 'dashboard') collapsed  @endif" href="{{url('panel/dashboard')}}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li>


      <li class="nav-item">
        <a class="nav-link  @if(Request::segment(2) != 'skills') collapsed  @endif" href="{{url('skills')}}">
          <i class="bi bi-person-gear"></i>
          <span>Skills</span>          
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link  @if(Request::segment(2) != 'none') collapsed  @endif" href="{{url('')}}">
          <i class="bi bi-door-open"></i>
            <span>Opportunities</span>
        </a>
      </li>

   
      <li class="nav-item">
        <a class="nav-link @if(Request::segment(2) != 'user') collapsed  @endif" href="{{url('panel/user/list')}}">
          <i class="bi bi-person"></i>
          <span>Users</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link  @if(Request::segment(2) != 'blog') collapsed  @endif" href="{{url('panel/blog/list')}}">
          <i class="bi bi-card-list"></i>
          <span>Blog</span>
        </a>
      </li>


      <li class="nav-item">
        <a class="nav-link  @if(Request::segment(2) != 'category') collapsed  @endif" href="{{url('panel/category/list')}}">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Category</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link  @if(Request::segment(2) != 'help') collapsed  @endif" href="{{url('panel/user/help')}}">
          <i class="bi bi-question-circle"></i>
          <span>Help</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->

      <li class="nav-item">
        <a class="nav-link  @if(Request::segment(2) != 'inbox') collapsed  @endif" href="{{url('panel/inbox/list')}}">
          <i class="bi bi-envelope"></i>
          <span>Inbox</span>
        </a>
      </li><!-- End Contact Page Nav -->



      <li class="nav-item">
        <a class="nav-link  @if(Request::segment(2) != 'uploaded cv') collapsed  @endif" href="pages-error-404.html">
          <i class="bi bi-dash-circle"></i>
          <span>Upload CV</span>
        </a>
      </li><!-- End Error 404 Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->
