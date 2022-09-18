@extends('layouts.layout1')

@section('title', 'Trading Automation | Backtesting | Trading Psychology')

@section('description', "We build trading tools packed with backtest logic so you know exactly what you're getting. No guesswork, no blind trust, only customizable trading indicators with automated backtesting.")

@section('styles')

@endsection

@section('content')

<!-- Landing -->
<header class="header header-inverse h-fullscreen p-0 overflow-hidden" data-parallax="assets/img/olympus-background.jpg">
  <div class="container">

    <div class="row h-full">
      <div class="col-12 col-lg-6 align-self-center text-center text-lg-left landing-block">

        <h1 class="display-2">Goodbye Guesswork</h1>
        <br>
        <p class="lead text-white" id="landing-lead">Stop wondering if you have a profitable trading strategy. Get the power of Olympus in your hands, and say goodbye to the underworld forever.</p>

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
      <header class="section-header">
        <small>INTRODUCTION</small>
        <h2>Take Control</h2>
        <hr class="dark-hr">
        <p class="lead">
        The secret to success does not lie in predicting every price oscillation or finding new and exotic markets to trade. The best
        traders are consistent and in control, while trusting their strategy gives them an edge over many trades.
        </p>
      </header>
      <div class="row">
        <div class="col-12 col-lg-6 text-center mt-10 sm-mb-20">
          <img class="mr-40" src="{{ url('assets/img/ipad-data.png') }}" alt="..." data-aos="slide-up">
          <small><em>Real world backtest results of the Olympus Cloud on a single ticker.</em></small>
        </div>

        <div class="col-12 col-lg-6 align-self-center pb-0">
          <div class="row">
            <div class="row">
              <div class="col-12">
                <p><i class="fa fa-check-circle fs-50"></i></p>
                <h4>Our Logic, Your Way</h4>
                <p>
                  Adjust the Olympus Cloud to suit your style or to adapt to changing market conditions and then backtest your customizations with our automated logic.
                </p>
              </div>
            </div>
            <div class="col-12">
              <p><i class="fa fa-code fs-50"></i></p>
              <h4>One Script, Many Tools</h4>
              <p>
                Far from a one-trick pony, the Olympus Cloud is packed with several price-action based indicators that help you make sense of the market at all times.
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
        <div class="quote-sign"></div>
        <p class="text-white">If you asked me to distill trading down to its simplest form, I would say that it is a pattern recognition numbers game. We use market analysis to identify the patterns, define the risk,
          and determine when to take profits. The trade either works or it doesn’t. In any case, we go on to the next trade.</p>
        <footer class="text-white">Mark Douglas, <cite title="Source Title">Trading In The Zone</cite></footer>
      </blockquote>

    </div>
  </section>

  <!--
  |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
  | Overview
  |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
  !-->

  <section class="section overflow-hidden" id="section-features">
    <div class="container">
      <header class="section-header">
        <small>FEATURES</small>
        <h2>Find Clarity</h2>
        <hr class="dark-hr">
        <p class="lead">The Olympus Cloud is beyond a mere indicator and provides you with a total framework from which to view the market. Trading doesn’t have to be complicated, and by adding this
          one script to your chart, you instantly gain access to five simple yet powerful indicators and a comprehensive backtest suite. Best of all, the Olympus cloud works for high-frequency traders and those
          with a long-term outlook..</p>
      </header>

      <div class="row no-gap text-center">

          <div class="col-md-6 px-5 py-6 p-md-8 mb-20">
            <p class="mb-6">
              <img src="{{ url('assets/img/icons/cloud.png') }}" />
            </p>
            <h4 class="mb-5">The Cloud</h4>
            <p>The Olympus Cloud uses a clever moving average variation to define zones that indicate general price momentum and act as dynamic support and resistance.</p>
          </div>


          <div class="col-md-6 px-5 py-6 p-md-8 mb-20">
            <p class="mb-6">
              <img src="{{ url('assets/img/icons/swings.png') }}" />
            </p>
            <h4 class="mb-5">Coded Swings</h4>
            <p>Our unique color-coded swing levels help you quickly identify the price action trend and provide you with clear support and resistance levels.</p>
          </div>


          <div class="col-md-6 px-5 py-6 p-md-8 mb-20">
            <p class="mb-6">
              <img src="{{ url('assets/img/icons/timeframe.png') }}" />
            </p>
            <h4 class="mb-5">Smart Timeframes</h4>
            <p>Intelligent functionality plots additional cloud values by detecting your current resolution and determining the best higher timeframe to pull into the chart.</p>
          </div>


          <div class="col-md-6 px-5 py-6 p-md-8 mb-20">
            <p class="mb-6">
              <img src="{{ url('assets/img/icons/fractal.png') }}" />
            </p>
            <h4 class="mb-5">Real-Time Fractals</h4>
            <p>Our fractals are formed in near real-time. We let a price action pattern set the fractal and don’t wait for a defined amount of candles to close to plot a label.</p>
          </div>

          <div class="col-md-6 px-5 py-6 p-md-8 mb-20">
            <p class="mb-6">
              <img src="{{ url('assets/img/icons/eq.png') }}" />
            </p>
            <h4 class="mb-5">Equilibrium Detection</h4>
            <p>Using the power of our coded swings, equilibrium detection helps you spot meaningful price contraction that can lead to excellent trade opportunities.</p>
          </div>


          <div class="col-md-6 px-5 py-6 p-md-8 mb-20">
            <p class="mb-6">
              <img src="{{ url('assets/img/icons/backtest.png') }}" />
            </p>
            <h4 class="mb-5">Backtest Suite</h4>
            <p>The Built-in backtest suite goes beyond a static buy or sell model and has customizable risk values, stop-loss locations, profit targets, and leverage settings.</p>
          </div>

        </div>

      <div class="row mt-70 pt-20 pb-10 pl-20 pr-20 section-inverse bg-teal-grey text-center">
        <div class="col-lg-12">
          <p class="lead">
          <i class="fa fa-info-circle fs-25 pd-5"></i> When you purchase the Olympus Cloud you will receive a PDF with more detailed information on the basic entry signals.
          </p>
        </div>
      </div>

      <div class="row mt-70">
        <div class="col-12 text-center">
          <a class="btn btn-lg btn-primary" href="https://www.youtube.com/channel/UC_srdLV6WeXG2FYo8PguxhA" target="_blank">View YouTube Channel</a>
        </div>
      </div>

    </div>
  </section>

  <!--
  |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
  | INTRO VIDEO
  |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
  !-->

  <section class="section section-inverse bg-img" style="background-image: url(assets/img/greek-gods.jpg)" data-overlay="1">
    <div class="container">
      <header class="section-header">
        <h2>Watch Video</h2>
        <hr>
        <p class="lead">Get a feel for the Olympus Cloud with this quick introduction video.</p>
      </header>


      <div class="text-center mb-60">
        <a class="btn btn-lg btn-circular btn-light" href="https://www.youtube.com/watch?v=uvLXqRIwr9w" data-provide="lightbox"><i class="fa fa-play"></i></a>
      </div>

    </div>
  </section>

  <!--
  |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
  | Features
  |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
  !-->
  <section class="section overflow-hidden bg-grey" id="section-backtest">
    <div class="container">
      <header class="section-header">
        <small>BACKTEST SUITE</small>
        <h2>Backtest Like A Pro</h2>
        <hr class="dark-hr">
        <p class="lead">
          Our automated backtest logic reveals the baseline potential of the Olympus Cloud, and by incorporating a few advanced methods, you can achieve even better results.
          Our backtest suite is fully customizable and follows the fundamental concepts employed by top traders.
        </p>
      </header>

      <div class="row gap-y suite-features">
        <div class="col-12 col-md-6 col-lg-4">
          <div class="flexbox gap-items-4">
            <div>
              <i class="fa fa-eye fs-30 pt-0"></i>
            </div>
            <div>
              <h4>Consistent Variables</h4>
              <p>Detach from emotions and momentary perception with rigid trading rules that guide your behavior.</p>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
          <div class="flexbox gap-items-4">
            <div>
              <i class="fa fa-shield fs-30 pt-0"></i>
            </div>
            <div>
              <h4>Risk Management</h4>
              <p>Define a standard and consistent risk parameter so you stay on the right side of the numbers.</p>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
          <div class="flexbox gap-items-4">
            <div>
              <i class="fa fa-crosshairs fs-30 pt-0"></i>
            </div>

            <div>
              <h4>Profit Management</h4>
              <p>Find out what profit taking routine works for you with adjustable targets that keep you in control.</p>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
          <div class="flexbox gap-items-4">
            <div>
              <i class="fa fa-bullseye fs-30 pt-0"></i>
            </div>
            <div>
              <h4>Follow The Trend</h4>
              <p>Leave a portion of your position in the market with a trailing stop loss to capture extended moves.</p>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
          <div class="flexbox gap-items-4">
            <div>
              <i class="fa fa-bar-chart fs-30 pt-0"></i>
            </div>
            <div>
              <h4>Multiple Entries</h4>
              <p>Different entries allow you to choose what works best for the trading style you wish to employ.</p>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
          <div class="flexbox gap-items-4">
            <div>
              <i class="fa fa-wrench fs-30 pt-0"></i>
            </div>
            <div>
              <h4>Customization</h4>
              <p>Tweak strategy components to keep up with changing market conditions and backtest with ease.</p>
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

  <section class="section" id="section-insights">
    <div class="container">

      <header class="section-header">
        <small>LEARNING CENTER</small>
        <h2>Trading Insights</h2>
        <hr class="dark-hr">
        <p class="lead">Trading success is a product of your mindset as well as your approach. Our Insights Blog will teach you the nature of technical trading and help
          you develop the mental framework to execute like a pro.</p>
      </header>

      <div class="row gap-y">

        <div class="col-12 col-md-6 col-lg-4">
          <div class="card card-bordered card-hover-shadow">
            <a href="#"><img class="card-img-top" src="{{ url('assets/img/probability-small.jpg') }}" alt="Card image cap"></a>
            <div class="card-block">
              <h4 class="card-title"><a href="#">Trading Insights #1: Probability & Random Distribution</a></h4>
              <p class="card-text">Probability combined with random distribution is an important and often overlooked concept when it comes to trading. While rooted in data science and statistics, you need not be a data scientist to understand enough to aid your trading endeavors.</p>
              <a class="fw-600 fs-12" href="{{ url('probability-and-random-distribution') }}">Read more <i class="fa fa-chevron-right fs-9 pl-8"></i></a>
            </div>
          </div>
        </div>


        <div class="col-12 col-md-6 col-lg-4">
          <div class="card card-bordered card-hover-shadow">
            <a href="#"><img class="card-img-top" src="{{ url('assets/img/odds-small.jpg') }}" alt="Card image cap"></a>
            <div class="card-block">
              <h4 class="card-title"><a href="#">Trading Insights #2: The Truth About Technical Analysis</a></h4>
              <p class="card-text">If you’re an aspiring trader, then you’re probably familiar enough with technical analysis to muster up a definition of some kind. Despite the widespread familiarity with the concept, technical analysis is often misrepresented.</p>
              <a class="fw-600 fs-12" href="{{ url('the-truth-about-technical-analysis') }}">Read more <i class="fa fa-chevron-right fs-9 pl-8"></i></a>
            </div>
          </div>
        </div>


        <div class="col-12 col-lg-4 hidden-md-down">
          <div class="card card-bordered card-hover-shadow">
            <a href="#"><img class="card-img-top" src="{{ url('assets/img/mind-small.jpg') }}" alt="Card image cap"></a>
            <div class="card-block">
              <h4 class="card-title"><a href="#">Trading Insights #3: Mastering Your Mind</a></h4>
              <p class="card-text">Your mind is the most powerful piece of the puzzle when it comes to your trading success. Without developing the mentality of a pro trader, you will never achieve the results you desire. When it comes to mastering your mind, we can think of no one better to draw influence from than Buddha.</p>
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
      <header class="section-header">
        <small>PURCHASE</small>
        <h2>Sharpen Your Blade</h2>
        <hr class="white-hr">
        <p class="lead">Get the edge in your favor.</p>
      </header>

      <div class="row gap-y">

        <div class="col-12 col-lg-4">
          <div class="pricing-2">
            <h2 class="price"><span class="price-unit">$</span> 30</h2>
            <small class="mb-20">CAD</small>
            <h6 class="plan-name">Three-Month Access</h6>
            <p class="plan-description">Try it out, see for yourself</p>
            <p class="plan-description"><small>No future updates</small></p>
            <br>
            <a class="btn btn-white btn-round btn-outline w-200" href="{{ url('purchase/three-month') }}">Buy Now</a>
          </div>
        </div>


        <div class="col-12 col-lg-4">
          <div class="pricing-2">
            <h2 class="price"><span class="price-unit">$</span> 65</h2>
            <small class="mb-20">CAD</small>
            <h6 class="plan-name">Lifetime Access</h6>
            <p class="plan-description">Pay once, have fun forever</p>
            <p class="plan-description"><small>All future updates</small></p>
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
            <h2 class="price"><span class="price-unit">$</span> 50</h2>
            <small class="mb-20">CAD</small>
            <h6 class="plan-name">One-Year Access</h6>
            <p class="plan-description">Give it a good go</p>
            <p class="plan-description"><small>Updates within subscription period</small></p>
            <br>
            <a class="btn btn-white btn-round btn-outline w-200" href="{{ url('purchase/year') }}">Buy Now</a>
          </div>
        </div>

      </div>

      <p class="text-center mt-50">
        <i class="fa fa-info-circle fs-25 pd-5"></i> The Olympus Cloud is only compatible with TradingView charts.
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
        <hr class="dark-hr"/>
        <p class="lead">Before you dive in we highly recommend you look over these common questions and concerns.</p>
      </header>


      <div class="row">
        <div class="col-12">

          <div class="accordion accordion-connected accordion-arrow-right" id="accordion-1">
            <div class="card">
              <h4 class="card-title bg-grey">
                <a data-toggle="collapse" href="#collapse-1-1">Do you offer a free trial period?</a>
              </h4>

              <div id="collapse-1-1" class="collapse" data-parent="#accordion-1">
                <div class="card-body pd-20">
                  <p>
                    We do not offer free trial periods for the Olympus Cloud. We deliver a quality product that took time and testing to develop and do not
                    wish to see our efforts reverse engineered for free. In addition, we cover the Olympus Cloud thoroughly in our YouTube introductory series
                    so you can have confidence in your purchase.
                  </p>
                  <p>
                    The three-month plan is available for a reasonable fee, so if you have doubts, it’s a good place to start. Those who purchase the three-month plan
                     get a 15% discount if they wish to upgrade after their subscription has expired. If you buy a three-month plan and then upgrade to a lifetime plan,
                     you are paying about $20 for the initial three months after the 15% discount is factored into the lifetime plan.
                  </p>
                </div>
              </div>
            </div>


            <div class="card">
              <h4 class="card-title">
                <a class="collapsed" data-toggle="collapse" href="#collapse-1-2">Do you offer a warranty or refunds?</a>
              </h4>

              <div id="collapse-1-2" class="collapse" data-parent="#accordion-1">
                <div class="card-body pd-20">
                  <p>
                    We offer no warranty, guarantees, or refunds of any kind. Our Terms of Use and Disclaimer govern your use of this website and our products.
                    Please refer <a href="{{ url('terms-of-use') }}" class="teal-link">here</a> for more information.
                  </p>
                </div>
              </div>
            </div>


            <div class="card">
              <h4 class="card-title">
                <a class="collapsed" data-toggle="collapse" href="#collapse-1-3">Is the Olympus Cloud a subscription service?</a>
              </h4>

              <div id="collapse-1-3" class="collapse" data-parent="#accordion-1">
                <div class="card-body pd-20">
                  <p>
                    Yes and no. Unlike many other trading services, the Olympus Cloud is available as a one-time purchase if you buy a lifetime plan.
                    If you buy a three-month or one-year plan and wish to continue using the product you will have to purchase a new plan. However, we offer
                    return customers a discount at the point of sale.
                  </p>
                  <p>
                    Those who purchased a three-month or one-year plan receive a 15% discount on future extensions. These discounts do not stack and are always applied to the posted base price for the selected subscription period. For example,
                     if you are purchasing your third three-month plan, your discount is 15%, not 30%, and the discount is applied to the posted price for the three-month plan.
                  </p>
                </div>
              </div>
            </div>


            <div class="card">
              <h4 class="card-title">
                <a class="collapsed" data-toggle="collapse" href="#collapse-1-4">How do I use the Olympus Cloud?</a>
              </h4>

              <div id="collapse-1-4" class="collapse" data-parent="#accordion-1">
                <div class="card-body pd-20">
                  <p>
                    Please refer to our video collection for all you need to know about adding the Olympus Cloud to your TradingView chart and for recommended usage instructions.
                    Videos are available on our <a href="https://www.youtube.com/channel/UC_srdLV6WeXG2FYo8PguxhA" class="teal-link" target="_blank">YouTube channel.</a>
                  </p>
                </div>
              </div>
            </div>

            <div class="card">
              <h4 class="card-title">
                <a class="collapsed" data-toggle="collapse" href="#collapse-1-5">Do I need a TradingView account to use the Olympus Cloud?</a>
              </h4>

              <div id="collapse-1-5" class="collapse" data-parent="#accordion-1">
                <div class="card-body pd-20">
                  <p>
                    Yes. The Olympus Cloud was scripted solely for the TradingView platform. We are not affiliated with TradingView in any way. In the future,
                    we may provide our services for other platforms.
                  </p>
                </div>
              </div>
            </div>

            <div class="card">
              <h4 class="card-title">
                <a class="collapsed" data-toggle="collapse" href="#collapse-1-6">Will I always make winning trades?</a>
              </h4>

              <div id="collapse-1-6" class="collapse" data-parent="#accordion-1">
                <div class="card-body pd-20">
                  <p>
                    Absolutely not! The idea of winning every trade is impossible and goes against the key principles employed by professional traders. It is possible to
                    have stretches when you have a 100% success rate, but this is merely a snapshot of one period in time. Losses are inevitable in any trading regime.
                    Check out our Trading Insights Series in our <a href="{{ url('insights') }}" class="teal-link" >Insights Blog</a> to learn more about how professionals approach the art of trading.
                  </p>
                </div>
              </div>
            </div>

            <div class="card">
              <h4 class="card-title">
                <a class="collapsed" data-toggle="collapse" href="#collapse-1-7">What is the trade success rate?</a>
              </h4>

              <div id="collapse-1-7" class="collapse" data-parent="#accordion-1">
                <div class="card-body pd-20">
                  <p>
                    There are many factors that affect your win rate with the Olympus Cloud because it’s a customizable indicator and backtest suite. Depending on the security traded,
                    the time resolution employed, the settings you select, and the date range tested over, the Olympus Cloud can generate a win rate of 45% - 78% over a set of twenty
                    or more trades — more than enough to produce a net profit when combined with good risk and profit management.
                  </p>
                  <p>
                    Our backtest logic means you can verify the win rate on any security before you start trading. The stated win rates are only estimations based on what we have
                    experienced in the past and we do not guarantee a win rate on any security. You may experience different results.
                  </p>
                  <p>
                    With any strategy, taking profits quickly results in a high win rate, but the net profit is not necessarily optimal. View our insights article titled
                    <a href="{{ url('accuracy-and-profitability') }}" class="teal-link" target="_blank">Accuracy & Profitability</a> for more on this concept.
                  </p>
                </div>
              </div>
            </div>

            <div class="card">
              <h4 class="card-title">
                <a class="collapsed" data-toggle="collapse" href="#collapse-1-8">What time frames work best?</a>
              </h4>

              <div id="collapse-1-8" class="collapse" data-parent="#accordion-1">
                <div class="card-body pd-20">
                  <p>
                    In our experience, the optimal time frame is different depending on the security and the sector. Generally, the 15m, the 30m, and the 1hr time frames work well on
                    most securities. If you wish to use a time frame closer than 15m, such as 5m or 3m, you will get the best results by stacking the Olympus Cloud with a higher time frame, like the 1D.
                  </p>
                  <p>
                    For example, if the 1D chart has a bull cloud, you can then zoom into the 5m chart. If the 5m higher time frame filter is positive, you can try to take trades in the bullish direction
                    when an entry signal occurs. Part 6 in our introductory video series on our <a href="https://www.youtube.com/channel/UC_srdLV6WeXG2FYo8PguxhA" class="teal-link" target="_blank">YouTube channel</a> shows you how this process works.
                  </p>
                </div>
              </div>
            </div>

            <div class="card">
              <h4 class="card-title">
                <a class="collapsed" data-toggle="collapse" href="#collapse-1-9">What stocks should I trade with the Olympus Cloud?</a>
              </h4>

              <div id="collapse-1-9" class="collapse" data-parent="#accordion-1">
                <div class="card-body pd-20">
                  <p>
                    There are various ways of determining what stocks to trade and the Olympus Cloud is compatible with all types of stocks, ETFs, and futures. Many online influencers
                    emphasize trading “hotlists” found each morning via screening programs. While this can prove successful for some people, it often turns into a form of trade chasing
                    and frustration, and can even degrade into a way of gambling and attempts to get rich quickly.
                  </p>
                  <p>
                    We live by the mantra, as said by Buddha, “Patience is key. Remember: A jug fills drop by drop.” If you struggle to turn consistent profits trading, it’s best to slow
                    down and keep it simple. Focus on one or two big stocks or ETFs. These stocks have a significant number of market makers, meaning they have high liquidity
                    (money flowing in and out) and tend to follow certain patterns due to a consistent array of market participants. Even on such stocks, making a profit is not guaranteed,
                    but as you narrow your focus you will change your mindset and begin to develop a trader’s mentality.
                  </p>
                  <p>
                    While it sounds counterintuitive, it is more important you create a consistent mindset and trading regime than it is you get a few big winning trades. When you achieve
                    consistency, you can trade with any amount of capital, including very large amounts, and produce money over and over again.
                  </p>
                  <p>
                    A few of our favorite high liquidity large-cap stocks and ETFs include QQQ, SPY, SOXX, TAN, AAPL, AMZN, MSFT, NVDA, TSLA, and AMD.
                  </p>
                </div>
              </div>
            </div>

            <div class="card">
              <h4 class="card-title">
                <a class="collapsed" data-toggle="collapse" href="#collapse-1-10">Does the Olympus Cloud work on forex pairs?</a>
              </h4>

              <div id="collapse-1-10" class="collapse" data-parent="#accordion-1">
                <div class="card-body pd-20">
                  <p>
                    We did not design the Olympus Cloud for forex, but the indicator can be added to forex charts without a problem. Due to the customizable nature of the Olympus Cloud and
                    the built-in backtesting suite, it’s possible you can create settings that work in an acceptable manner, but we have not done testing on forex pairs.
                  </p>
                </div>
              </div>
            </div>

            <div class="card">
              <h4 class="card-title">
                <a class="collapsed" data-toggle="collapse" href="#collapse-1-11">Does the Olympus Cloud work on crypto?</a>
              </h4>

              <div id="collapse-1-11" class="collapse" data-parent="#accordion-1">
                <div class="card-body pd-20">
                  <p>
                    Yes. When trading crypto, the optimal time frame tends to shift. For example, a 15m resolution on stocks is more like a 1hr resolution on crypto. A 1hr time frame on stocks is
                    more like a 4hr time frame on crypto. Daily resolutions are equal. You can change the indicator settings and run the backtest suite to determine what works best for you.
                  </p>
                </div>
              </div>
            </div>

            <!-- <div class="card">
              <h4 class="card-title">
                <a class="collapsed" data-toggle="collapse" href="#collapse-1-12">How do I contact you?</a>
              </h4>

              <div id="collapse-1-12" class="collapse" data-parent="#accordion-1">
                <div class="card-body pd-20">
                  <p>
                    You can send additional questions to <em class="teal-font">info@medusamoney.com.</em>
                  </p>
                </div>
              </div>
            </div> -->

          </div>

        </div>
      </div>


    </div>
  </section>



@endsection
