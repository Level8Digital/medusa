@extends('layouts.layout4')

@section('title', 'Order Complete')

@section('content')

<!-- Header -->
<header class="header header-inverse">
  <div class="container">
    <h1 class="display-4">Order Complete</h1>
    <p class="lead-2 mt-6">Your purchase was successful.</p>
  </div>
</header>
<!-- END Header -->

<main class="main-content">
  <div class="container">

    <section class="section bg-repeat" data-overlay-light="5">
      <div class="container">
        <header class="section-header">
          <small>Welcome to the Olympus Cloud</small>
          <br>
          <i class="fa fa-check-circle-o super-icon"></i>
          <h2 class="lead-8"><strong>Thanks for your purchase</strong></h2>
          <hr class="dark-hr">
          <p class="lead-2">
            The Olympus Cloud will be available to your TradingView account within 24 hours, but usually sooner.
          </p>
          <p class="lead-2">
            While you wait, head over to our <a class="teal-link" href="https://www.youtube.com/channel/UC_srdLV6WeXG2FYo8PguxhA">YouTube Channel</a> to learn how to use the Olympus Cloud,
            and check out our <a class="teal-link" href="{{ url('insights') }}">Insights Blog</a> to take your trading to the next level.
          </p>
          <p class="lead-2">
          <i class="fa fa-envelope"></i> <em>You will recieve an email from us when your access has been granted with instructions on how to add the Olympus Cloud to your chart. Be sure to check your other email folders, such as promotions or spam,
          just in case our email gets lost in the shuffle.</em>
          </p>
        </header>
      </div>
    </section>

  </div>

</main>

@endsection
