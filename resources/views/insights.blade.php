@extends('layouts.layout2')

@section('title', 'Insights')

@section('styles')

@endsection

@section('content')

<!-- Header -->
<header class="header header-inverse bg-fixed" style="background-image: url(assets/img/greek-gods.jpg)" data-overlay="8">
  <div class="container text-center">

    <div class="row">
      <div class="col-12 col-lg-8 offset-lg-2">

        <h1>Trading Insights</h1>
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
              <h3>Pro Insights Part 1: Probability & Random Distribution</h3>
              <div class="link-color-default fs-12">
                <time>April 23, 2022</time>
              </div>
            </header>
            <div class="text-center">
              <img class="rounded" src="{{ url('assets/img/probability.jpg') }}" alt="...">
            </div>
            <div class="card-block">
              <p class="text-justify">Together. Great. So good was saying, that can't first let called air divide stars male isn't i. Herb third let may fourth divide. Greater gathering land you'll i their beast have. She'd form sea it wherein fowl, spirit creeping living. Likeness creepeth you hath heaven. Likeness, moveth fruitful behold. Open evening a air us behold. Saying above moving second a subdue likeness after also second.</p>
              <p class="text-center mt-40">
                <a class="btn btn-primary btn-round" href="blog-single.html">Read more</a>
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
              <h3>Pro Insights Part 2: Tipping The Odds</h3>
              <div class="link-color-default fs-12">
                <time>April 23, 2022</time>
              </div>
            </header>
            <div class="text-center">
              <img class="rounded" src="{{ url('assets/img/odds.jpg') }}" alt="...">
            </div>
            <div class="card-block">
              <p class="text-justify">Together. Great. So good was saying, that can't first let called air divide stars male isn't i. Herb third let may fourth divide. Greater gathering land you'll i their beast have. She'd form sea it wherein fowl, spirit creeping living. Likeness creepeth you hath heaven. Likeness, moveth fruitful behold. Open evening a air us behold. Saying above moving second a subdue likeness after also second.</p>
              <p class="text-center mt-40">
                <a class="btn btn-primary btn-round" href="blog-single.html">Read more</a>
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
              <h3>Pro Insights Part 3: Shaping The Mind</h3>
              <div class="link-color-default fs-12">
                <time>April 23, 2022</time>
              </div>
            </header>
            <div class="text-center">
              <img class="rounded" src="{{ url('assets/img/mind.jpg') }}" alt="...">
            </div>
            <div class="card-block">
              <p class="text-justify">Together. Great. So good was saying, that can't first let called air divide stars male isn't i. Herb third let may fourth divide. Greater gathering land you'll i their beast have. She'd form sea it wherein fowl, spirit creeping living. Likeness creepeth you hath heaven. Likeness, moveth fruitful behold. Open evening a air us behold. Saying above moving second a subdue likeness after also second.</p>
              <p class="text-center mt-40">
                <a class="btn btn-primary btn-round" href="blog-single.html">Read more</a>
              </p>
            </div>
          </article>
          <hr class="dark-hr">

        </div>
      </div>

    </div>
  </section>
</main>
<!-- END Main container -->

@endsection
