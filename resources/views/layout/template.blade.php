<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="_token" content="{{  csrf_token() }}">
    <title>..:: SISREQ ::..</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link href="../../css/style.css" rel="stylesheet">
    <script src="../../assets/js/jQuery/jquery-1.11.3.min.js"></script>
</head>
<body>
<div class="container">
    @yield('content')
</div>

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