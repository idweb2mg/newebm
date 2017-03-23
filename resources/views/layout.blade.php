<?php
/*
===============================
ebm ~ layout.blade.php
===============================
*/




if (!function_exists('classActivePath')) {
    function classActivePath($path)
    {
        return Request::is($path) ? ' class="active"' : '';
    }
} //if (!function_exists('classActivePath'))


if (!function_exists('classActiveSegment')) {
    function classActiveSegment($segment, $value)
    {
        if(!is_array($value)) {
            return Request::segment($segment) == $value ? ' class="active"' : '';
        }
        foreach ($value as $v) {
            if(Request::segment($segment) == $v) return ' class="active"';
        }
        return '';
    }
} // if (!function_exists('classActiveSegment'))


?>
 <html lang="{{ config('app.locale') }}">

      <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <title>e-BM</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">


        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <meta name="application-name" content="e-BM" />
        <meta name="description"    content="Business Model en ligne" />
        <meta name="keywords"       content="HTML5 CSS3 JS JQUERY ANGULAR PHP7 MYSQL PDO ORM AJAX MVC POO LARAVEL" />
        <meta name="author"       content="Vivien Maillard - Georges-Alexis Kimbidima - JP Rakotoarison"/>

        <!-- Lien css et font police de caracteres specifique -->

        <link rel="stylesheet" href="asset/css/app.css"/>
        <link rel="stylesheet" href="asset/css/back.css"/>
        <link rel="stylesheet" href="asset/css/front.css" />


        <!-- == Eventuellement d'autres spacificités à mettre ci-après dans le yield ==   -->
        @yield('head')
  </head>

  <body>
  
  <header>
    <div class="container">

      <div class="row">
        <div class="col-md-7 col-md-offset-1">
          <h1>
            <a href="#" title="e-bm">e-BM</a>
            <br />
            <small>Modèle économique en ligne</small>
          </h1>
        </div> <!-- class="col-md-7 col-md-offset-1"  -->

      </div> <!-- class="row"  -->

            <div class="brand">{{ trans('front/site.title') }}</div>
            <div class="address-bar">{{ trans('front/site.sub-title') }}</div>
            <div id="flags" class="text-center"></div>      

      <div class="row">
        <div class="col-md-10 col-md-offset-1">

                    <nav class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Accueil</span>
                            <span class="icon-bar">Projet</span>
                            <span class="icon-bar">Business Model</span>
                        </button>
                        <a class="navbar-brand" href="index.html">{{ trans('front/site.title') }}</a>
                    </nav> <!--  class="navbar-header" -->


        </div> <!-- class="col-md-10 col-md-offset-1">  -->


      </div> <!-- class="row"  -->

            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li {!! classActivePath('/') !!}>
                        {!! Html::link('/', 'front/site.home') !!}
                    </li>
                    @if(session('statut') == 'visitor' || session('statut') == 'mem')
                        <li {!! classActivePath('contact/create') !!}>
                            {!! Html::link('contact/create', 'front/site.contact') !!}
                        </li>
                    @endif
                    <li {!! classActiveSegment(1, ['articles', 'blog']) !!}>
                        {!! Html::link('articles', 'front/site.blog') !!}
                    </li>
                    @if(Request::is('auth/register'))
                        <li class="active">
                            {!! Html::link('auth/register', 'front/site.register') !!}
                        </li>
                    @elseif(Request::is('password/email'))
                        <li class="active">
                            {!! Html::link('password/email', 'front/site.forget-password') !!}
                        </li>
                    @else
                        @if(session('statut') == 'visitor')
                            <li {!! classActivePath('login') !!} >
                                {!! Html::link('login', 'front/site.connection') !!}
                            </li>
                        @else
                            @if(session('statut') == 'admin')
                                <li>
                                    {!! Html::link('admin', 'front/site.administration') !!}
                                </li>
                            @elseif(session('statut') == 'mod')
                                <li>
                                    {!! Html::link('blog', 'front/site.moderation') !!}
                                </li>
                            @elseif(session('statut') == 'mem')
                                <li>
                                    {!! Html::link('blog', 'front/site.projet') !!}
                                </li>
                                @endif
                                <li>
                                    {!! Html::link('/logout', 'front/site.logout', ['id' => "logout"]) !!}
                                    {!! Form::open(['url' => '/logout', 'id' => 'logout-form']) !!}{!! Form::close() !!}
                                </li>
                            @endif
                    @endif
  
                </ul>

            </div><!-- class="collapse navbar-collapse"  -->


    </div> <!-- class="container"  -->


</header>
    <!-- == Eventuellement d'autres spacificités à mettre ci-après dans le yield ==   -->
        @yield('header')

  </header>


  <section>
    <div class="container">
      <div class="row">
        <div class="col-md-7 col-md-offset-1">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h2>Accueil</h2>
              <img src="bootstrap/img/FRMATRICE.jpg" width="" height="" title="Un canvas du BM" alt="Business Model" />
              
            </div>

          </div>
        </div>

      </div>

    </div>

  </section>
  
  <footer>
        <!-- == Eventuellement d'autres spécificités à mettre ci-après dans le yield ==   -->
        @yield('footer')

        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <a href="#" title="alt">Informations</a> - 
                    <a href="#" title="alt">Mentions légales</a> - 
                    <a href="#" title="alt">CGU  Conditions Générales d'Utilisation</a> - 
                    <a href="#" title="alt">Contact</a> 
                    <br />
                    <p class="text-center"><small>Copyright &copy; 2017 e-BM. Tous droits réservés</small></p>
                </div>  
            </div><!-- class="row"   -->
         </div> <!-- class="container"   -->

  </footer>

  </body>

</html>