@extends('../layouts.layout2')

@section('title', 'Real Technical Analysis')

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
        <h2><em>Trading Insights Part 2:</em> The Truth About Technical Analysis</h2>
        <p>April 24, 2022 in <a href="{{ url('insights') }}">Insights</a></p>
      </div>

      <div class="text-center my-8">
        <img class="rounded-md blog-img" src="{{ url('assets/img/odds-opt.jpg') }}" alt="...">
      </div>

      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h4 class="mt-20">Debriefing</h4>
          <p class="lead">
            In the first part of our Trading Insights Series, we went over the essential nature of probability and random distribution as it relates to trading. If you have not yet read part one, you should start there (Probability & Random Distribution.)
          </p>

          <h4 class="mt-20">Intro</h4>
          <p class="lead">
            If you’re an aspiring trader, then you’re probably familiar enough with technical analysis to muster up a definition of some kind. Despite the widespread familiarity with the concept, technical analysis is often misrepresented.
          </p>

          <p class="lead">
            This entry to the series does not focus on developing trading variables or strategies, rather, it emphasizes certain concepts relating to technical analysis. We believe the concepts herein are imperative to understand before you can successfully create or execute a trading system.
          </p>

          <h4 class="mt-20">What Technical Analysis Is & Isn’t</h4>
          <p class="lead">
            Traders use technical analysis to gain an edge on the market or achieve a positive expectancy. In other words, technical analysis aids your ability to tip the odds in your favor. Yet, technical analysis does not tell you what the market is going to do next. Anyone who puts forward this idea is grossly misrepresenting an otherwise excellent analytical tool.
          </p>

          <p class="lead">
            To know what the market is going to do next would require you to read the minds of the people who have the financial capability to significantly move prices. The people who can move the market in significant ways do not think like you or me and have their own goals and agendas that guide their actions. These individuals are often called “whales”, or “dynamic players”, and have substantial financial and mental capabilities that retail traders do not possess. Many of the reasons these individuals make trades would not even cross your mind, and they do things you would never consider as possibilities.
          </p>

          <p class="lead">
            In addition to the direct actions of “whales”, the modern market is heavily influenced by automated bots and trading algorithms. These bots are able to act quicker than humans and are programmed to react to information that big players deem important. Despite the fact bots contribute heavily to price action, these bots are created and used by ‘whales’ and ‘dynamic players’. The code within these bots is not straightforward and is complex and continually updated. The cascading effect of all the ‘whales’ who trade, and the bots they create, is the real force that moves the market in meaningful ways.
          </p>

          <p class="lead">
            Retail traders are extremely limited in their ability to move prices, and this ability decreases as the market cap of the company increases. For retail traders to have any large effect on prices requires an enormous flood of market orders that can take out all of the orders at higher or lower prices. Even when retail traders are able to affect prices, the impact is generally minimal.
          </p>

          <p class="lead">
            It is estimated that retail traders in the USA account for approximately 10% of all trading volume on the Russell 3000 index, for a total of about 38 billion dollars per day. That’s no small amount, but still only accounts for 10% of all trading volume.
          </p>

          <p class="lead">
            On a fairly normal day, to move TSLA from $825 to $875 required 25 million shares to trade hands. That’s a total of about 21 billion dollars. It would require over half of all retail traders that participate in the Russell 3000 put their entire buying power on TSLA, while also having the willingness to buy at the asking price, to achieve this feat. I think everyone can agree this situation is entirely unlikely.
          </p>

          <p class="lead">
            When we consider the sheer amount of stocks available to trade and then divide that 38 billion dollars among all popular tickers, we quickly realize how limited retail traders are in their ability to significantly move prices. Every long trade you make is dependent on ‘whales’ willing to buy at a higher price and move the market up. Obviously, in a short trade, it’s the reverse.
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

          <h4 class="mt-20">The Truth About Technical Analysis</h4>
          <p class="lead">
            The intent of technical analysis is to identify behavior patterns in the collective consciousness of the market. In other words, the interaction of all market participants produces patterns you can use in your favor. A pattern is simply a clue that one outcome is slightly more likely than another outcome. Conversely, as many will find surprising, a pattern can indicate that the preferred outcome is equal to or slightly less likely than the undesired outcome, but the positive results of the pattern outweigh the negative results by a fair margin. In other words, the dollar amount from the winning instances is significantly higher than the amount lost on losing trades.
          </p>

          <p class="lead">
            Each instance of a pattern or technical signal is a unique occurrence, and the result of any pattern is unrelated to the previous instance of that pattern. The market does not move because of patterns, or due to signals from technical indicators. Patterns and indicators are not self-fulfilling prophecies. Patterns form because the people with the capability to significantly move prices (not you) leave traces of their behavior. A certain number of these ‘whales’ may use technical patterns in their bots and analysis, yet the way they use patterns and the reasons behind their actions are almost never transparent and certainly differ from the reasons you take a trade.
          </p>

          <p class="lead">
            When you end up in a winning trade it is not because your strategy told you what was going to happen next, and it is most certainly not because a few lines crossed on a visual chart. These technical signals will draw in retail traders who try to make money without moving prices, but in order for the market to move substantially, far greater forces are required. Nearly every profitable trade you make is because ‘whales’ came into the market with the conviction, and resources, to move prices in the direction of your trade.
          </p>

          <p class="lead">
            In real terms, each behavior pattern has an unknown outcome and can result in an undesired result because the traders present at each instance of a pattern vary and may not be willing to act in the same way as they previously did.
          </p>

          <h4 class="mt-20">Random Distribution & Technical Analysis</h4>
          <p class="lead">
            As we explored in part one, the outcome of flipping a coin is subject to numerous factors beyond our control, making each flip unrelated to the previous flip, even if we can rig the coin to favor a certain outcome. Market patterns work in the exact same way, with the caveat that behavior patterns are subject to even more forces beyond what we can control.
          </p>

          <p class="lead">
            As already stated, ‘whales’ and ‘dynamic traders’ have the ability to significantly move prices and have their own agendas and intentions. Even amongst these large traders, there are vastly different perspectives and goals. This creates a substantial number of unknown forces acting on each trade you make. If trading was as simple as analyzing economic information and putting on a trade, all economists would be incredibly wealthy, yet they are not. Trading is not black and white. You may make correct predictions from time to time, but it does not mean the reasons behind your predictions were correct.
          </p>

          <p class="lead">
            While market patterns help tip the odds of earning money in your favor, they do not tell you what the market is going to do next. All of this adds up to the fact that, with any behavior pattern, the winning occurrences are randomly distributed through a set of occurrences.
          </p>


        </div>
      </div>



    </div>
  </div>

</main>

@endsection
