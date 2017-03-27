<?php
Use App\helpers;
$storage_path = storage_path();
echo $storage_path;
 ?>

<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>{{ trans('front/site.title') }}</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        @yield('head')

        <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/back.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/front.css') }}" />

    </head>

  <body>

    <header>

        <div class="brand">{{ trans('front/site.title') }}</div>
        <div class="address-bar">{{ trans('front/site.sub-title') }}</div>
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
                    <ul class="nav navbar-nav">
                        <li {!! classActivePath('/') !!}>
                            {!! link_to('/', trans('front/site.home')) !!}
                        </li>
                        @if(session('statut') == 'visitor' || session('statut') == 'user')
                            <li {!! classActivePath('contact/create') !!}>
                                {!! link_to('contact/create', trans('front/site.contact')) !!}
                            </li>
                        @endif
                        <li {!! classActiveSegment(1, ['articles', 'blog']) !!}>
                            {!! link_to('articles', trans('front/site.blog')) !!}
                        </li>
                        @if(Request::is('auth/register'))
                            <li class="active">
                                {!! link_to('auth/register', trans('front/site.register')) !!}
                            </li>
                        @elseif(Request::is('password/email'))
                            <li class="active">
                                {!! link_to('password/email', trans('front/site.forget-password')) !!}
                            </li>
                        @else
                            @if(session('statut') == 'visitor')
                                <li {!! classActivePath('login') !!}>
                                    {!! link_to('login', trans('front/site.connection')) !!}
                                </li>
                            @else
                                @if(session('statut') == 'admin')
                                    <li>
                                        {!! link_to_route('admin', trans('front/site.administration')) !!}
                                    </li>
                                @elseif(session('statut') == 'redac')
                                    <li>
                                        {!! link_to('blog', trans('front/site.redaction')) !!}
                                    </li>
                                @endif
                                <li>
                                    {!! link_to('/logout', trans('front/logout'), ['id' => "logout"]) !!}
                                    {!! Form::open(['url' => '/logout', 'id' => 'logout-form']) !!}{!! Form::close() !!}
                                </li>
                            @endif
                        @endif

                    </ul>
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
        <p class="text-center"><small>Copyright &copy; Momo</small></p>
    </footer>


    <script
    src="https://code.jquery.com/jquery-3.1.1.js"
    integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="
    crossorigin="anonymous"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script>

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
