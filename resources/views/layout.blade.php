<?php
/*
===============================
ebm ~ layout.blade.php
===============================
*/

?>
<!DOCTYPE html>
  <html lang="{{ config('app.locale') }}">

      <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <title>{{ trans('front/site.title') }}</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">


        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <meta name="application-name"	content="e-BM" />
        <meta name="description"		content="Business Model en ligne" />
        <meta name="keywords" 			content="HTML5 CSS3 JS JQUERY ANGULAR PHP7 MYSQL PDO ORM AJAX MVC POO " />
        <meta name="author" 			content="Vivien Maillard - Georges-Alexis Kimbidima - JP Rakotoarison"/>

        <!-- Lien css et font police de caracteres specifique -->
        <link rel="stylesheet" href="css/app.css" />
        <link rel="stylesheet" href="css/back.css" />
        <link rel="stylesheet" href="css/front.css" />
          <!-- Déclaration des balises <meta> et <link> : -->

        @yield('head')

    </head>

  <body>

    <header>


        <div id="flags" class="text-center"></div>
        <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                </div>
                <div class="collapse navbar-collapse">

                </div>
            </div>
        </nav>
        @yield('header')
    </header>

    <main class="container">
        @if(session()->has('ok'))
            @include('partials/error', ['type' => 'success', 'message' => session('ok')])
        @endif
        @if(isset($info))
            @include('partials/error', ['type' => 'info', 'message' => $info])
        @endif
        @yield('main')
    </main>

    <footer>
          @yield('footer')
          <p class="text-center"><small>Copyright &copy; e-BM</small></p>
    </footer>
    <!-- ========== ici Scripts JS ================  -->
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="'https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script>
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    $(function() {
      $('#logout').click(function(e) {
        e.preventDefault();
        $('#logout-form').submit();
      })
    });
    </script>

    @yield('scripts')

  </body>
</html>
