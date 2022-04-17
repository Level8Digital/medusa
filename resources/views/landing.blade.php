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
          <a class="btn btn-lg btn-white w-200" href="#" data-scrollto="section-download">Purchase Now</a>
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
  <section class="section overflow-hidden bg-gray" id="section-intro">
    <div class="container">
      <div class="row">

        <div class="col-12 col-md-6 text-center">
          <img class="mr-40" src="assets/img/ipad-data.png" alt="..." data-aos="slide-up">
          <small><em>Real world results of the Olympus X-Fractal on a single ticker.</em></small>
        </div>

        <div class="col-12 col-md-6 align-self-center pb-70">
          <h3>Master Your Mind</h3>
          <p class="lead">
            It’s time to stop overanalyzing your trades. The secret to success does not lay in predicting every market oscillation with technical analysis.
            What you need is a proven and backtested strategy that puts you in a position to consistently earn more than you lose, and the self-discipline to execute your system flawlessly.
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
  | Quote
  |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
  !-->
  <section class="section">
    <div class="container">

      <blockquote class="blockquote">
        <p>The irony is, you will be afraid of random, inconsistent results, without realizing that your random, inconsistent approach is creating exactly what you are afraid of.</p>
        <footer>Mark Douglas <cite title="Source Title">Trading In The Zone</cite></footer>
      </blockquote>

    </div>
  </section>

  <!--
  |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
  | Features
  |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
  !-->
  <section class="section section-inverse overflow-hidden" style="background-color: #818181" id="section-features">
    <div class="container">

      <div class="row">
        <div class="col-12 col-md-12 pb-70 align-self-center">
          <h2>Consistency Is Key</h2>
          <p class="lead">
            Consistent success depends on more than a few winning trades. How can you find a viable system if you constantly change your trading rules, or have no rules at all? The Olympus Suite provides
            you a rigid set of variables and is fully transparent, revealing the critical metrics that impact your long-term profitability. With a system in place, you will have
            the confidence to execute in a consistent manner.
          </p>
          <hr class="w-50 ml-0">
        </div>

        <div class="row gap-y suite-features">

          <div class="col-12 col-md-6 col-xl-4">
            <div class="flexbox gap-items-4">
              <div>
                <i class="fa fa-eye fs-25 pt-4 text-secondary"></i>
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
                <i class="fa fa-shield fs-25 pt-4 text-secondary"></i>
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
                <i class="fa fa-crosshairs fs-25 pt-4 text-secondary"></i>
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
                <i class="fa fa-bullseye fs-25 pt-4 text-secondary"></i>
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
                <i class="fa fa-code fs-25 pt-4 text-secondary"></i>
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
                <i class="fa fa-wrench fs-25 pt-4 text-secondary"></i>
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
  | Articles / Blog
  |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
  !-->

  <section class="section bg-gray" id="section-insight">
    <div class="container">
      <h2 class="text-center">Trading Insight</h2>
      <br><br>

      <div class="row gap-y">

        <div class="col-12 col-md-6 col-lg-4">
          <div class="card card-bordered card-hover-shadow">
            <a href="#"><img class="card-img-top" src="assets/img/blog-1.jpg" alt="Card image cap"></a>
            <div class="card-block">
              <h4 class="card-title"><a href="#">How to add new block to page builder</a></h4>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title.</p>
              <a class="fw-600 fs-12" href="#">Read more <i class="fa fa-chevron-right fs-9 pl-8"></i></a>
            </div>
          </div>
        </div>


        <div class="col-12 col-md-6 col-lg-4">
          <div class="card card-bordered card-hover-shadow">
            <a href="#"><img class="card-img-top" src="assets/img/blog-2.jpg" alt="Card image cap"></a>
            <div class="card-block">
              <h4 class="card-title"><a href="#">Create block with different styles</a></h4>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title.</p>
              <a class="fw-600 fs-12" href="#">Read more <i class="fa fa-chevron-right fs-9 pl-8"></i></a>
            </div>
          </div>
        </div>


        <div class="col-12 col-lg-4 hidden-md-down">
          <div class="card card-bordered card-hover-shadow">
            <a href="#"><img class="card-img-top" src="assets/img/blog-3.jpg" alt="Card image cap"></a>
            <div class="card-block">
              <h4 class="card-title"><a href="#">How to update the template</a></h4>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title.</p>
              <a class="fw-600 fs-12" href="#">Read more <i class="fa fa-chevron-right fs-9 pl-8"></i></a>
            </div>
          </div>
        </div>

      </div>

      <br><br>
      <div class="col-12 text-center">
        <br><br>
        <a class="btn btn-lg btn-primary" href="#">Browse all articles</a>
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
            <h2 class="price"><span class="price-unit">$</span> 50</h2>
            <h6 class="plan-name">Three Month Access</h6>
            <p class="plan-description">Try it out, see for yourself</p>
            <br>
            <a class="btn btn-white btn-round btn-outline w-200" href="#">Buy Now</a>
          </div>
        </div>


        <div class="col-12 col-lg-4">
          <div class="pricing-2">
            <h2 class="price"><span class="price-unit">$</span> 150</h2>
            <h6 class="plan-name">Lifetime Access</h6>
            <p class="plan-description">Pay once, have fun forever</p>
            <br>
            <a class="btn btn-white btn-round w-200" href="#">Buy Now</a>
          </div>
        </div>


        <div class="col-12 col-lg-4">
          <div class="pricing-2">
            <h2 class="price"><span class="price-unit">$</span> 100</h2>
            <h6 class="plan-name">One Year Access</h6>
            <p class="plan-description">Get on the right path</p>
            <br>
            <a class="btn btn-white btn-round btn-outline w-200" href="#">Buy Now</a>
          </div>
        </div>

      </div>

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

  <!--
  |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
  | Buy Now / Pricing
  |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
  !-->
  <section class="section section-inverse py-120" style="background-image: url(assets/img/greek-gods.jpg); background-size: cover;" data-overlay="4" id="section-find">
    <div class="container">

      <div class="section-dialog text-center" data-aos="zoom-in" data-aos-duration="1000">
        <p><img src="assets/img/logo-light.png" alt="logo"></p>
        <br>
        <h2>Find Us</h2>
        <p>Visit our TradingView profile or Instagram account to stay up to date with the latest from Medusa Money.</p>

        <hr class="w-50">

        <div class="text-center gap-multiline-items-2 my-30">
          <a href="#"><img class="img-fadein" src="assets/img/badge-apple.png" alt="download on app store"></a>
          <a href="#"><img class="img-fadein" src="assets/img/badge-google.png" alt="download on google play"></a>
        </div>

      </div>

    </div>
  </section>

@endsection
