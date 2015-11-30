@extends('layout.mainLayout')
@section('content')

    <style>
        html, body {
            height: 100%;
        }

        .title, h2 {
            margin: auto;
            padding: 0;
            font-weight: 100;
            font-family: 'Lato';
        }

        .container {
            text-align: center;
            display: table-cell;
            vertical-align: middle;
        }

        .content {
            text-align: center;
            display: inline-block;
        }

        .title {
            font-size: 96px;
        }
    </style>


    <div class="container">
        <div class="content">
            <div class="title">SISREQ - HOME</div>
            <h2>Sistema para gerenciamento de requerimentos</h2>
        </div>

    </div>


@endsection

