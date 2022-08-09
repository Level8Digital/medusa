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
              <p>Tweak strategy components to keep up with changing market conditions and backtest the results.</p>
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
  | Olympus Suite
  |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
  !-->

  <section class="section bg-gray overflow-hidden" id="section-overview">
    <div class="container">
      <header class="section-header">
        <small>OVERVIEW</small>
        <h2>Find Clarity</h2>
        <hr class="dark-hr">
        <p class="lead">Simple and effective visual guides that help you find clarity regardless of market conditions. Not to mention backtest logic that shows you what works, and what doesn't.</p>
      </header>

      <div class="row gap-y align-items-center mt-70">
        <div class="col-lg-6 ml-auto">
          <h4>Olympus Cloud</h4>
          <p>Our unique cloud is based on candle highs and lows and is not a function of moving average crossovers or crossunders like many other systems.
            In addition, a lagging trend filter helps you gauge the longer-term momentum so you’re not trading against the wave.
          </p>
          <p class="mt-30">
            <i class="fa fa-check"></i> Enter when the trend filter is positive and the cloud transitions bullish
          </p>
          <p>
            <i class="fa fa-check"></i> A secondary signal occurs on the next pivot during a bullish trend and cloud environment
          </p>
          <p>
            <i class="fa fa-check"></i> Stack the Olympus Cloud on multiple timeframes to increase confluence and probability
          </p>
          <p>
            <i class="fa fa-check"></i> The short signal occurs when the trend filter is negative and the cloud transitions bearish
          </p>
          <p>
            <i class="fa fa-check"></i> Works for high-frequency traders or those with a long-term outlook
          </p>
        </div>

        <div class="col-lg-5 order-lg-first">
          <img class="rounded shadow-2" src="{{ url('assets/img/olympus-cloud.jpg') }}" alt="...">
        </div>
      </div>

      <div class="row gap-y align-items-center mt-70">
        <div class="col-md-6 mr-auto">
          <h4>Olympus Pivot</h4>
          <p>
            A pure price action approach based on our real-time fractals. The Olympus Pivot is an aggressive trend following and trend reversal strategy that is best suited
            for big ETFs and blue-chip companies. An optional moving average filter is available to help guide your decisions.
          </p>
          <p class="mt-30">
            <i class="fa fa-check"></i> Enter when a real-time fractal is set
          </p>
          <p>
            <i class="fa fa-check"></i> Stack the Olympus Pivot on multiple timeframes to increase confluence and probability
          </p>
          <p>
            <i class="fa fa-check"></i> Best suited for traders who focus on going long, not short
          </p>
          <p>
            <i class="fa fa-check"></i> Works for high-frequency traders or those with a long-term outlook
          </p>
        </div>

        <div class="col-md-5">
          <img class="rounded shadow-2" src="{{ url('assets/img/olympus-pivot.jpg') }}" alt="...">
        </div>
      </div>

      <div class="row mt-70 pt-20 pb-10 pl-20 pr-20 section-inverse bg-teal-gray">
        <div class="col-lg-12">
          <p class="lead">
          <i class="fa fa-info-circle fs-25"></i> Both systems feature our robust and customizable backtest logic that helps you manage risk, determine profit targets, and ensures stategy viability.
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
      <header class="section-header">
        <small>PURCHASE</small>
        <h2>Sharpen Your Blade</h2>
        <hr class="white-hr">
        <p class="lead">Get the edge in your favor.</p>
      </header>

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
        <hr class="dark-hr"/>
        <p class="lead">Drop us an email if you couldn't find an answert to your question in the following list.</p>
      </header>


      <div class="row">
        <div class="col-12">

          <div class="accordion accordion-connected accordion-arrow-right" id="accordion-1">
            <div class="card">
              <h4 class="card-title bg-gray">
                <a data-toggle="collapse" href="#collapse-1-1">Is this a secure site for purchases?</a>
              </h4>

              <div id="collapse-1-1" class="collapse" data-parent="#accordion-1">
                <div class="card-body pl-20 pr-20">
                  Absolutely! We work with top payment companies which guarantees your safety and security. All billing information is stored on our payment processing partner which has the most stringent level of certification available in the payments industry.
                </div>
              </div>
            </div>


            <div class="card">
              <h4 class="card-title">
                <a class="collapsed" data-toggle="collapse" href="#collapse-1-2">How long are your contracts?</a>
              </h4>

              <div id="collapse-1-2" class="collapse" data-parent="#accordion-1">
                <div class="card-body pl-20 pr-20">
                  Currently, we only offer monthly subscription. You can upgrade or cancel your monthly account at any time with no further obligation.
                </div>
              </div>
            </div>


            <div class="card">
              <h4 class="card-title">
                <a class="collapsed" data-toggle="collapse" href="#collapse-1-3">Can I cancel my subscription?</a>
              </h4>

              <div id="collapse-1-3" class="collapse" data-parent="#accordion-1">
                <div class="card-body pl-20 pr-20">
                  You can cancel your subscription anytime in your account. Once the subscription is cancelled, you will not be charged next month. You will continue to have access to your account until your current subscription expires.
                </div>
              </div>
            </div>


            <div class="card">
              <h4 class="card-title">
                <a class="collapsed" data-toggle="collapse" href="#collapse-1-4">Can I request refund?</a>
              </h4>

              <div id="collapse-1-4" class="collapse" data-parent="#accordion-1">
                <div class="card-body pl-20 pr-20">
                  Unfortunately, not. We do not issue full or partial refunds for any reason.
                </div>
              </div>
            </div>

          </div>

        </div>
      </div>

      <div class="row mt-70 text-center">
        <div class="col-12">
          <a class="btn btn-lg btn-primary" href="{{ url('faq') }}">View More FAQ</a>
        </div>
      </div>


    </div>
  </section>



@endsection
