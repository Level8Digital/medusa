@extends('layouts.layout1')

@section('title', 'Terms of Use')

@section('styles')

@section('pre-scripts')
    <script src="https://www.paypal.com/sdk/js?client-id=AbQ8yNRjtqO6ZxkP7UahAA-5ZuPxbsMFQhKDoV7I3_he9L1nONBGmn9VbX4xdV6bK_zCq4KuEuhKqQO9&currency=CAD"></script>
@endsection

@endsection

@section('content')

<!-- Breadcrumb Area -->
<div class="breadcrumb-area  margin-bottom-120">
    <div class="shape"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="breadcrumb-inner">
                    <div class="icon">
                        <i class="far fa-lightbulb"></i>
                        <p>Checkout</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="breadcrumb-inner">
                    <h2 class="page-title">Finalize your transaction</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact Area -->
<div class="contact-inner-area padding-bottom-90" id="payment-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="content-area">
                    <div class="section-title padding-bottom-25">
                        <h4 class="title">We accept the following payment methods</h4>
                    </div>
                    <div class="single-contact-item-02">
                        <div class="icon">
                            <i class="flaticon-padlock-2"></i>
                        </div>
                        <div class="content">
                            <p class="details">PayPal</p>
                        </div>
                    </div>
                    <div class="single-contact-item-02">
                        <div class="icon">
                            <i class="flaticon-email"></i>
                        </div>
                        <div class="content">
                            <p class="details">Interac E-Transfer</p>
                            <p><em>Canadian customers only</em></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 offset-lg-3">

                <div class="content-area">
                    <div class="single-contact-item-02">
                        <div class="icon">
                            <i class="flaticon-shopping-cart"></i>
                        </div>
                        <div class="content">
                            <p class="details">Your Total:</p>
                            <p class="details" id="total">${{ $total }} <small>CAD</small></p>
                        </div>
                    </div>
                </div>
                <!-- Set up a container element for the button -->
                <div id="paypal-button-container"></div>
                <p class="margin-top-30 textcenter">
                    <em>Only available to Canadian customers</em>
                </p>
                <div class="btn-wrapper">
                    <a href="" class="btn-startup style-01 boxed-btn reverse-color" style="width:100%;">Interac E-Transfer</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Contact Area -->
<div class="contact-inner-area padding-bottom-90" id="success-area" style="display:none;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="content-area textcenter">
                    <div class="section-title padding-bottom-25">
                        <h4 class="title">Thank you! Your payment was recieved</h4>
                    </div>
                    <div class="single-contact-item-02">
                        <div class="content">
                            <p class="details">
                                <i class="flaticon-stars"></i> Your tools will be available to access on Trading View within a few hours.
                            </p>
                            <p class="margin-top-30 textcenter" style="font-size:18px;">
                                <em>Check out the <a href="/videos">video page</a> to learn how to access and use your tools.</em>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')

<script src="{{ url('assets/js/axios.min.js') }}"></script>

<script>
    var purchaseId = {{ $id }}

    paypal.Buttons({

        // Sets up the transaction when a payment button is clicked
        createOrder: function(data, actions) {

            return actions.order.create({
                purchase_units: [{

                    amount: {
                        currency_code: "CAD",
                        value: {{ $total }},
                        invoice_id: {{ $id }}

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

                    $('#payment-area').toggle("fast", function(){
                        $('#success-area').toggle("fast");
                    });
                })
                .catch(function (error) {
                    console.log(error);
                });

            });

        }

    }).render('#paypal-button-container');


</script>

@endsection
