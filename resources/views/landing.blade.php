@extends('layouts.layout1')

@section('title', 'Innovative Trading Tools & Indicators')

@section('styles')

@endsection

@section('content')
<!-- <div class="header-area header-startup header-bg" style="background-image:url(assets/img/landing-bg.png);">
    <div class="startup-bg-img wow animate__animated animate__zoomIn" data-parallax='{"x": 220, "y": 150}' style="background-image:url(assets/img/header-slider/startup/01.png);"></div>
    <div class="shape"></div>
    <div class="shape-02"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="header-inner">
                    <h1 class="title">Master Your Money</h1>
                    <p>We develop trading tools that help you gain a probable edge on the market.</p>
                    <div class="header-form-area">
                        <div class="form-group">
                            <button type="submit" class="submit-btn">Tell Me More</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->

<div class="header-area header-gym header-bg" style="background-image:url(assets/img/landing-bg-2.png);">
    <!-- <div class="shape-02"></div> -->
    <div class="gym-bg-img wow animate__animated animate__zoomIn" data-parallax='{"x": 220, "y": 150}' style="background-image:url(assets/img/header-slider/gym/01.png);"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="header-inner">
                    <h1 class="title">Master Your Money</h1>
                    <p>We develop trading tools that help you gain a probable edge on the market</p>
                    <div class="btn-wrapper padding-top-30">
                        <a href="#" class="boxed-btn btn-gym">Tell Me More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="header-bottom-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="client-area">
                    <div class="client-active-area">
                        <div class="single-brand">
                            <a href="#"><img src="assets/img/built-for-main.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Destination Us -->
<div id="why" class="unique-project-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title brand desktop-center margin-bottom-55">
                    <h3 class="title">Rely on stats, not signals</h3>
                    <p>Visual signals and unrealistic examples can obscure long-term results. Our trading tools have backtesting logic baked in, leaving the power of statistics in your hands.</p>
                    <div class="btn-wrapper margin-top-30">
                        <div class="btn-startup style-01 boxed-btn reverse-color">Get The FAQs</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="unique-project-area padding-top-120 padding-bottom-115">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="shape" style="background-image: url(assets/img/unique-project/bg-02.png);">
                    <div class="shape-02 style-01"></div>
                    <div class="build-img bg-image-02" style="background-image: url(assets/img/unique-project/02.png);"></div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="unique-content-area">
                    <div class="section-title brand">
                        <p>Goodbye Guesswork</p>
                        <h4 class="title">Stop wondering, start knowing</h4>
                        <p>Unlike others, our trading tools are fully transparent and show you the critical metrics that impact your long-term profitability.</p>
                        <ul class="content">
                            <li><i aria-hidden="true" class="fas fa-check"></i>Backtesting logic reveals comprehensive statistics</li>
                            <li><i aria-hidden="true" class="fas fa-check"></i>View your algorithm changes in terms of net profit, not signals</li>
                            <li><i aria-hidden="true" class="fas fa-check"></i>Built in risk management helps you stay out of trouble</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- organizations -->
<div class="organizations-header-section">
    <div class="container">
        <div class="organizations-header-wrap bg-image">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title brand white desktop-center padding-bottom-45">
                        <h3 class="title">The Power of Patterns</h3>
                        <p>To master trading, you don't need to understand economic cycles, market correlations, or business fundamentals. In any market, behavior patterns emerge that encapsulate the actions of each individual who trades.
                        These patterns must include the actions of individuals and firms who analyze fundamentals, business models, and those who trade for any other reason. Analyzing patterns is simple to say, but harder to achieve. We
                        are here to help get you started.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-icon-box-04">
                        <div class="icon">
                            <i class="flaticon-bar-chart"></i>
                        </div>
                        <div class="content">
                            <h3 class="title">Price Action Oscillator (PAO)</h3>
                            <p>Designed for stocks, futures, and crypto, the PAO is a smart indicator that uses multiple timeframes to help you confidently trade with the trend like never before.</p>
                            <a href="/price-action-oscillator">Learn More...</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-icon-box-04">
                        <div class="icon style-01">
                            <i class="flaticon-save-money"></i>
                        </div>
                        <div class="content">
                            <h3 class="title">M-NAS</h3>
                            <p>Exclusively designed for NASDAQ futures and CFD's, the M-NAS is a proprietary trading strategy that can help you capture short and midterm profits on the worlds most popular market.</p>
                            <a href="/m-nas">Learn More...</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-icon-box-04">
                        <div class="icon style-02">
                            <i class="flaticon-levels"></i>
                        </div>
                        <div class="content">
                            <h3 class="title">M-SPY</h3>
                            <p>Exclusively designed for S&P 500 futures and CFD's, the M-SPY eliminates guesswork by giving you a proven trading strategy you can customize to suite your needs.</p>
                            <a href="/m-spy">Learn More...</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Price Plan   -->
