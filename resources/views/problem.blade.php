<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <title>Medusa Money — Oops, problem</title>

    <!-- Styles -->
    <link href="{{ url('assets/css/page.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/style.css') }}" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="{{ url('assets/img/apple-touch-icon.png') }}">
    <link rel="icon" href="{{ url('assets/img/favicon.png') }}">
  </head>

  <body class="layout-centered bg-gray">


    <!-- Main Content -->
    <main class="main-content text-center pb-lg-8">
      <div class="container">

        <h1 class="display-1 text-muted mb-7">Oops, there was a problem</h1>
        <p class="lead">{{ $msg ?? 'Appologies, please try again later' }}.</p>
        <br>
        <a class="btn btn-secondary w-150" href="/">Return Home</a>

      </div>
    </main><!-- /.main-content -->


    <!-- Scripts -->
    <script src="{{ url('assets/js/page.min.js') }}"></script>
    <script src="{{ url('assets/js/script.js') }}"></script>

  </body>
</html>
