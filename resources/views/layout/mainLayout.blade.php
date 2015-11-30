<!DOCTYPE html>
<html>
<head>
    <meta name="_token" content="{{ csrf_token() }}">
    <title>..::SISREQ::..</title>
    <link href="//fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet">
    <script src="{{ URL::asset('assets/js/jQuery/jquery-1.11.3.min.js') }}"></script>
</head>
<body>

<section class="main">

    <header class="header">
        <a href="{{ url('/') }}" class="btn btn-success">HOME</a>
        <a href="{{ url('Requerimento') }}" class="btn btn-success">REQUERIMENTOS</a>

        <div class="logout">
            <span id="#user-label">Usuario: {{ \Auth::user()->name }}</span>
            <a href="{{ url('/auth/logout') }}" class="btn btn-success">SAIR</a>
        </div>

    </header>

    <section class="content">
        @yield('content')
    </section>

    <footer class="footer">

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