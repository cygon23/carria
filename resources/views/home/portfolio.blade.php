@extends('layouts.app')

@section('style')
@endsection

@section('content')

  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio">
    <div class="container">

      <div class="section-title" data-aos="zoom-out">
        <h2>Portfolio</h2>
        <p>What we've done</p>
      </div>

      <ul id="portfolio-flters" class="d-flex justify-content-end" data-aos="fade-up">
        <li data-filter="*" class="filter-active">All</li>
        <li data-filter=".filter-app">Mental Trainging</li>
        <li data-filter=".filter-card">Community support</li>
        <li data-filter=".filter-web">Events</li>
      </ul>

      <div class="row portfolio-container" data-aos="fade-up">

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-img"><img src="{{url('font/assets/img/portfolio/01.jpg')}}" class="img-fluid" alt=""></div>
          <div class="portfolio-info">
            <h4>Trainging</h4>
            <p>at iaa</p>
            <a href="{{url('font/assets/img/portfolio/01.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Trainging"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-img"><img src="{{url('font/assets/img/portfolio/2F2A0141.jpg')}}" class="img-fluid" alt=""></div>
          <div class="portfolio-info">
            <h4>Events</h4>
            <p>at iaa</p>
            <a href="{{url('font/assets/img/portfolio/2F2A0141.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Events"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-img"><img src="{{url('font/assets/img/portfolio/2F2A0083.jpg')}}" class="img-fluid" alt=""></div>
          <div class="portfolio-info">
            <h4>Our content creators with niajiri </h4>
            <p>@iaa</p>
            <a href="{{url('font/assets/img/portfolio/2F2A0083.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-img"><img src="{{url('font/assets/img/portfolio/2F2A9873.JPG')}}PG" class="img-fluid" alt=""></div>
          <div class="portfolio-info">
            <h4>Our partines</h4>
            <p>@iaa</p>
            <a href="{{url('font/assets/img/portfolio/2F2A9873.JPG')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-img"><img src="{{url('font/assets/img/portfolio/2F2A0195.jpg')}}" class="img-fluid" alt=""></div>
          <div class="portfolio-info">
            <h4>Dean mental talk</h4>
            <p>@iaa</p>
            <a href="assets/img/2F2A0195.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-img"><img src="{{url('font/assets/img/portfolio/03.jpg')}}" class="img-fluid" alt=""></div>
          <div class="portfolio-info">
            <h4>UNICONNECT 2024</h4>
            <p>@iaa</p>
            <a href="{{url('font/assets/img/portfolio/03.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-img"><img src="assets/img/portfolio/Team3.jpg" class="img-fluid" alt=""></div>
          <div class="portfolio-info">
            <h4>Carrier Ledies Tailk</h4>
            <p>@ iaa</p>
            <a href="{{url('font/assets/img/portfolio/2F2A0068.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-img"><img src="{{url('font/assets/img/portfolio/2F2A0158.jpg')}}" class="img-fluid" alt=""></div>
          <div class="portfolio-info">
            <h4>Mentor ship education</h4>
            <p>@ iaa</p>
            <a href="{{url('font/assets/img/portfolio/2F2A0158.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-img"><img src="assets/img/portfolio/work.jpg" class="img-fluid" alt=""></div>
          <div class="portfolio-info">
            <h4>Event</h4>
            <p>@ iaa</p>
            <a href="{{url('font/assets/img/portfolio/work.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Event"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Portfolio Section -->

@endsection

@section('script')

@endsection
