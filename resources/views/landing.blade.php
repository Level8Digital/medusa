@extends('layouts.layout1')

@section('title', 'Innovative Trading Systems')

@section('styles')

@endsection

@section('content')

<!-- Landing -->
<header class="header header-inverse h-fullscreen p-0 overflow-hidden" data-parallax="assets/img/bg-thunder.jpg">
  <div class="container">

    <div class="row h-full">
      <div class="col-12 col-lg-6 align-self-center text-center text-lg-left">

        <h1 class="display-4">Goodbye Guesswork</h1>
        <br>
        <p class="lead text-white">Stop wondering if you have a profitable trading strategy. Get the power of Olympus in your hands and say goodbye to the Underworld forever.</p>

        <br><br>

        <div>
          <a class="btn btn-lg btn-white w-200" href="#" data-scrollto="section-pricing">Purchase Now</a>
          <a class="btn btn-lg btn-outline btn-white w-200 ml-8 hidden-sm-down" href="#" data-scrollto="section-features">Features</a>
        </div>

      </div>
      <!-- <div class="col-12 col-lg-6 align-self-end text-right hidden-md-down">
        <img src="assets/img/lightening-hand.png" alt="..." data-aos="slide-up" data-aos-offset="0">
      </div> -->
    </div>

  </div>
</header>
<!-- END Landing -->

