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
            <!-- <div class="col-lg-3">
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
            </div> -->
            <div class="col-lg-8 offset-lg-3">
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
                    <form action="/proceed-to-payment" id="buy_form" class="contact-page-form" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <div class="row">
                            <div class="col-md-12">
                                @if(Session::has('error'))
                                <div class="alert alert-danger">
                                    {{Session::get('error')}}
                                </div>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Email<span>*</span></label>
                                    <input type="text" name="email" placeholder="Email Address" class="form-control" value="{{ old('email') }}">
                                    @error('email')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Confirm Email<span>*</span></label>
                                    <input type="text" name="email_confirmation" placeholder="Confirm Email" class="form-control" value="{{ old('email_confirmed') }}">
                                    @error('email_confirmed')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="username">Trading View Username <span>*</span></label>
                                    <input type="text" name="username" placeholder="Trading View Username" class="form-control" value="{{ old('username') }}">
                                    @error('username')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="username_confirmed">Confirm Trading View<span>*</span></label>
                                    <input type="text" name="username_confirmation" placeholder="Confirm Username" class="form-control" value="{{ old('username_confirmed') }}">
                                    @error('username_confirmed')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-control">
                                        <input type="checkbox" name="tool[]" id="bro" value="bro"/>
                                        Bar Range Oscillator (BRO) -- $15 <small>CAD</small>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-control">
                                        <input type="checkbox" name="tool[]" id="pao" value="pao"/>
                                        Price Action Oscillator (PAO) -- $35 <small>CAD</small>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-control">
                                        <input type="checkbox" name="tool[]" id="nas" value="mnas"/>
                                        M-NAS -- $50 <small>CAD</small>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-control">
                                        <input type="checkbox" name="tool[]" id="spy" value="mspy"/>
                                        M-SPY -- $50 <small>CAD</small>
                                    </label>
                                </div>
                                @error('tool')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-12 margin-bottom-20 margin-top-20">
                                <h4>Total: $<span id="buy-total"></span> <small>CAD</small></h4>
                            </div>
                            <div class="content-area">
                                <div class="single-contact-item-02">
                                    <div class="icon">
                                        <i class="flaticon-privacy"></i>
                                    </div>
                                    <div class="content">
                                        <p class="details">Disclaimer & Terms of Use</p>
                                    </div>
                                </div>
                            </div>
                            <div class="content-area">
                                <p>

                                </p>
                            </div>

                            <div class="col-md-12">
                                <label class="form-control margin-bottom-20">
                                    <input type="checkbox" name="confirm_tv" />
                                    I realize I need a Trading View account to use these tools
                                </label>
                                @error('confirm_tv')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-12">
                                <label class="form-control margin-bottom-20">
                                    <input type="checkbox" name="agree_terms" />
                                    I have read, understood, and agree to the Disclaimer & Terms of Use
                                </label>
                                @error('agree_terms')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-12">
                                <div class="form-group margin-top-20">
                                    <label for="math_question">Verify Your Humanity<span>*</span></label>
                                    <input type="text" name="math_question" class="form-control" placeholder="{{ session('a12Ty9UkJ1!$%125Hgye') }}">
                                    @error('math_question')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group ">
                                    <input type="submit" value="Proceed to Payment" class="submit-btn">
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
