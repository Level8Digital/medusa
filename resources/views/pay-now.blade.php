@extends('layouts.layout4')

@section('title', 'Checkout')

@section('styles')

@section('pre-scripts')
    <script src="https://www.paypal.com/sdk/js?client-id=AbQ8yNRjtqO6ZxkP7UahAA-5ZuPxbsMFQhKDoV7I3_he9L1nONBGmn9VbX4xdV6bK_zCq4KuEuhKqQO9&currency=CAD"></script>
@endsection

@section('content')

<!-- Header -->
<header class="header header-inverse">
  <div class="container">
    <h1 class="display-4">Checkout</h1>
    <p class="lead-2 mt-6">Finalize your purchase.</p>
  </div>
</header>
<!-- END Header -->

<main class="main-content">
  <section class="section" id="payment-area">
    <div class="container">

      <div id="payment-error" class="alert alert-danger" style="display:none;">
        <i class="fa fa-exclamation-triangle"></i> There was a problem processing the payment! <span id="error-msg"></span>
      </div>

      <div class="row mt-50">
        <div class="col-lg-7 ">
          <div class="cart-price">
              <h5><i class="fa fa-shopping-cart"></i> Your {{ $access_desc }} <small> - {{ $purchase['email'] }} | {{ $purchase['username'] }}</small></h5>
              @if($purchase['discount_applied'] and $purchase['referral_code'] == 'None')
                <h6 class="teal-font"><i class="fa fa-trophy"></i> Since you're a return customer a {{ $purchase['discount_amount'] }}% discount was applied to your purchase!</h6>
              @endif

              @if($purchase['discount_applied'] and $purchase['referral_code'] != 'None')
                <h6 class="teal-font"><i class="fa fa-trophy"></i> Since you used a referral code a {{ $purchase['discount_amount'] }}% discount was applied to your purchase!</h6>
              @endif
            <hr>

            <div class="flexbox">
              <div>
                <h5><strong>Total:</strong></h5>
              </div>

              <div>
                <h5 class="fw-600">${{ $purchase['total'] }} <small>CAD</small></h5>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-5 mt-30">
          <div id="paypal-button-container"></div>
        </div>
      </div>

      <div class="row mt-20 text-center">
        <div class="col-12">
          <p>
            <i class="fa fa-credit-card"></i> Credit and Debit payments are proccessed via PayPal. We save no payment information except your PayPal confirmation number.
          </p>
        </div>
      </div>





    </div>
  </section>

  <section class="section bg-repeat" data-overlay-light="5" id="success-area" style="display:none;">
    <div class="container">
      <header class="section-header">
        <small>Welcome to the Olympus Suite</small>
        <br>
        <i class="fa fa-check-circle-o super-icon"></i>
        <h2 class="lead-8"><strong>Thanks for your purchase</strong></h2>
        <hr class="dark-hr">
        <p class="lead-2">
          The Olympus Suite will be available to your TradingView account within a maximum of 24 hours, but usually sooner.
        </p>
        <p class="lead-2">
          While you wait, head over to our Video page to learn how to use and access your new trading system, and check out our Insights Blog to take your trading to the next level.
        </p>
        <p class="lead-2">
        <i class="fa fa-envelope"></i> <em>You will recieve an email from us when your access has been granted.</em>
        </p>
      </header>
      <p class="text-center">
        <a class="btn btn-lg btn-primary w-250" href="/videos">Videos</a><br>
      </p>
      <p class="text-center">
        <a class="btn btn-lg btn-primary w-250" href="/insights">Insights</a><br>
      </p>
    </div>
  </section>

</main>

@endsection

@section('scripts')

<script src="{{ url('assets/js/axios.min.js') }}"></script>

<script>
    var purchaseId = {{ $purchase['id'] }}

    paypal.Buttons({

        // Sets up the transaction when a payment button is clicked
        createOrder: function(data, actions) {

            return actions.order.create({
                purchase_units: [{

                    amount: {
                        currency_code: "CAD",
                        value: {{ $purchase['total'] }},
                        invoice_id: {{ $purchase['id'] }}

                    }
                }]
            });
        },

        // Finalize the transaction after payer approval
        onApprove: function(data, actions) {

            return actions.order.capture().then(function(orderData) {

                //console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
                var transaction = orderData.purchase_units[0].payments.captures[0];
                console.log(transaction);

                axios.post('/finalize-paypal', {
                  purchase_id: purchaseId,
                  paypal_id: transaction.id,
                  payment_amount: parseFloat(transaction.amount.value)
                })
                .then(function (response) {
                  console.log(response);

                  // Hide the payment area and show the success area
                  $('#payment-area').toggle("fast", function(){
                      $('#success-area').toggle("slow");
                  });
                })
                .catch(function (error) {
                  // Log error - for debug
                  console.log(error);

                  $('#error-msg').text(error.message);

                  // Show the error alert
                  $('#payment-error').toggle("fast");

                });

            });

        }

    }).render('#paypal-button-container');


</script>

@endsection
