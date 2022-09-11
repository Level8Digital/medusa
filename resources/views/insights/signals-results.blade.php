@extends('../layouts.layout2')

@section('title', 'Signals Versus Results')

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
        <h2><em>Trading Essentials #1:</em> Signals Versus Results</h2>
        <p>April 27, 2022 in <a href="{{ url('insights') }}">Insights</a></p>
      </div>

      <div class="text-center my-8">
        <img class="rounded-md blog-img" src="{{ url('assets/img/signals-opt.jpg') }}" alt="...">
      </div>

      <div class="row">
        <div class="col-lg-8 mx-auto">

          <h4 class="mt-20">Debriefing</h4>
          <p class="lead">
            Many traders fall into the habit of judging a trading system or methodology by observing visual signals. A visual signal can range from a bot or algorithm signals, moving average interactions, a Stochastic cross, or a plethora of other common patterns.
          </p>

          <p class="lead">
            Observation is the first step to finding a successful trading system but relying solely on visual cues will leave you open to selection bias. In other words, people tend to focus on the signals that worked and ignore the ones that didn’t. In addition to selection bias, if you make adjustments to an indicator or strategy based on visual cues without knowing the results in terms of accuracy and profit, you may suffer from what we call cascading changes, also known as unforeseen side effects.
          </p>

          <h4 class="mt-20">Tuning For Results</h4>
          <p class="lead">
            The opposite of relying on visual cues is basing your decisions on the past results of a trading system. While past results do not guarantee future results, a pattern that has produced historical net profit is likely to work to some degree in the future.
          </p>

          <p class="lead">
            Indicators and systems that are packaged with backtesting logic allow you to make adjustments to the system and then view how your changes affect real outcomes like net profit, trade accuracy, and profit factor. Making indicator changes based on results means you are using data in your favor.
          </p>

          <h4 class="mt-20">Avoiding Selection Bias</h4>
          <p class="lead">
            The fix for selection bias is simple. If a pattern looks good to your eyes, backtest it and ensure you locate every last instance of the pattern, especially failed outcomes. It’s also important that you backtest over a long time period and do so on multiple different tickers. Some systems work well over a specific date range on a certain ticker but are much less successful on other securities or date ranges. Those who are unable to write automated backtesting scripts will have to rely on manual backtesting or find others who provide backtesting suites.
          </p>

          <p class="lead">
            We highly recommend you avoid indicators and systems that do not include the ability to backtest and view past performance. It’s also best to remain skeptical when taking the word of many online influencers. Looking at a few signals that produced winning trades does not mean the system is capable of producing net profit over large sample sizes. In addition, only testing a system in a rampant bull market can be misleading. In other words, don’t fall victim to visual signals that don’t reveal results across time.
          </p>

          <h4 class="mt-20">Avoiding Cascading Changes</h4>
          <p class="lead">
            When backtesting, sometimes tweaks you believe ought to improve your net profit do not produce the expected results. During extensive backtesting, many system changes we thought were improvements turned out to produce undesired outcomes. Not all changes improve your strategy even though the most recent visual signals appear better.
          </p>

          <p class="lead">
            For example, by adjusting a strategy variable to avoid a few unwanted losses you may inadvertently miss a few trades that were big winners. The same variables that produced the unwanted losses were the same variables that produced the big winners. Some of the best trading systems follow the trend and a pattern similar to the Pareto principle, which means a small number of trades produce a large amount of the total gains. Missing the big winning trades has a significant negative impact on your net profit. You will never know in advance if the trade will become a big winner, and anyone who tells you they know is naive.
          </p>

          <p class="lead">
            Trying to achieve perfect trade accuracy will cause you to miss many excellent opportunities. Adding more variables to a trading strategy means you are limiting the conditions that will activate a signal and increasing the likelihood your strategy will miss winning trades. A good strategy is strict, but simple, and does not attempt to achieve perfection.
          </p>

          <p class="lead">
            Technical analysis does not predict the future, it simply provides us with an indication that one outcome is more likely. Changing trading variables without knowing the full extent of your changes over time is akin to fighting with a blindfold on.
          </p>

        </div>
      </div>

    </div>
  </div>

</main>

@endsection