<div id="pricing" class="price-plan-area padding-top-110 padding-bottom-90">
    <div class="bg-img" style="background-image: url(assets/img/bg/social/01.png);"></div>
    <div class="bg-img-02" style="background-image: url(assets/img/bg/social/02.png);"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title desktop-center margin-bottom-55">
                    <h3 class="title social-title">Pricing Overview</h3>
                    <p>Powerful tools that won't break the bank. Recieve an incremental discount for buying multiple tools.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-price-plan-01">
                    <div class="price-header">
                        <h4 class="title">Price Action Oscillator (PAO)</h4>
                        <div class="img-icon"><img src="assets/img/price-plan/01.png" alt=""></div>
                    </div>
                    <div class="price-wrap">
                        <span class="price">$35</span><span class="month">CAD</span>
                    </div>
                    <div class="price-body">
                        <ul>
                            <li><i class="fa fa-check success"></i> 8 Social Accounts</li>
                            <li><i class="fa fa-check success"></i> 100 Schedule Posts</li>
                            <li><i class="fa fa-check success"></i> 1 User</li>
                        </ul>
                    </div>
                    <div class="price-footer">
                        <div class="btn-wrapper">
                            <a href="#" class="boxed-btn">Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-price-plan-01">
                    <div class="price-header">
                        <h4 class="title">M-NAS or M-SPY</h4>
                        <div class="img-icon"><img src="assets/img/price-plan/02.png" alt=""></div>
                    </div>
                    <div class="price-wrap">
                        <span class="price">$50</span><span class="month">CAD</span>
                    </div>
                    <div class="price-body">
                        <ul>
                            <li><i class="fa fa-check success"></i> 8 Social Accounts</li>
                            <li><i class="fa fa-check success"></i> 100 Schedule Posts</li>
                            <li><i class="fa fa-check success"></i> 1 User</li>
                        </ul>
                    </div>
                    <div class="price-footer">
                        <div class="btn-wrapper">
                            <a href="#" class="boxed-btn">Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-price-plan-01">
                    <div class="price-header">
                        <h4 class="title">Package Deal</h4>
                        <div class="img-icon"><img src="assets/img/price-plan/03.png" alt=""></div>
                    </div>
                    <div class="price-wrap">
                        <span class="price">$100</span><span class="month">CAD</span>
                    </div>
                    <div class="price-body">
                        <ul>
                            <li><i class="fa fa-check success"></i> 8 Social Accounts</li>
                            <li><i class="fa fa-check success"></i> 100 Schedule Posts</li>
                            <li><i class="fa fa-check success"></i> 1 User</li>
                        </ul>
                    </div>
                    <div class="price-footer">
                        <div class="btn-wrapper">
                            <a href="#" class="boxed-btn">Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Frequently asked quetions -->
<div id="faq" class="frequently-area padding-bottom-70">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-title desktop-center margin-bottom-55">
                    <h3 class="title social-title">Frequently Asked Questions</h3>
                    <!-- <p>Common questions about our products and trading</p> -->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="faq-single-item">
                    <div class="content">
                        <h3 class="title">What platform do your tools work on?</h3>
                        <p>Inspiration comes in many ways and you like to save everything from Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                    </div>
                </div>
                <div class="faq-single-item">
                    <div class="content">
                        <h3 class="title">Do you offer a trial period or give refunds?</h3>
                        <p>Inspiration comes in many ways and you like to save everything from Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit</p>
                    </div>
                </div>
                <div class="faq-single-item">
                    <div class="content">
                        <h3 class="title">Do you offer warranty?</h3>
                        <p>Inspiration comes in many ways and you like to save everything from Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit</p>
                    </div>
                </div>

            </div>
            <div class="col-lg-6">
                <div class="faq-single-item">
                    <div class="content">
                        <h3 class="title">How do I install and use your tools?</h3>
                        <p>Inspiration comes in many ways and you like to save everything from Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit</p>
                    </div>
                </div>
                <div class="faq-single-item">
                    <div class="content">
                        <h3 class="title">Do your tools always win?</h3>
                        <p>Inspiration comes in many ways and you like to save everything from Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit</p>
                    </div>
                </div>
                <div class="faq-single-item more-faq">
                    <div class="content">
                        <h3 class="title">Have additional questions?</h3>
                        <div class="btn-wrapper margin-top-30">
                            <a class="btn-startup style-01 boxed-btn reverse-color" href="/faq">More FAQs</a>
                        </div>
                    </div>

                </div>
                <!-- <div class="question-form-area">
                    <div class="header-content">
                        <h4 class="title">Have any quetions?</h4>
                        <p>Send your quetions in our mail</p>
                    </div>
                    <form class="question-form" action="index.html">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Enter your email">
                        </div>
                        <button type="submit" class="submit-btn">Submit Now</button>
                    </form>
                </div> -->
            </div>
        </div>

    </div>
</div>
@endsection
