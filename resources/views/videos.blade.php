@extends('layouts.layout2')

@section('title', 'Videos')

@section('styles')

@endsection

@section('content')

<!-- Header -->
<header class="header header-inverse bg-fixed" style="background-image: url(assets/img/greek-gods.jpg)" data-overlay="7">
  <div class="container text-center">

    <div class="row">
      <div class="col-12 col-lg-8 offset-lg-2">

        <h1>Videos</h1>
        <p class="fs-20 opacity-70">Learn how to use the Olympus Suite.</p>

      </div>
    </div>

  </div>
</header>

<!-- Main container -->
<main class="main-content">
  <section class="section">
    <div class="container mb-30">
      <header class="section-header">
        <small>VIDEO COLLECTION</small>
        <hr>
      </header>

      <div class="container">
        <header class="section-header">
          <h2>Explore</h2>
        </header>

        <div class="row">
          <div class="col-md-8 mx-auto">

            <div class="video-btn-wrapper aos-init aos-animate" data-aos="fade-up">
              <img class="shadow-2 rounded-lg" src="../assets/img/thumb/9.jpg" alt="watch a video">
              <a class="btn btn-circle btn-xl btn-info" href="https://www.youtube.com/watch?v=ah4pcPbRi2M" data-provide="lightbox"><i class="fa fa-play"></i></a>
            </div>

          </div>
        </div>
      </div>

      <hr class="hr-dark mt-70 mb-70" />

      <div class="container">
        <header class="section-header">
          <h2>Explore</h2>
        </header>

        <div class="row">
          <div class="col-md-8 mx-auto">

            <div class="video-btn-wrapper aos-init aos-animate" data-aos="fade-up">
              <img class="shadow-2 rounded-lg" src="../assets/img/thumb/9.jpg" alt="watch a video">
              <a class="btn btn-circle btn-xl btn-info" href="https://www.youtube.com/watch?v=ah4pcPbRi2M" data-provide="lightbox"><i class="fa fa-play"></i></a>
            </div>

          </div>
        </div>
      </div>

    </div>
  </section>
</main>
<!-- END Main container -->

@endsection
