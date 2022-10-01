@extends('../layouts.layout2')

@section('title', 'The Truth About Leverage')

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
        <h2><em>Trading Insights Part 3:</em> The Truth About Leverage</h2>
        <p>Sept 1, 2022 in <a href="{{ url('insights') }}">Insights</a></p>
      </div>

      <div class="text-center my-8">
        <img class="rounded-md blog-img" src="{{ url('assets/img/leverage-opt.jpg') }}" alt="...">
      </div>

      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h4 class="mt-20">Intro</h4>
          <p class="lead">
            Trading with leverage simply means borrowing money to put on a trade. Leverage is one of the many tools available for traders who seek to generate higher gains on their capital. Brokers have strict rules that govern the use of leverage, but this article is not aimed at teaching you the complexities of borrowing from your broker. Instead, the aim herein is to teach aspiring traders when using leverage is appropriate.          </p>

          <h4 class="mt-20">The Dangers of Leverage</h4>

          <p class="lead">
            For traders who do not have excellent risk management, leverage is a highly dangerous tool that can lead to outsized losses. While brokers will only allow you to draw down a certain amount before you receive a margin call—a demand from the broker to add more capital or liquidate positions to increase free capital—such losses can still devastate most traders. Furthermore, many online influencers present unrealistic results by using extremely high amounts of leverage and then showcasing these results as easily obtainable for the average person, often without presenting the potential dangers of trying to mirror their exploits.
          </p>

          <h4 class="mt-20">The Complexities of Leverage</h4>
          <p class="lead">
            The benefits of using leverage seem obvious. If you can borrow money for a trade you can potentially earn much higher percentages on your capital. If you have a $25,000 account and can borrow an additional $25,000 for a trade, you can conceivably earn twice as much profit on each trade.
          </p>

          <p class="lead">
            But let’s pump the brakes for a second.
          </p>

          <p class="lead">
            If a broker allows you to double (or more) your capital for a trade, does that mean it’s a good idea? After all, if you can double your gains, you can certainly double your losses. If a trader is using twice as much capital without thinking about how much they are risking the situation can get out of hand quickly.
          </p>

          <p class="lead">
            If a trader seeks to risk $500 on a particular trade, but they don’t properly calculate their position size based on the total leveraged capital, the trader can lose $1,000 instead of $500 with the same stop loss location. To make matters worse, the $1,000 loss is a much bigger blow to their $25,000 trading account than to a $50,000 account. The trader’s account is now $24,000, meaning they will only have access to $48,000 for their next trade. If this same process occurs a few times in a row it becomes much harder to gain back the lost capital.
          </p>

          <h4 class="mt-20">When To Use Leverage</h4>

          <p class="lead">
            Trading with huge amounts of leverage, say 50x or more, and attempting to hit home run trades will almost always result in a devastating loss for new and struggling traders. For the average technical retail trader, leverage should only be used in a particular circumstance, and when done correctly, it can certainly help the trader rapidly increase their capital.
          </p>

          <p class="lead">
            When you have proper risk management and use a predefined risk on each trade, such as risking 2% of your account, leverage can play an important role. For instance, if your trading methodology places a stop loss in close proximity to your entry it’s very possible that your account capital cannot purchase enough shares to risk the desired amount.
          </p>

          <p class="lead">
            To illustrate this concept, let’s look at a basic example.
          </p>

          <ul>
            <li>
              Say you have a $25,000 trading account
            </li>
            <li>
              You risk 2% of your account on each trade for a dollar risk of $500
            </li>
            <li>
              You take a trade where the stop loss is $2 below your entry (Risk per share) and the stock is $195 per share
            </li>
            <li>
              To risk the desired $500 you need to purchase 250 shares (Dollar risk / Risk per share)
            </li>
            <li>
              <strong>BUT...</strong>
            </li>
            <li>
              250 shares would cost you $48,750, an amount that clearly exceeds your account size!
            </li>
          </ul>

          <p class="lead">
            This means you cannot afford to risk $500 on the trade. Without leverage, you could only purchase a grand total of 128 shares. This is the only time it is appropriate to go all in on a trade—when you are able to go all in and still maintain a controlled risk parameter. Unfortunately, when you can’t afford to risk your desired amount, your entire profit taking routine is thrown out of whack.
          </p>

          <p class="lead">
            Let’s assume your profit taking regime states that you sell when you’ve gained twice your risk. Normally, you would sell the position when you are up $4 per share (twice the risk per share). Yet, because you could only afford to purchase 128 shares (not the required 250), a $4 gain per share will only produce a profit of $512—an amount that only gives you a 1:1 risk-to-reward ratio on this trade. In order to achieve your 2:1 risk to reward ratio you would have to gain $7.80 per share—nearly double the profit target. It’s by no means a guarantee that the trade will hit your increased profit target, and if you sell before this point you are altering your usual risk-to-reward scheme. Changing your profit taking regime or your risk-to-reward plan has a negative effect on your bottom line when looked at over a large sample size of trades.
          </p>

          <p class="lead">
            Leverage solves this problem.
          </p>

          <p class="lead">
            If you were able to use 2x leverage, you could suddenly afford the required 250 shares, and you could keep your usual profit taking routine intact. In short, leverage is a tool that allows you to maintain a consistent risk per trade even when your stop loss is so close to your entry that you cannot afford the required amount of shares.
          </p>

          <h4 class="mt-20">Special Considerations</h4>
          <p class="lead">
            Keep in mind, leverage can still cause you to lose more than you are comfortable with when trading stocks. If you’re using twice the value of your account and you get caught in a gap down where price skips your stop loss location you can take an extra large loss. This is an important thing to consider and is one reason some people only use leverage when they trade large ETFs such as QQQ, or when trading a market that’s open 23 hours per day, such as futures. These ETFs do not experience extra large gap downs because they are less volatile, and futures hardly have any gaps.
          </p>

          <p class="lead">
            Gaps on big diversified ETFs are almost always easier to recover from than a huge gap down on some other stock. For example, say you’re in a 2x leveraged position attempting to risk 2% of your account, but you get caught in a gap down on QQQ when price opens 1% below your stop loss level. In this case, you would lose 4% of your account. While this is certainly not ideal, it is completely possible to recover from this larger than expected loss. If you get caught in a 20% gap down on NFLX or a 10% gap down on TSLA while using 2x leverage your account will be devastated. For this reason, we only consider using leverage on large diversified ETFs or futures, even when we are using the methods covered in this article.
          </p>

        </div>
      </div>



    </div>
  </div>

</main>

@endsection
