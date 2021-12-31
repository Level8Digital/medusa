@extends('layouts.layout1')

@section('title', 'Terms of Use')

@section('styles')

@endsection

@section('content')

<div class="breadcrumb-area  margin-bottom-120">
    <div class="shape"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="breadcrumb-inner desktop-center">
                    <h2 class="page-title style-01">Oops, there was a problem</h2>

                    <p>
                        {{ $msg ?? 'Appologies, please try again later.' }}
                    </p>

                    <!-- <form class="notify-form" action="index.html">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your email address">
                        </div>
                        <button type="submit" class="submit-btn">Notify Me</button>
                    </form> -->
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
