@extends('../layouts.layout2')

@section('title', 'Accuracy & Profitability')

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
        <h2><em>Trading Essentials #1:</em> Accuracy & Profitability</h2>
        <p>April 26, 2022 in <a href="{{ url('insights') }}">Insights</a></p>
      </div>

      <div class="text-center my-8">
        <img class="rounded-md blog-img" src="{{ url('assets/img/accuracy-opt.jpg') }}" alt="...">
      </div>

      <div class="row">
        <div class="col-lg-8 mx-auto">

          <h4 class="mt-20">Debriefing</h4>
          <p class="lead">
            A critical component relating to trading success is the relationship between your win percentage and your bottom line. Many new traders hold some extremely inaccurate views when it comes to what kind of win percentage is required to generate net profit, including the notion they need a 70% or higher win percentage to achieve success. This notion is wrong and misleading. The relationship between your win percentage, your risk management, and the profit you generate from each trade are intricately related.
          </p>

          <h4 class="mt-20">The Positive Win Percentage</h4>
          <p class="lead">
            A win percentage over 50% is regarded as a probable edge or edge. Yet, even with a 60% win rate, you can generate a net loss. How? If your average loss is $100, but you are in the habit of falling prey to your emotions and prematurely selling your winners so you only generate an average of $50 when you win, you will lose money regardless of your 60% win rate.
          </p>

          <p class="lead">
            No trader goes into a trade thinking, “Hey, I’ll lose $100 if I’m wrong and I’ll make $50 if I’m correct.”  Nevertheless, random wins of $75, $25, $60, $40, $90, and $10 will average out to $50 per win. No one purposely tries to win half of what they lose, but random trading combined with random emotions produces random results.
          </p>

          <p class="lead">
            We all desire winning and making good profits when we take a trade, but as emotions come into play, things quickly change. You may take a trade that reaches $75 in profit and then decide the move looks gassed out, so you sell. On another trade, you might get scared by some volatility, or notice a resistance you neglected to spot initially and sell for $25 of profit. It is all too common to fall prey to your emotions and behave in a way you didn’t plan to. The irony is, that you will regard the $25 trade as a winner, and it will raise your trade accuracy.
          </p>

          <p class="lead">
            Let’s look at a simple example:
          </p>

          <ul>
            <li>
              Example: 100 total trades with 60% trade accuracy
            </li>
            <li>
              60 winning trades at an average of $50 per win = $3,000
            </li>
            <li>
              40 losing trades at an average of $100 per loss = $4,000
            </li>
            <li>
              Net loss of $1,000
            </li>
          </ul>

          <p class="lead">
            In the example above, your break-even point is a 67% win percentage for a whopping $50 in profit. With this type of random risk and profit management, any meaningful net profit requires a win percentage upwards of 75-80%.
          </p>

          <p class="lead">
            The psychological damage of having a higher average loss than an average win is hard to quantify, but it’s easy to feel frustration when one loss wipes out two wins. While this sounds like common sense, many, many new traders fall into the habit of random profit management and find themselves in this undesirable situation. The same theory holds true even if you let your winners play out, but you also let your losses escalate and take a few big hits to your account. In either scenario, your 60% win rate means nothing.
          </p>

          <h4 class="mt-20">The Negative Win Percentage</h4>
          <p class="lead">
            In the case of a negative win percentage, you can produce a net profit even if you are correct less than 50% of the time. In this scenario, your advantage over the market is getting into trades that consistently provide large gains when you win, and by letting those winners play out fully. Furthermore, you can’t hesitate to cut your losses and keep your drawdown controlled. With this kind of win rate, you must not sell early or your entire business model falls apart. You must understand that the big winners will make up for any profit you leave on the table.
          </p>

          <p class="lead">
            Let’s look at what happens if you are correct 40% of the time, but your average win is $100 and your average loss is $50:
          </p>

          <ul>
            <li>
              Example: 100 total trades with 40% trade accuracy
            </li>
            <li>
              40 winning trades at an average of $100 per win = $4,000
            </li>
            <li>
              60 losing trades at an average of $50 per loss = $3,000
            </li>
            <li>
              Net gain of $1,000
            </li>
          </ul>

          <p class="lead">
            It is now clear that win percentage is not everything. You can make money even if you are correct on 40% of your trades as long as your average win is double your average loss. The smaller your average win compared to your average loss, the higher your accuracy must be to make a net profit.
          </p>

          <p class="lead">
            Of course, if you can maintain a win percentage over 50% while also having proper risk and profit management you will end up far ahead.
          </p>

          <h4 class="mt-20">Putting It Together</h4>
          <p class="lead">
            Clearly, the best approach is to combine a reasonable win percentage of over 50% with proper risk and profit management. You must consistently let your winners play out regardless of the emotions you feel in the moment and ensure you don’t take losses beyond a certain threshold. Furthermore, scaling out of trades – selling portions of your position as the market moves in your favor – will increase your accuracy and ease your mind. By dividing your position into two or three tranches you can lock in a certain amount of profit at predefined targets and then let the final portion ride out the trend with a trailing stop-loss.
          </p>

          <p class="lead">
            Revisiting our example, let’s put these concepts together with a reasonable win percentage:
          </p>

          <ul>
            <li>
              Example: 100 total trades with 55% trade accuracy
            </li>
            <li>
              55 winning trades at an average of $100 per win = $5,500
            </li>
            <li>
              45 losing trades at an average of $50 per loss = $2,250
            </li>
            <li>
              Net gain of $3,250
            </li>
          </ul>

          <p class="lead">
            Now, that’s what you want to see!
          </p>

          <p class="lead">
            It’s more important you behave in a consistent manner and follow a predefined game plan than it is to have 80% trade accuracy. It is wise to strive for reasonable trade accuracy – 50% to 65% – and remain consistent in order to fulfill your trading potential.
          </p>

          <p class="lead">
            After you have mastered your emotions with a consistent strategy, perhaps you can raise your win percentage to mythical values like 80%. As we have covered, though, such accuracy is not required for great trading results.
          </p>


        </div>
      </div>

    </div>
  </div>

</main>

@endsection
