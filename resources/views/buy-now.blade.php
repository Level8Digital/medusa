@extends('layouts.layout1')

@section('title', 'Buy Trading Tools')

@section('styles')

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
                        <p>Buy Now</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="breadcrumb-inner">
                    <h2 class="page-title">The more you buy, the larger the discount</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="contact-inner-area padding-bottom-90">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="content-area">
                    <div class="single-contact-item-02">
                        <div class="icon">
                            <i class="flaticon-privacy"></i>
                        </div>
                        <div class="content">
                            <p class="details">Terms of Use</p>
                        </div>
                    </div>
                    <p>
                        Inspiration comes in many ways and you like to save everything from Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        Inspiration comes in many ways and you like to save everything from Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum,
                        Inspiration comes in many ways and you like to save everything from Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>
            </div>
            <div class="col-lg-6 offset-lg-2">
                <div class="content-area">
                    <div class="single-contact-item-02">
                        <div class="icon">
                            <i class="flaticon-download"></i>
                        </div>
                        <div class="content">
                            <p class="details">Select your tools</p>
                        </div>
                    </div>
                </div>
                <div class="content-area">
                    <p>
                        Purchase two tools and get 10% off, three and get 20% off, four and get 30% off.
                    </p>
                </div>
                <div class="contact-form style-01 margin-top-30">
                    <form action="contact.php" id="contact_page_form" class="contact-page-form" method="post">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-control">
                                        <input type="checkbox" name="checkbox" id="bro"/>
                                        Bar Range Oscillator (BRO) -- $15 <small>CAD</small>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label class="form-control">
                                            <input type="checkbox" name="checkbox" id="pao"/>
                                            Price Action Oscillator (PAO) -- $35 <small>CAD</small>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label class="form-control">
                                            <input type="checkbox" name="checkbox" id="nas"/>
                                            M-NAS -- $50 <small>CAD</small>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label class="form-control">
                                            <input type="checkbox" name="checkbox" id="spy"/>
                                            M-SPY -- $50 <small>CAD</small>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <h4>Total: $<span id="buy-total"></span> <small>CAD</small></h4>
                            </div>
                            <div class="col-md-12">
                                <label class="form-control margin-top-20 margin-bottom-20">
                                    <input type="checkbox" name="checkbox" />
                                    I have read, understood, and agree to the terms of use
                                </label>
                                <div class="form-group ">
                                    <input type="submit" value="Go To Payment" class="submit-btn">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>

    $(document).ready(function(){
        var total = 0
        var discounted = 0
        var checked = 0

        function checkDiscount(selected, price){
            if (selected == 2)
                price /= 1.1;
            if (selected == 3)
                price /= 1.2;
            if (selected == 4)
                price /= 1.3;

            return price;
        }

        /* >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
        >>> DEFAULT FUNCTIONS (If page refreshed on something checked)
        <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< */
        if($("#bro").prop("checked") == true){
            checked += 1;
            total += 15;
            discounted = checkDiscount(checked, total)
            console.log(discounted);
        }

        if($("#pao").prop("checked") == true){
            checked += 1;
            total += 35;
            discounted = checkDiscount(checked, total)
            console.log(discounted);
        }

        if($("#nas").prop("checked") == true){
            checked += 1;
            total += 50;
            discounted = checkDiscount(checked, total)
            console.log(discounted);
        }

        if($("#spy").prop("checked") == true){
            checked += 1;
            total += 50;
            discounted = checkDiscount(checked, total)
            console.log(discounted);
        }

        $('#buy-total').html(Math.round(discounted));

        /* >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
        >>> CLICK FUNCTIONS
        <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< */
        $("#bro").click(function(){
            if($("#bro").prop("checked") == true){
                checked += 1;
                total += 15;
                discounted = checkDiscount(checked, total);
                $('#buy-total').html(Math.round(discounted));
                console.log(discounted);
            }
            else if($("#bro").prop("checked") == false){
                checked -= 1;
                total -= 15;
                discounted = checkDiscount(checked, total);
                $('#buy-total').html(Math.round(discounted));
                console.log(discounted);
            }
        });

        $("#pao").click(function(){
            if($("#pao").prop("checked") == true){
                checked += 1;
                total += 35;
                discounted = checkDiscount(checked, total);
                $('#buy-total').html(Math.round(discounted));
                console.log(discounted);
            }
            else if($("#pao").prop("checked") == false){
                checked -= 1;
                total -= 35;
                discounted = checkDiscount(checked, total);
                $('#buy-total').html(Math.round(discounted));
                console.log(discounted);
            }
        });

        $("#nas").click(function(){
            if($("#nas").prop("checked") == true){
                checked += 1;
                total += 50;
                discounted = checkDiscount(checked, total);
                $('#buy-total').html(Math.round(discounted));
                console.log(discounted);
            }
            else if($("#nas").prop("checked") == false){
                checked -= 1;
                total -= 50;
                discounted = checkDiscount(checked, total);
                $('#buy-total').html(Math.round(discounted));
                console.log(discounted);
            }
        });

        $("#spy").click(function(){
            if($("#spy").prop("checked") == true){
                checked += 1;
                total += 50;
                discounted = checkDiscount(checked, total);
                $('#buy-total').html(Math.round(discounted));
                console.log(discounted);
            }
            else if($("#spy").prop("checked") == false){
                checked -= 1;
                total -= 50;
                discounted = checkDiscount(checked, total);
                $('#buy-total').html(Math.round(discounted));
                console.log(discounted);
            }
        });
    });



</script>
@endsection
