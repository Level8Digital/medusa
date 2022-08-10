@extends('layouts.layout1')

@section('title', 'Innovative Trading Systems')

@section('styles')

@endsection

@section('content')

<!-- Landing -->
<header class="header header-inverse h-fullscreen p-0 overflow-hidden" data-parallax="assets/img/olympus-background.jpg">
  <div class="container">

    <div class="row h-full">
      <div class="col-12 col-lg-6 align-self-center text-center text-lg-left">

        <h1 class="display-2">Goodbye Guesswork</h1>
        <br>
        <p class="lead text-white" id="landing-lead">Stop wondering if you have a profitable trading strategy. Get the power of Olympus in your hands, and say goodbye to the Underworld forever.</p>

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
          The secret to trading does not lay in predicting every price oscillation or finding new and exotic markets. The best traders are consistent and in control.
          The Olympus Cloud allows you to adjust your strategy as market conditions shift and gives you the ability to backtest your changes with ease. When you’re
          confident in your system, all you need is the mental framework to execute like a pro.
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
                <p><i class="fa fa-hdd-o fs-50"></i></p>
                <h4>Embrace Testing</h4>
                <p>
                  Beyond a mere indicator, the Olympus Cloud comes with backtest logic, allowing you to verify past results and make decisions based on data, not blind trust.
                </p>
              </div>
            </div>
            <div class="col-12">
              <p><i class="fa fa-check-circle fs-50"></i></p>
              <h4>Embrace Probability</h4>
              <p>
                To help you succeed, the Olympus Cloud uses multiple time frames and price action to derive an effective trading system designed around pattern repetition.
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
        <p class="text-white">It is better to conquer yourself than to win a thousand battles. Then the victory is yours. It cannot be taken from you, not by angels or by demons, heaven or hell.</p>
        <footer class="text-white"><cite title="Source Title">Buddha</cite></footer>
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
      <header class="section-header">
        <small>FEATURES</small>
        <h2>Master Your Mind</h2>
        <hr class="dark-hr">
        <p class="lead">
          Trading success is a product of your mindset as well as your approach. As counterintuitive as it sounds, the market does not determine your results,
          and a few winning trades do not make a successful trader. To conquer your mind and develop the habits of a professional you require a consistent methodology
          based on the fundamental concepts employed by top traders.
        </p>
      </header>

      <div class="row gap-y suite-features">
        <div class="col-12 col-md-6 col-lg-4">
          <div class="flexbox gap-items-4">
            <div>
              <i class="fa fa-code fs-30 pt-0"></i>
            </div>
            <div>
              <h4>Backtest Logic</h4>
              <p>Ensure you have confidence in your strategy by testing past performance on your favorite stocks.</p>
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
              <p>Tweak strategy components to keep up with changing market conditions and backtest your changes.</p>
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
              <p>Built-in risk calculations instantly display position size based on a recommended stop-loss price.</p>
            </div>
          </div>
        </div>
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
              <i class="fa fa-crosshairs fs-30 pt-0"></i>
            </div>

            <div>
              <h4>Profit Targets</h4>
              <p>Pre-calculated targets based on risk per share and position size help you scale out of winning trades.</p>
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


      </div>



    </div>
  </section>

  <!--
  |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
  | Overview
  |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
  !-->

  <section class="section bg-gray overflow-hidden" id="section-overview">
    <div class="container">
      <header class="section-header">
        <small>OVERVIEW</small>
        <h2>Find Clarity</h2>
        <hr class="dark-hr">
        <p class="lead">The Olympus Cloud is a simple and effective visual guide that helps you find clarity regardless of market conditions. In addition, backtest
          logic reveals which settings work, and which don't. The automated backtest functionality means you can continually improve your strategy by testing different
          settings at defined milestones to keep up with market changes. If you find certain settings worked better over your last set of trades, use the new settings going forward.</p>
      </header>

      <div class="row gap-y align-items-center mt-70 sm-mt-30">
        <div class="col-lg-6 ml-auto">
          <h4>Olympus Cloud</h4>
          <p>Our unique cloud is based on candle highs and lows and does not use moving average crossovers or crossunders like many other indicators. To top it off, our
            indicator features a higher time frame filter that helps you measure the longer-term momentum without changing your resolution.
          </p>
          <p class="mt-30">
            <i class="fa fa-check"></i> Built-in backtest suite with customizable risk values, stop-loss locations, profit targets, and leverage settings
          </p>
          <p>
            <i class="fa fa-check"></i> Three long entries and three short entries
          </p>
          <p>
            <i class="fa fa-check"></i> Entries are built on price action not abstracted indicator values
          </p>
          <p>
            <i class="fa fa-check"></i> A higher time frame filter puts data from multiple resolutions on a single chart
          </p>
          <p>
            <i class="fa fa-check"></i> Stackable on multiple timeframes to increase confluence and probability
          </p>
          <p>
            <i class="fa fa-check"></i> A convenient trade table automatically displays position size and profit targets based on your defined dollar risk value
          </p>
          <p>
            <i class="fa fa-check"></i> Works for higher-frequency traders or those with a long-term outlook
          </p>
        </div>

        <div class="col-lg-5 order-lg-first">
          <img class="rounded shadow-2" src="{{ url('assets/img/olympus-cloud.jpg') }}" alt="...">
          <img class="rounded shadow-2 mt-20" src="{{ url('assets/img/olympus-cloud-backtest-suite.jpg') }}" alt="...">
        </div>
      </div>

      <div class="row mt-70 pt-20 pb-10 pl-20 pr-20 section-inverse bg-teal-gray text-center">
        <div class="col-lg-12">
          <p class="lead">
          <i class="fa fa-info-circle fs-25 pd-5"></i> When you purchase the Olympus Cloud you will receive a PDF with more detailed information on entry signals.
          </p>
        </div>
      </div>

      <div class="row mt-70">
        <div class="col-12 text-center">
          <a class="btn btn-lg btn-primary" href="{{ url('videos') }}">View Videos</a>
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
        <p class="lead">Develop your trading skills with articles designed to stimulate your mind.</p>
      </header>

      <div class="row gap-y">

        <div class="col-12 col-md-6 col-lg-4">
          <div class="card card-bordered card-hover-shadow">
            <a href="#"><img class="card-img-top" src="{{ url('assets/img/probability-small.jpg') }}" alt="Card image cap"></a>
            <div class="card-block">
              <h4 class="card-title"><a href="#">Trading Insights #1: Probability</a></h4>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title.</p>
              <a class="fw-600 fs-12" href="{{ url('probability-and-random-distribution') }}">Read more <i class="fa fa-chevron-right fs-9 pl-8"></i></a>
            </div>
          </div>
        </div>


        <div class="col-12 col-md-6 col-lg-4">
          <div class="card card-bordered card-hover-shadow">
            <a href="#"><img class="card-img-top" src="{{ url('assets/img/odds-small.jpg') }}" alt="Card image cap"></a>
            <div class="card-block">
              <h4 class="card-title"><a href="#">Trading Insights #2: Proper Technical Analysis</a></h4>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title.</p>
              <a class="fw-600 fs-12" href="{{ url('tipping-the-odds') }}">Read more <i class="fa fa-chevron-right fs-9 pl-8"></i></a>
            </div>
          </div>
        </div>


        <div class="col-12 col-lg-4 hidden-md-down">
          <div class="card card-bordered card-hover-shadow">
            <a href="#"><img class="card-img-top" src="{{ url('assets/img/mind-small.jpg') }}" alt="Card image cap"></a>
            <div class="card-block">
              <h4 class="card-title"><a href="#">Trading Insights #3: Shaping The Mind</a></h4>
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
      <header class="section-header">
        <small>PURCHASE</small>
        <h2>Sharpen Your Blade</h2>
        <hr class="white-hr">
        <p class="lead">Get the edge in your favor.</p>
      </header>

      <div class="row gap-y">

        <div class="col-12 col-lg-4">
          <div class="pricing-2">
            <h2 class="price"><span class="price-unit">$</span> 50</h2>
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
            <p class="plan-description">Give it a good go</p>
            <br>
            <a class="btn btn-white btn-round btn-outline w-200" href="{{ url('purchase/year') }}">Buy Now</a>
          </div>
        </div>

      </div>

      <p class="text-center mt-50">
        <i class="fa fa-info-circle fs-25 pd-5"></i> The Olympus Cloud is only compatible with TradingView charts. Returning customers recieve a discount at the point of sale.
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
        <p class="lead">Before you dive in, we highly recommend you look over these common questions and concerns.</p>
      </header>


      <div class="row">
        <div class="col-12">

          <div class="accordion accordion-connected accordion-arrow-right" id="accordion-1">
            <div class="card">
              <h4 class="card-title bg-gray">
                <a data-toggle="collapse" href="#collapse-1-1">Do you offer a free trial period?</a>
              </h4>

              <div id="collapse-1-1" class="collapse" data-parent="#accordion-1">
                <div class="card-body pd-20">
                  Absolutely! We work with top payment companies which guarantees your safety and security. All billing information is stored on our payment processing partner which has the most stringent level of certification available in the payments industry.
                </div>
              </div>
            </div>


            <div class="card">
              <h4 class="card-title">
                <a class="collapsed" data-toggle="collapse" href="#collapse-1-2">Do you offer a warranty or refunds?</a>
              </h4>

              <div id="collapse-1-2" class="collapse" data-parent="#accordion-1">
                <div class="card-body pd-20">
                  Currently, we only offer monthly subscription. You can upgrade or cancel your monthly account at any time with no further obligation.
                </div>
              </div>
            </div>


            <div class="card">
              <h4 class="card-title">
                <a class="collapsed" data-toggle="collapse" href="#collapse-1-3">Is the Olympus Cloud a subscription service?</a>
              </h4>

              <div id="collapse-1-3" class="collapse" data-parent="#accordion-1">
                <div class="card-body pd-20">
                  You can cancel your subscription anytime in your account. Once the subscription is cancelled, you will not be charged next month. You will continue to have access to your account until your current subscription expires.
                </div>
              </div>
            </div>


            <div class="card">
              <h4 class="card-title">
                <a class="collapsed" data-toggle="collapse" href="#collapse-1-4">How do I use the Olympus Cloud?</a>
              </h4>

              <div id="collapse-1-4" class="collapse" data-parent="#accordion-1">
                <div class="card-body pd-20">
                  Unfortunately, not. We do not issue full or partial refunds for any reason.
                </div>
              </div>
            </div>

            <div class="card">
              <h4 class="card-title">
                <a class="collapsed" data-toggle="collapse" href="#collapse-1-5">Do I need a TradingView account to use the Olympus Cloud?</a>
              </h4>

              <div id="collapse-1-5" class="collapse" data-parent="#accordion-1">
                <div class="card-body pd-20">
                  Unfortunately, not. We do not issue full or partial refunds for any reason.
                </div>
              </div>
            </div>

            <div class="card">
              <h4 class="card-title">
                <a class="collapsed" data-toggle="collapse" href="#collapse-1-6">Will I always make winning trades?</a>
              </h4>

              <div id="collapse-1-6" class="collapse" data-parent="#accordion-1">
                <div class="card-body pd-20">
                  Unfortunately, not. We do not issue full or partial refunds for any reason.
                </div>
              </div>
            </div>

            <div class="card">
              <h4 class="card-title">
                <a class="collapsed" data-toggle="collapse" href="#collapse-1-7">What is the trade success rate?</a>
              </h4>

              <div id="collapse-1-7" class="collapse" data-parent="#accordion-1">
                <div class="card-body pd-20">
                  Unfortunately, not. We do not issue full or partial refunds for any reason.
                </div>
              </div>
            </div>

            <div class="card">
              <h4 class="card-title">
                <a class="collapsed" data-toggle="collapse" href="#collapse-1-8">What time frames work best?</a>
              </h4>

              <div id="collapse-1-8" class="collapse" data-parent="#accordion-1">
                <div class="card-body pd-20">
                  Unfortunately, not. We do not issue full or partial refunds for any reason.
                </div>
              </div>
            </div>

            <div class="card">
              <h4 class="card-title">
                <a class="collapsed" data-toggle="collapse" href="#collapse-1-9">What stocks should I trade with the Olympus Cloud?</a>
              </h4>

              <div id="collapse-1-9" class="collapse" data-parent="#accordion-1">
                <div class="card-body pd-20">
                  Unfortunately, not. We do not issue full or partial refunds for any reason.
                </div>
              </div>
            </div>

            <div class="card">
              <h4 class="card-title">
                <a class="collapsed" data-toggle="collapse" href="#collapse-1-10">Does the Olympus Cloud work on forex pairs?</a>
              </h4>

              <div id="collapse-1-10" class="collapse" data-parent="#accordion-1">
                <div class="card-body pd-20">
                  Unfortunately, not. We do not issue full or partial refunds for any reason.
                </div>
              </div>
            </div>

            <div class="card">
              <h4 class="card-title">
                <a class="collapsed" data-toggle="collapse" href="#collapse-1-11">Does the Olympus Cloud work on crypto?</a>
              </h4>

              <div id="collapse-1-11" class="collapse" data-parent="#accordion-1">
                <div class="card-body pd-20">
                  Unfortunately, not. We do not issue full or partial refunds for any reason.
                </div>
              </div>
            </div>

            <div class="card">
              <h4 class="card-title">
                <a class="collapsed" data-toggle="collapse" href="#collapse-1-12">How do I contact you?</a>
              </h4>

              <div id="collapse-1-12" class="collapse" data-parent="#accordion-1">
                <div class="card-body pd-20">
                  Unfortunately, not. We do not issue full or partial refunds for any reason.
                </div>
              </div>
            </div>

          </div>

        </div>
      </div>


    </div>
  </section>



@endsection
