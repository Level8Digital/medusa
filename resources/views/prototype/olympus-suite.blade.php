@extends('layouts.layout2')

@section('title', 'Components')

@section('styles')

@endsection

@section('content')

<!-- Header -->
<header class="header header-inverse bg-fixed" style="background-image: url(assets/img/greek-gods.jpg)" data-overlay="8">
  <div class="container text-center">

    <div class="row">
      <div class="col-12 col-lg-8 offset-lg-2">

        <h1>The Olympus Suite</h1>
        <p class="fs-20 opacity-70">The Olympus Suite comes bundled with three premium strategies.</p>

      </div>
    </div>

  </div>
</header>
<!-- END Header -->

<main class="main-content">

  <section class="section">
    <div class="container">
      <header class="section-header">
        <small>Strategies</small>
        <h2>More to Love</h2>
        <hr class="dark-hr">
        <p class="lead">Trade the way that suites you.</p>
      </header>


      <div class="row gap-y align-items-center">
        <div class="col-md-6 ml-auto">
          <h4>X-Cloud</h4>
          <p>Think the or organization same proposal to affected heard reclined in be it reassuring are attained opinion, by he neighbours even again. Is and by value and that like can could from world takes of great copy and delicacy compared he such that the in and with himself a the man, client totally least for him and have insidious than of him remedies. That his counter-productive clearly, wasn't day we hills parts he on every.</p>
          <ul class="list-unstyled">
              <li><i class="ti-check text-success mr-2"></i> Lorem ipsum dolor sit amet</li>
              <li><i class="ti-check text-success mr-2"></i> Consectetur adipiscing elit</li>
              <li><i class="ti-check text-success mr-2"></i> Integer molestie lorem at massa</li>
              <li><i class="ti-check text-success mr-2"></i> Facilisis in pretium nisl aliquet</li>
            </ul>
        </div>

        <div class="col-md-5 order-md-first">
          <img class="rounded shadow-2" src="../assets/img/preview/header-image.jpg" alt="...">
        </div>
      </div>

      <hr class="my-8 dark-hr mt-50 mb-50">

      <div class="row gap-y align-items-center">
        <div class="col-md-6 mr-auto">
          <h4>X-Fractal</h4>
          <p>Think the or organization same proposal to affected heard reclined in be it reassuring are attained opinion, by he neighbours even again. Is and by value and that like can could from world takes of great copy and delicacy compared he such that the in and with himself a the man, client totally least for him and have insidious than of him remedies. That his counter-productive clearly, wasn't day we hills parts he on every.</p>
          <ul class="list-unstyled">
              <li><i class="ti-check text-success mr-2"></i> Lorem ipsum dolor sit amet</li>
              <li><i class="ti-check text-success mr-2"></i> Consectetur adipiscing elit</li>
              <li><i class="ti-check text-success mr-2"></i> Integer molestie lorem at massa</li>
              <li><i class="ti-check text-success mr-2"></i> Facilisis in pretium nisl aliquet</li>
            </ul>
        </div>

        <div class="col-md-5">
          <img class="rounded shadow-2" src="../assets/img/preview/header-video.jpg" alt="...">
        </div>
      </div>

      <hr class="my-8 dark-hr mt-50 mb-50">

      <div class="row gap-y align-items-center">
        <div class="col-md-6 ml-auto">
          <h4>X-Band</h4>
          <p>Think the or organization same proposal to affected heard reclined in be it reassuring are attained opinion, by he neighbours even again. Is and by value and that like can could from world takes of great copy and delicacy compared he such that the in and with himself a the man, client totally least for him and have insidious than of him remedies. That his counter-productive clearly, wasn't day we hills parts he on every.</p>
          <ul class="list-unstyled">
              <li><i class="ti-check text-success mr-2"></i> Lorem ipsum dolor sit amet</li>
              <li><i class="ti-check text-success mr-2"></i> Consectetur adipiscing elit</li>
              <li><i class="ti-check text-success mr-2"></i> Integer molestie lorem at massa</li>
              <li><i class="ti-check text-success mr-2"></i> Facilisis in pretium nisl aliquet</li>
            </ul>
        </div>

        <div class="col-md-5 order-md-first">
          <img class="rounded shadow-2" src="../assets/img/preview/header-slider.jpg" alt="...">
        </div>
      </div>

      <hr class="my-8 dark-hr mt-50 mb-50">

    </div>
  </section>

  <!--
  |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
  | Pricing
  |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
  !-->
  <section class="section section-pricing-2" id="section-pricing">
    <div class="container">
      <h2 class="text-center fs-35">Sharpen Your Blade</h2>
      <p class="lead text-center">
        Get the edge in your favor.
      </p>
      <br><br><br>

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
