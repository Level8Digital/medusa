@extends('layouts.layout3')

@section('title', 'Components')

@section('styles')

@endsection

@section('content')

<!-- Header -->
<header class="header header-inverse bg-fixed" style="background-image: url(assets/img/greek-gods.jpg)" data-overlay="8">
  <div class="container text-center">

    <div class="row">
      <div class="col-12 col-lg-8 offset-lg-2">

        <h1>Pricing</h1>
        <p class="fs-20 opacity-70">Sharpen your blade and get the edge in your favor today.</p>

      </div>
    </div>

  </div>
</header>
<!-- END Header -->

<main class="main-content">

  <section class="section">
    <div class="container">
      <header class="section-header">
        <small>Pricing</small>
        <h2>Choose Your Access</h2>
        <hr>
        <p class="lead">Unlike most pay to use trading tools that require an expensive monthly subscription, the Olympus Suite is available for a one time fee.</p>
      </header>

      <div class="row gap-y">

        <div class="col-12 col-lg-4">
          <div class="pricing-2">
            <h2 class="price"><span class="price-unit">$</span> 75</h2>
            <h6 class="plan-name">Three Month Access</h6>
            <p class="plan-description">Try it out, see for yourself</p>
            <br>
            <a class="btn btn-round btn-primary btn-outline w-200" href="#">Buy Now</a>
          </div>
        </div>


        <div class="col-12 col-lg-4">
          <div class="pricing-2">
            <h2 class="price"><span class="price-unit">$</span> 200</h2>
            <h6 class="plan-name">Lifetime Access</h6>
            <p class="plan-description">Pay once, have fun forever</p>
            <br>
            <a class="btn btn-round btn-primary w-200" href="#">Buy Now</a>
          </div>
        </div>


        <div class="col-12 col-lg-4">
          <div class="pricing-2">
            <h2 class="price"><span class="price-unit">$</span> 125</h2>
            <h6 class="plan-name">One Year Access</h6>
            <p class="plan-description">Get on the right path</p>
            <br>
            <a class="btn btn-round btn-primary btn-outline w-200" href="#">Buy Now</a>
          </div>
        </div>

      </div>

      <p class="text-center mt-50">
        The Olympus Suite is designed to work exclusively with TradingView charts.
      </p>

    </div>

  </section>

</main>

@endsection
