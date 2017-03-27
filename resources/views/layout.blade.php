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

        <title>e-BM / @yield('title')</title>
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
        <meta name="keywords" 			content="HTML5 CSS3 JS JQUERY PHP7 MYSQL ORM AJAX MVC LARAVEL " />
        <meta name="author" 			content="Vivien Maillard - Georges-Alexis Kimbidima - JP Rakotoarison"/>

        <!-- Lien css et font police de caracteres specifique dans public	-->
	        <link rel="stylesheet" href="{{ asset('css/back.css') }}" />
	        <link rel="stylesheet" href="{{ asset('css/front.css') }}" />	
			<link rel="stylesheet" href="{{ asset('css/app.css') }}" />
			<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" >
		

		<!-- Gérer mon style -->
		<link rel="stylesheet" href="{{ asset('mycss/ebm.css') }}" >
		<link rel="stylesheet" href="{{ asset('mycss/font-awesome.min.css') }}" >
		<link rel="stylesheet" href="{{ asset('mycss/normalize.css') }}" >
		<link rel="stylesheet" href="{{ asset('mycss/matrice.css') }}" >




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
                      <a class="navbar-brand" href="index.html">{{ trans('front/site.title') }}</a>

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
          <a href="#" title="alt">Informations</a> -
          <a href="#" title="alt">Mentions légales</a> -
          <a href="#" title="alt">CGU  Conditions Générales d'Utilisation</a> -
          <a href="#" title="alt">Contact</a>
          <br />
          <p class="text-center"><small>Copyright &copy; 2017 e-BM. Tous droits réservés</small></p>

    </footer>
    <!-- ========== ici Scripts JS ================  -->
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script
      src="https://code.jquery.com/jquery-3.1.1.js"
      integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="
      crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script>
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')
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
