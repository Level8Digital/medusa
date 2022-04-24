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

      <form class="row gap-y">

        <div class="col-lg-8">

          <table class="table table-cart">
            <tbody valign="middle">
              <tr>
                <td>
                  <a href="item.html">
                    <img class="rounded" src="../assets/img/shop/10.jpg" alt="...">
                  </a>
                </td>

                <td style="width: auto">
                  <h5>Olympus Suite</h5>
                  <p>{{ session('access') }}</p>
                </td>

                <td>
                  <h4 class="price">${{ session('price') }} <small>CAD</small></h4>
                </td>
              </tr>
            </tbody>
          </table>


          <hr class="my-8 mt-30 mb-30 dark-hr">

          <h5 class="mb-6">Your Details</h5>

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
                </label>
                @error('agree_terms')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-12 mt-20">
                <div class="form-group">
                    <label for="math_question">Verify Your Humanity</label>
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
                <p>${{ session('price') }} <small>CAD</small></p>
                <p>${{ session('tax') }} <small>CAD</small></p>
              </div>
            </div>

            <hr>

            <div class="flexbox">
              <div>
                <p><strong>Total:</strong></p>
              </div>

              <div>
                <p class="fw-600">${{ session('total') }} <small>CAD</small></p>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-12">
              <button class="btn btn-block btn-primary" type="submit">Go to Payment <i class="ti-angle-right fs-9"></i></button>
            </div>
          </div>

        </div>


      </form>



    </div>
  </section>

</main>

@endsection
