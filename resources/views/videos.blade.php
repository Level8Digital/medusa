@extends('layouts.layout2')

@section('title', 'Videos')

@section('styles')

@endsection

@section('content')

<!-- Header -->
<header class="header header-inverse bg-fixed" style="background-image: url(assets/img/greek-gods.jpg)" data-overlay="8">
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
    <div class="container">
      <header class="section-header">
        <small>VIDEO COLLECTION</small>
        <hr>
      </header>

      <section class="section overflow-hidden">
        <div class="container">
          <div class="row gap-y align-items-center">

            <div class="col-md-4 mx-auto text-center text-md-left">
              <h3>We made it easy peasy</h3>
              <p>Fresh fellow even the whole is work outcome them. They original on mountains, drew the support time. The of to graduate. Into to is the to she at return understand every in there transmitting you've he the was and in finger.</p>
              <br>
              <a class="btn btn-lg btn-outline-info" href="https://www.youtube.com/watch?v=ah4pcPbRi2M" data-provide="lightbox"><i class="fa fa-play mr-4"></i> Watch a video</a>
            </div>


            <div class="col-md-6">
              <img class="rounded aos-init aos-animate" src="{{ url('assets/img/thumb/9.jpg') }}" alt="..." data-aos="fade-left">
            </div>

          </div>
        </div>
      </section>

      <hr class="hr-dark" />

      <section class="section overflow-hidden">
        <div class="container">
          <div class="row gap-y align-items-center">

            <div class="col-md-4 mx-auto text-center text-md-left">
              <h3>We made it easy peasy</h3>
              <p>Fresh fellow even the whole is work outcome them. They original on mountains, drew the support time. The of to graduate. Into to is the to she at return understand every in there transmitting you've he the was and in finger.</p>
              <br>
              <a class="btn btn-lg btn-outline-info" href="https://www.youtube.com/watch?v=ah4pcPbRi2M" data-provide="lightbox"><i class="fa fa-play mr-4"></i> Watch a video</a>
            </div>


            <div class="col-md-6">
              <img class="rounded aos-init aos-animate" src="{{ url('assets/img/thumb/9.jpg') }}" alt="..." data-aos="fade-left">
            </div>

          </div>
        </div>
      </section>

    </div>
  </section>
</main>
<!-- END Main container -->

@endsection