<!-- Main container -->
<main class="main-content">

  <!--
  |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
  | Master your mind
  |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
  !-->
  <section class="section overflow-hidden" id="section-intro">
    <div class="container">
      <div class="row">

        <div class="col-12 col-md-6 text-center">
          <img class="mr-40" src="{{ url('assets/img/ipad-data.png') }}" alt="..." data-aos="slide-up">
          <small><em>Real world results of the Olympus X-Fractal on a single ticker.</em></small>
        </div>

        <div class="col-12 col-md-6 align-self-center pb-70">
          <h3>Master Your Mind</h3>
          <p class="lead">
            It’s time to stop overanalyzing your trades. The secret to success does not lay in predicting every market oscillation or learning new and exotic technical indicators.
            What you need is a proven and backtested strategy that tips the odds in your favor and the self-discipline to execute your system consistently.
          </p>

          <br><br>

          <div class="flexbox flex-grow-all gap-items-3">
            <div>
              <p><i class="fa fa-check-circle text-success fs-30"></i></p>
              <h5>Embrace Probability</h5>
              <p>
                To help you succeed, the Olympus Suite is packed with three simple and effective trading systems designed around pattern repetition, probability, and random distribution.
              </p>
            </div>

            <div>
              <p><i class="fa fa-hdd-o text-info fs-30"></i></p>
              <h5>Embrace Data</h5>
              <p>
                Beyond mere indicators, the Olympus Suite comes with backtesting logic, allowing you to verify past results and make decisions based on real data, not blind trust.
              </p>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>

  <!--
  |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
  | Quote 1
  |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
  !-->
  <section class="section section-inverse">
    <div class="container">

      <blockquote class="blockquote">
        <p class="text-white">Individual random events, such as market behavior patterns, have a consistent outcome over a set of events when the odds are tilted in one direction — like flipping a rigged coin.</p>
        <footer class="text-white">Matthew Toro <cite title="Source Title">, Medusa Money Founder & President</cite></footer>
      </blockquote>

    </div>
  </section>

  <!--
  |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
  | Features
  |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
  !-->
  <section class="section overflow-hidden" id="section-features">
    <div class="container">

      <div class="row">
        <div class="col-12 col-md-12 pb-70 align-self-center">
          <h2>Consistency Is Key</h2>
          <p class="lead">
            Trading success depends on more than a few winning trades. How can you find a viable system if you constantly change your trading rules, or have no rules at all? The Olympus Suite provides
            you a rigid set of variables and is fully transparent, revealing the critical metrics that impact your long-term profitability. With a system in place, you will have
            the confidence to execute in a consistent manner.
          </p>
          <hr class="w-50 ml-0 dark-hr">
        </div>

        <div class="row gap-y suite-features">

          <div class="col-12 col-md-6 col-xl-4">
            <div class="flexbox gap-items-4">
              <div>
                <i class="fa fa-eye fs-25 pt-4"></i>
              </div>
              <div>
                <h5>Consistent Variables</h5>
                <p>Detach from emotions and momentary perception with rigid trading rules that guide your behavior.</p>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-xl-4">
            <div class="flexbox gap-items-4">
              <div>
                <i class="fa fa-shield fs-25 pt-4"></i>
              </div>
              <div>
                <h5>Risk Management</h5>
                <p>Built in risk calculations instantly display position size based on a recommended stop-loss price.</p>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-xl-4">
            <div class="flexbox gap-items-4">
              <div>
                <i class="fa fa-crosshairs fs-25 pt-4"></i>
              </div>

              <div>
                <h5>Profit Targets</h5>
                <p>Pre-calculated targets based on a ticker’s average candle size help you scale out of winning trades.</p>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-xl-4">
            <div class="flexbox gap-items-4">
              <div>
                <i class="fa fa-bullseye fs-25 pt-4"></i>
              </div>
              <div>
                <h5>Follow The Trend</h5>
                <p>Leave a portion of your position in the market with a trailing stop loss to capture extended moves.</p>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-xl-4">
            <div class="flexbox gap-items-4">
              <div>
                <i class="fa fa-code fs-25 pt-4"></i>
              </div>
              <div>
                <h5>Backtest Logic</h5>
                <p>Ensure you have confidence in your strategy by testing past performance on your favorite stocks.</p>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-xl-4">
            <div class="flexbox gap-items-4">
              <div>
                <i class="fa fa-wrench fs-25 pt-4"></i>
              </div>
              <div>
                <h5>Customization</h5>
                <p>Tweak various strategy components with backtesting and keep up with changing market conditions.</p>
              </div>
            </div>
          </div>


        </div>

      </div>

    </div>
  </section>

  <!--
  |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
  | Olympus Suite
  |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
  !-->

  <section class="section text-center py-150" style="background-image: url(assets/img/greek-gods.jpg); background-size: cover;" data-overlay="8" id="section-components">
    <div class="container">
      <h5 class="fs-30 text-white fw-300 mb-30"><strong>Dive</strong> into the strategies that make up the Olympus Suite</h5>

      <p class="text-white mb-30">
        The Olympus Suite comes bundled with two different strategies allowing you to trade the way that suits you best.
      </p>

      <div class="row text-center">
        <div class=col-12>
          <p>
            <a class="btn btn-lg btn-outline btn-white w-200" href="/components">Take A Look</a>
          </p>
        </div>

      </div>
    </div>
  </section>

  <!--
  |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
  | Articles / Blog
  |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
  !-->

  <section class="section bg-gray" id="section-insight">
    <div class="container">
      <h2 class="text-center">Trading Insights</h2>
      <br><br>

      <div class="row gap-y">

        <div class="col-12 col-md-6 col-lg-4">
          <div class="card card-bordered card-hover-shadow">
            <a href="#"><img class="card-img-top" src="{{ url('assets/img/probability-small.jpg') }}" alt="Card image cap"></a>
            <div class="card-block">
              <h4 class="card-title"><a href="#">Pro Insights Part 1: Probability</a></h4>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title.</p>
              <a class="fw-600 fs-12" href="{{ url('probability-and-random-distribution') }}">Read more <i class="fa fa-chevron-right fs-9 pl-8"></i></a>
            </div>
          </div>
        </div>


        <div class="col-12 col-md-6 col-lg-4">
          <div class="card card-bordered card-hover-shadow">
            <a href="#"><img class="card-img-top" src="{{ url('assets/img/odds-small.jpg') }}" alt="Card image cap"></a>
            <div class="card-block">
              <h4 class="card-title"><a href="#">Pro Insights Part 2: Tipping The Odds</a></h4>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title.</p>
              <a class="fw-600 fs-12" href="{{ url('tipping-the-odds') }}">Read more <i class="fa fa-chevron-right fs-9 pl-8"></i></a>
            </div>
          </div>
        </div>


        <div class="col-12 col-lg-4 hidden-md-down">
          <div class="card card-bordered card-hover-shadow">
            <a href="#"><img class="card-img-top" src="{{ url('assets/img/mind-small.jpg') }}" alt="Card image cap"></a>
            <div class="card-block">
              <h4 class="card-title"><a href="#">Pro Insights Part 3: Shaping The Mind</a></h4>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title.</p>
              <a class="fw-600 fs-12" href="{{ url('shaping-the-mind') }}">Read more <i class="fa fa-chevron-right fs-9 pl-8"></i></a>
            </div>
          </div>
        </div>

      </div>

      <br><br>
      <div class="col-12 text-center">
        <br><br>
        <a class="btn btn-lg btn-primary" href="{{ url('insights') }}">Browse all articles</a>
      </div>

    </div>
  </section>

  <!--
  |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
  | Pricing
  |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
  !-->
  <section class="section section-inverse" style="background-color: #18206a" id="section-pricing">
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
            <a class="btn btn-white btn-round btn-outline w-200" href="{{ url('purchase/three-month') }}">Buy Now</a>
          </div>
        </div>


        <div class="col-12 col-lg-4">
          <div class="pricing-2">
            <h2 class="price"><span class="price-unit">$</span> 200</h2>
            <h6 class="plan-name">Lifetime Access</h6>
            <p class="plan-description">Pay once, have fun forever</p>
            <!-- <ul class="price-list">
              <li>
                <small>Script updates</small>
              </li>
              <li>
                <small></small>
              </li>
            </ul> -->
            <br>
            <a class="btn btn-white btn-round w-200" href="{{ url('purchase/lifetime') }}">Buy Now</a>
          </div>
        </div>


        <div class="col-12 col-lg-4">
          <div class="pricing-2">
            <h2 class="price"><span class="price-unit">$</span> 125</h2>
            <h6 class="plan-name">One Year Access</h6>
            <p class="plan-description">Get on the right path</p>
            <br>
            <a class="btn btn-white btn-round btn-outline w-200" href="{{ url('purchase/year') }}">Buy Now</a>
          </div>
        </div>

      </div>

      <p class="text-center mt-50">
        The Olympus Suite is designed to work exclusively with TradingView charts.
      </p>

    </div>
  </section>

  <!--
  |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
  | FAQ
  |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
  !-->
  <section class="section" id="section-faq">
    <div class="container">
      <header class="section-header">
        <small>Faq</small>
        <h2>Frequently Asked Questions</h2>
        <hr>
        <p class="lead">Drop us an email if you couldn't find an answert to your question in the following list.</p>
      </header>


      <div class="row gap-y gap-3">

        <div class="col-12 col-md-6 col-lg-4">
          <h6 class="fw-400">What is TheSaaS?</h6>
          <p>It is a collection of layouts, design patterns, components, and guidelines for creating admin templates, SaaS startups, and complex dashboards.</p>
        </div>


        <div class="col-12 col-md-6 col-lg-4">
          <h6 class="fw-400">How long does it take?</h6>
          <p>It is a collection of layouts, design patterns, components, and guidelines for creating admin templates, SaaS startups, and complex dashboards.</p>
        </div>


        <div class="col-12 col-md-6 col-lg-4">
          <h6 class="fw-400">What payment services do you support?</h6>
          <p>We accept all major credit cards.</p>
        </div>


        <div class="col-12 col-md-6 col-lg-4">
          <h6 class="fw-400">Can I update my card details?</h6>
          <p>Yes. Go to the billing section of your dashboard and update your payment information.</p>
        </div>


        <div class="col-12 col-md-6 col-lg-4">
          <h6 class="fw-400">Can I cancel my subscription?</h6>
          <p>You can cancel your subscription at any time. Cancelling your plan comes into effect the following month.</p>
        </div>


        <div class="col-12 col-md-6 col-lg-4">
          <h6 class="fw-400">Can I get refund?</h6>
          <p>Unfortunately, not at this time! Please try our free plan for a while to make sure Helpato is what you want.</p>
        </div>


        <div class="col-12 col-md-6 col-lg-4">
          <h6 class="fw-400">What if I want to change plans?</h6>
          <p>It's quick and easy to switch between our different pricing plans from your dashboard.</p>
        </div>


        <div class="col-12 col-md-6 col-lg-4">
          <h6 class="fw-400">How long are your contracts?</h6>
          <p>You can upgrade, downgrade, or cancel your monthly account at any time with no further obligation.</p>
        </div>


        <div class="col-12 col-md-6 col-lg-4">
          <h6 class="fw-400">Other questions?</h6>
          <p>We're always available at support@domain.com</p>
        </div>

      </div>


    </div>
  </section>



@endsection
