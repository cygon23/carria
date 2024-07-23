@extends('layouts.app')

@section('style')
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css') }}">
@endsection

@section('content')

<main class="main">

  <!-- Page Title -->
  <div class="page-title dark-background" style="margin-top: 150px">
    <div class="container position-relative">
      {{-- <h1>Blog</h1>
      <p>Let's explore by sharing joy and moments.</p> --}}
      <nav class="breadcrumbs">
        <ol>
          {{-- <li><a href="{{ url('home') }}">Home</a></li> --}}
          <li><a class="nav-link scrollto active" href="{{ url('home') }}">Home</a></li>
          <li class="current">Blog</li>
        </ol>
      </nav>
    </div>
  </div>

  <section id="blog-posts" class="blog-posts section">
    <div class="container">
        <div class="row gy-4">
            @foreach ($getRecord as $value)
                <div class="col-lg-4">
                    <article>
                        <div class="post-img">
                            <img src="{{ $value->image_url }}" alt="" class="img-fluid">
                        </div>
                        <p class="post-category">{{ $value->category_name }}</p>
                        <h2 class="title">
                            <a href="{{ url($value->slug) }}">
                                {!! strip_tags(Str::substr($value->title, 0, 30)) !!}
                            </a>
                        </h2>
                        <div class="d-flex align-items-center">
                            <div class="post-meta">
                                <p class="post-author">
                                    <i class="fa fa-user"></i> {{ $value->user_name }}
                                </p>
                                <p class="post-date">
                                    <time datetime="{{ $value->created_at }}">{{ $value->created_at }}</time>
                                </p>
                            </div>
                        </div>
                        @if (!empty($value->tags))
                            <p class="post-tags">{{ $value->tags }}</p>
                        @endif
                        <p>{!! strip_tags(Str::substr($value->description, 0, 170)) !!}...</p>
                        <a href="{{ url($value->slug) }}" class="btn btn-primary mt-3">Read More</a>
                    </article>
                </div>
            @endforeach
        </div>
    </div>
</section>




  <!-- Pagination -->
  <section id="blog-pagination" class="blog-pagination section">
    <div class="container">
      <div class="d-flex justify-content-center">
        <nav aria-label="Page navigation">
          {{-- {{ $getRecord->links() }} --}}
          {{-- {{ $getRecord->appends(request()->except('page'))->link() }} --}}
        </nav>
      </div>
    </div>
  </section>

</main>

@endsection

@section('script')

@endsection
