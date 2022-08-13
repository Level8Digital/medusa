@extends('layouts.layout2')

@section('title', 'Insights')

@section('styles')

@endsection

@section('content')

<!-- Header -->
<header class="header header-inverse bg-fixed" style="background-image: url(assets/img/greek-gods.jpg)" data-overlay="2">
  <div class="container text-center">

    <div class="row">
      <div class="col-12 col-lg-8 offset-lg-2">

        <h1>Insights Blog</h1>
        <p class="fs-20 opacity-70">Articles designed to take your trading to the next level.</p>

      </div>
    </div>

  </div>
</header>

<!-- Main container -->
<main class="main-content">
  <section class="section">
    <div class="container">
      <header class="section-header">
        <small>TRADING BLOG</small>
        <hr>
      </header>

      <div class="row">
        <div class="col-12 col-lg-8 offset-lg-2">
          <!--
          |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
          | Article
          |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
          !-->
          <article class="mt-10">
            <header class="text-center mb-40">
              <h3>Trading Insights #1: Probability & Random Distribution</h3>
              <div class="link-color-default fs-12">
                <time>April 23, 2022</time>
              </div>
            </header>
            <div class="text-center">
              <img class="rounded" src="{{ url('assets/img/probability-opt.jpg') }}" alt="...">
            </div>
            <div class="card-block">
              <p class="text-justify">Probability combined with random distribution is an important and often overlooked concept when it comes to trading. While rooted in data science and statistics, you need not be a data scientist to understand enough to aid your trading endeavors.</p>
              <p class="text-center mt-40">
                <a class="btn btn-primary btn-round" href="{{ url('probability-and-random-distribution') }}">Read more</a>
              </p>
            </div>
          </article>
          <hr class="dark-hr">

          <!--
          |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
          | Article
          |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
          !-->
          <article class="mt-90">
            <header class="text-center mb-40">
              <h3>Trading Insights #2: Real Technical Analysis</h3>
              <div class="link-color-default fs-12">
                <time>April 24, 2022</time>
              </div>
            </header>
            <div class="text-center">
              <img class="rounded" src="{{ url('assets/img/odds-opt.jpg') }}" alt="...">
            </div>
            <div class="card-block">
              <p class="text-justify">If you’re an aspiring trader, then you’re probably familiar enough with technical analysis to muster up a definition of some kind. Despite the widespread familiarity with the concept, technical analysis is often misrepresented.</p>
              <p class="text-center mt-40">
                <a class="btn btn-primary btn-round" href="{{ url('real-technical-analysis') }}">Read more</a>
              </p>
            </div>
          </article>
          <hr class="dark-hr">

          <!--
          |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
          | Article
          |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
          !-->
          <article class="mt-90">
            <header class="text-center mb-40">
              <h3>Trading Insights #3: Mastering Your Mind</h3>
              <div class="link-color-default fs-12">
                <time>April 25, 2022</time>
              </div>
            </header>
            <div class="text-center">
              <img class="rounded" src="{{ url('assets/img/mind-opt.jpg') }}" alt="...">
            </div>
            <div class="card-block">
              <p class="text-justify">Your mind is the most powerful piece of the puzzle when it comes to your trading success. Without developing the mentality of a pro trader, you will never achieve the results you desire. When it comes to mastering your mind, we can think of no one better to draw influence from than Buddha. In this entry to the series we intend to turn back the clock to see if we can glean some valuable insight and apply it to our trading endeavors.</p>
              <p class="text-center mt-40">
                <a class="btn btn-primary btn-round" href="{{ url('mastering-your-mind') }}">Read more</a>
              </p>
            </div>
          </article>
          <hr class="dark-hr">

          <!--
          |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
          | Article
          |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
          !-->
          <article class="mt-90">
            <header class="text-center mb-40">
              <h3>Trading Essentials #1: Accuracy & Profitability</h3>
              <div class="link-color-default fs-12">
                <time>April 26, 2022</time>
              </div>
            </header>
            <div class="text-center">
              <img class="rounded" src="{{ url('assets/img/accuracy-opt.jpg') }}" alt="...">
            </div>
            <div class="card-block">
              <p class="text-justify">A critical component relating to trading success is the relationship between your win percentage and your bottom line. Many new traders hold some extremely inaccurate views when it comes to what kind of win percentage is required to generate net profit.</p>
              <p class="text-center mt-40">
                <a class="btn btn-primary btn-round" href="{{ url('accuracy-and-profitability') }}">Read more</a>
              </p>
            </div>
          </article>
          <hr class="dark-hr">

          <!--
          |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
          | Article
          |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
          !-->
          <article class="mt-90">
            <header class="text-center mb-40">
              <h3>Trading Essentials #2: Signals Versus Results</h3>
              <div class="link-color-default fs-12">
                <time>April 27, 2022</time>
              </div>
            </header>
            <div class="text-center">
              <img class="rounded" src="{{ url('assets/img/signals-opt.jpg') }}" alt="...">
            </div>
            <div class="card-block">
              <p class="text-justify">Observation is the first step to finding a successful trading system but relying solely on visual cues will leave you open to selection bias. In other words, people tend to focus on the signals that worked and ignore the ones that didn’t.</p>
              <p class="text-center mt-40">
                <a class="btn btn-primary btn-round" href="{{ url('trading-signals-versus-results') }}">Read more</a>
              </p>
            </div>
          </article>

        </div>
      </div>

    </div>
  </section>
</main>
<!-- END Main container -->

@endsection
