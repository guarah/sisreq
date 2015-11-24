<!DOCTYPE html>
<html>
<head>
    <meta name="_token" content="{{ csrf_token() }}">
    <title>..::SISREQ::..</title>
    <link href="//fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet">
    <script src="{{ URL::asset('assets/js/jQuery/jquery-1.11.3.min.js') }}"></script>
</head>
<body>

<section class="main">

    <header class="header">
    </header>

    <section class="content">
        @yield('content')
    </section>

    <footer class="footer">
        <p>Desenvolvido por mim</p>
    </footer>

</section>

<script src="{{ URL::asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>

<script>
    $.ajaxPrefilter(function(options, originalOptions, jqXHR) {
        var token;
        if (!options.crossDomain) {
            token = $('meta[name="_token"]').attr('content');
            if (token) {
                return jqXHR.setRequestHeader('X-CSRF-Token', token);
            }
        }
    });
</script>

</body>
</html>