@extends('../layouts.layout2')

@section('title', 'Probability & Random Distribution')

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

<!-- END Header -->

<!-- Main Content -->
<main class="main-content">

  <!--
  |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
  | Post content
  |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
  !-->
  <div class="section">
    <div class="container">

      <div class="text-center mt-8">
        <h2><em>Trading Insights Part 1:</em> Probability & Random Distribution</h2>
        <p>April 23, 2022 in <a href="{{ url('insights') }}">Insights</a></p>
      </div>

      <div class="text-center my-8">
        <img class="rounded-md blog-img" src="{{ url('assets/img/probability.jpg') }}" alt="...">
      </div>

      <div class="row">
        <div class="col-lg-8 mx-auto">

          <h4 class="mt-20">Debriefing</h4>
          <p class="lead">
            In this mini-series, we take a look at what it takes to become a successful trader. The Trading Insights series focuses on concepts rather than analysis and will attempt to get you on the proper path to your trading goals. We believe the ideas contained in this series are the proper base to help you become a professional trader.
          </p>

          <p class="lead">
            We define a professional trader as an individual who makes consistent profits month after month, only takes controlled losses, does not succumb to momentary emotions, and does not experience outsized account drawdowns.
          </p>

          <h4 class="mt-20">Intro</h4>
          <p class="lead">
            Probability combined with random distribution is an important and often overlooked concept when it comes to trading. While rooted in data science and statistics, you need not be a data scientist to understand enough to aid your trading endeavors
          </p>

          <p class="lead">
            Traders who say things such as, “you need to make a large number of trades to make money”, or “don’t let the losses deter you from making more trades”, are ungracefully or unknowingly referring to probability and random distribution.
          </p>

          <h4 class="mt-20">Probability</h4>
          <p class="lead">
            To understand how random distribution relates to trading we must first cover some basics of probability. If we flip a fair coin there is always a 50% chance the coin lands on tails. Each time we flip a coin the likelihood of landing on tails is identical, despite the fact we could flip heads five times in a row. This means the possibility of heads or tails turning up is unrelated to the previous flip. The result of each flip is random relative to the last flip due to circumstances we cannot control, such as the pressure applied to the flip, the airflow in the room, the landing spot, and numerous other factors.
          </p>

          <p class="lead">
            Let’s now pretend we rig the coin and change the likelihood of flipping tails to 55%. The same rules govern our new rigged coin – the result of each flip is unrelated and random in relation to the last flip. By rigging the coin in favor of tails we have not changed this fact, but we have tilted the outcome in our favor over many flips. In other words, if the rigged coin is flipped enough times, we will get more tails than heads. The increased probability of flipping tails is reflected over many flips of the coin, not on each individual flip.
          </p>

          <h4 class="mt-20">Random Distribution</h4>
          <p class="lead">
            Once we understand the basics of probability, random distribution is simple to comprehend. If the result of flipping a rigged coin is unrelated to the last flip then the flips that produce tails are randomly distributed throughout a set of flips.
          </p>

          <p class="lead">
            For example, a sequence of flips could go: H,H,T,H,T,T,T,H,T,T – there is no discernable pattern in relation to tails turning up. Over a set of flips, however, our rigged coin lands on tails more often than heads. The increased likelihood of the coin landing on tails is reflected over many flips, not on each flip.
          </p>

          <p class="lead">
            What does all of this mean in real terms? Individual random events have a consistent outcome over a set of events when the odds are tilted in one direction.
          </p>

          <h4 class="mt-20">Relating The Concepts To Trading</h4>
          <p class="lead">
            With this knowledge in hand we can identify some essential concepts relating to trading.
          </p>

          <p class="lead">
            <strong>1.</strong> Over a series of events where many unknown forces influence each event, the outcome of each event is unrelated to the previous event. In trading, this means the outcome of each market pattern is not related to the last instance of that same pattern. If a pattern results in a winning trade it does not mean the next instance of the pattern will also produce a winner, or vice-versa.
          </p>

          <p class="lead">
            <strong>2.</strong> Over a set of events, the events that produce a favorable outcome are randomly distributed throughout the set. In trading, this means any attempt to predict which instance of a pattern will produce a favorable outcome is a waste of time. When you attempt to predict which instance of a pattern will produce a winner, you are saying you know what will happen next, which begs the question, if you can’t read the minds of the people who have the financial ability to move prices, how exactly do you know? Hint: you can never know exactly, despite the fact you can guess correctly from time to time.
          </p>

          <p class="lead">
            <strong>3.</strong> Over a set of events, tipping the odds in one direction means the increased likelihood of a certain outcome is only reflected over many instances of the event. In trading, this means you need a pattern or strategy that tips the odds in our favor, but you must view many instances of your pattern or strategy to see the desired results. In other words, you must not view your trading exploits from trade to trade, but rather, over a sequence of many trades.
          </p>

        </div>
      </div>



    </div>
  </div>

</main>

@endsection
