@extends('layouts.layout3')

@section('title', 'Purchase')

@section('styles')

@endsection

@section('content')

<!-- Header -->
<header class="header header-inverse">
  <div class="container">
    <h1 class="display-4">Purchase</h1>
    <p class="lead-2 mt-6">Get the power of Olympus in your hands and say goodbye to the Underworld forever.</p>
  </div>
</header>
<!-- END Header -->

<main class="main-content">
  <section class="section">
    <div class="container">

      <!--
      ^^^^^^^ FORM ^^^^^^^
      -->
      <form class="row gap-y" action="/proceed-to-checkout" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <input type="hidden" name="access" value="{{ $access }}" />

        <div class="col-lg-8">
          <table class="table table-cart">
            <tbody valign="middle">
              <tr>
                <td>
                  <a href="">
                    <img class="rounded" src="../assets/img/shop/10.jpg" alt="...">
                  </a>
                </td>

                <td style="width: auto">
                  <h5>Olympus Suite</h5>
                  <p>{{ $access_desc }}</p>
                </td>

                <td>
                  <h4 class="price">${{ $price }} <small>CAD</small></h4>
                </td>
              </tr>
            </tbody>
          </table>

          <hr class="my-8 mt-30 mb-30 dark-hr">

          <h5 class="mb-6"><i class="fa fa-user-circle"></i> Your Details</h5>

          <div class="row">

            <div class="col-md-12">
              @if($errors->any())
                  <div class="alert alert-danger">
                      <p><strong>Opps Something went wrong</strong></p>
                      <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                      </ul>
                  </div>
              @endif
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" placeholder="Email Address" class="form-control" value="{{ old('email') }}">
                    @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="email">Confirm Email</label>
                    <input type="text" name="email_confirmation" placeholder="Confirm Email" class="form-control" value="{{ old('email_confirmed') }}">
                    @error('email_confirmed')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="username">TradingView Username </label>
                    <input type="text" name="username" placeholder="TradingView Username" class="form-control" value="{{ old('username') }}">
                    @error('username')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="username_confirmed">Confirm TradingView</label>
                    <input type="text" name="username_confirmation" placeholder="Confirm TradingView" class="form-control" value="{{ old('username_confirmed') }}">
                    @error('username_confirmed')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
          </div>

          <div class="row">

            <div class="col-md-12 mt-20">
              <label class="form-control">
                  <input type="checkbox" name="confirm_tv" />
                  I realize I need a TradingView account to use the Olympus Suite
              </label>
              @error('confirm_tv')
                  <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>

            <div class="col-md-12 mt-20">
              <label class="form-control">
                  <input type="checkbox" name="agree_terms" />
                  I have read, understood, and agree to the Disclaimer & Terms of Use
                  <button class="btn btn-lg btn-block btn-secondary mt-10 mb-10" type="button" data-toggle="modal" data-target="#modal-subscribe-1">View Terms Here</button>
              </label>
              @error('agree_terms')
                  <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>

            <div class="col-md-6 mt-20">
                <div class="form-group">
                    <label for="math_question">* Verify Your Humanity</label>
                    <input type="text" name="math_question" class="form-control" placeholder="{{ session('a12Ty9UkJ1!$%125Hgye') }}">
                    @error('math_question')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

          </div>

        </div>

        <div class="col-lg-4">
          <div class="cart-price">
            <div class="flexbox">
              <div>
                <p><strong>Subtotal:</strong></p>
                <p><strong>Tax (GST - 5%):</strong></p>
              </div>

              <div style="text-align: right;">
                <p>${{ $price}} <small>CAD</small></p>
                <p>${{ $tax }} <small>CAD</small></p>
              </div>
            </div>

            <hr>

            <div class="flexbox">
              <div>
                <p><strong>Total:</strong></p>
              </div>

              <div>
                <p class="fw-600">${{ $total }} <small>CAD</small></p>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-12">
              <button class="btn btn-block btn-primary" type="submit">Go to Payment <i class="ti-angle-right fs-9"></i></button>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="text-center mt-30">
                <p class="mb-1"><i class="fa fa-paypal large-icon"></i></p>
                <h6><em>PayPal</em></h6>
              </div>
              <div class="text-center mt-30">
                <p class="mb-1"><i class="fa fa-credit-card large-icon"></i></p>
                <h6>
                  <em>Credit or Debit</em>
                  <br>
                  <small>Via PayPal Secure Checkout</small>
                </h6>
              </div>
            </div>
          </div>

        </div>

      </form>
      <!--
      ^^^^^^^ END FORM ^^^^^^^
      -->

    </div>
  </section>

  <!-- Terms -->
  <div class="modal fade" id="modal-subscribe-1" tabindex="-1" role="dialog">
    <div class="modal-dialog" id="terms-modal" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <section class="section">
            <div class="container">
              <div class="row">
                <div class="col-md-10 mx-auto">

                  <h4>General Information</h4>
                  <p>We collect the e-mail addresses of those who communicate with us via e-mail, aggregate information on what pages consumers access or visit, and information volunteered by the consumer (such as survey information and/or site registrations). The information we collect is used to improve the content of our Web pages and the quality of our service, and is not shared with or sold to other organizations for commercial purposes, except to provide products or services you’ve requested, when we have your permission, or under the following circumstances:</p>

                  <ul>
                    <li>It is necessary to share information in order to investigate, prevent, or take action regarding illegal activities, suspected fraud, situations involving potential threats to the physical safety of any person, violations of Terms of Service, or as otherwise required by law.</li>
                    <li>We transfer information about you if TheSaaS is acquired by or merged with another company. In this event, TheSaaS will notify you before information about you is transferred and becomes subject to a different privacy policy.</li>
                  </ul>

                  <br>
                  <h4>Information Gathering and Usage</h4>
                  <ul>
                    <li>When you register for TheSaaS we ask for information such as your name, email address, billing address, credit card information. Members who sign up for the free account are not required to enter a credit card.</li>
                    <li>TheSaaS uses collected information for the following general purposes: products and services provision, billing, identification and authentication, services improvement, contact, and research.</li>
                  </ul>

                  <br>
                  <h4>Cookies</h4>
                  <ul>
                    <li>A cookie is a small amount of data, which often includes an anonymous unique identifier, that is sent to your browser from a web site’s computers and stored on your computer’s hard drive.</li>
                    <li>Cookies are required to use the TheSaaS service.</li>
                    <li>We use cookies to record current session information, but do not use permanent cookies. You are required to re-login to your TheSaaS account after a certain period of time has elapsed to protect you against others accidentally accessing your account contents.</li>
                  </ul>

                  <br>
                  <h4>Data Storage</h4>
                  <p>TheSaaS uses third party vendors and hosting partners to provide the necessary hardware, software, networking, storage, and related technology required to run TheSaaS. Although TheSaaS owns the code, databases, and all rights to the TheSaaS application, you retain all rights to your data.</p>

                  <br>
                  <h4>Disclosure</h4>
                  <p>TheSaaS may disclose personally identifiable information under special circumstances, such as to comply with subpoenas or when your actions violate the Terms of Service.</p>


                  <br>
                  <h4>Changes</h4>
                  <p>TheSaaS may periodically update this policy. We will notify you about significant changes in the way we treat personal information by sending a notice to the primary email address specified in your TheSaaS primary account holder account or by placing a prominent notice on our site. Such notice will be given at least 3 days in advance of the date the new policy will be applied.</p>


                  <br>
                  <h4>Question</h4>
                  <p>Any questions about this Privacy Policy should be addressed to privacy@domain.com.</p>


                </div>
              </div>
            </div>
          </section>

        </div>

      </div>
    </div>
  </div>


</main>

@endsection
