@extends('layouts.layout2')

@section('title', 'FAQ')

@section('styles')

@endsection

@section('content')

<!-- Header -->
<header class="header header-inverse bg-fixed" style="background-image: url(assets/img/greek-gods.jpg)" data-overlay="8">
  <div class="container text-center">

    <div class="row">
      <div class="col-12 col-lg-8 offset-lg-2">

        <h1>FAQ</h1>
        <p class="fs-20 opacity-70">We have the answers you're looking for.</p>

      </div>
    </div>

  </div>
</header>
<!-- END Header -->

<main class="main-content">

  <section class="section">
    <div class="container">
      <header class="section-header">
        <small>FREQUENTLY ASKED QUESTIONS</small>
        <hr>
      </header>


      <div class="row gap-y">
        <div class="col-md-6">
          <h5>What payment services do you support?</h5>
          <p>We accept all major credit cards.</p>
        </div>


        <div class="col-md-6">
          <h5>Can I update my card details?</h5>
          <p>Yes. Go to the billing section of your dashboard and update your payment information.</p>
        </div>


        <div class="col-md-6">
          <h5>Is this a secure site for purchases?</h5>
          <p>Absolutely! We work with top payment companies which guarantees your safety and security. All billing information is stored on our payment processing partner which has the most stringent level of certification available in the payments industry.</p>
        </div>


        <div class="col-md-6">
          <h5>Can I cancel my subscription?</h5>
          <p>You can cancel your subscription anytime in your account. Once the subscription is cancelled, you will not be charged next month. You will continue to have access to your account until your current subscription expires.</p>
        </div>


        <div class="col-md-6">
          <h5>How long are your contracts?</h5>
          <p>Currently, we only offer monthly subscription. You can upgrade or cancel your monthly account at any time with no further obligation.</p>
        </div>


        <div class="col-md-6">
          <h5>Can I request refund?</h5>
          <p>Unfortunately, not. We do not issue full or partial refunds for any reason.</p>
        </div>
      </div>

    </div>
  </section>

</main>

@endsection
