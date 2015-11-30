<!DOCTYPE html>
<html>
    <head>
        <link href="../css/style.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    </head>
    <body id="login-body">
        <section class="main-login">
            <form  class="login-form" method="POST" action="/auth/register">
                {!! csrf_field() !!}

                <div style="margin-right: 25%; text-align: right;">
                    <div>
                        Nome
                        <input class="txt" type="text" name="name" value="{{ old('name') }}">
                    </div>

                    <div>
                        Email
                        <input class="txt" type="email" name="email" value="{{ old('email') }}">
                    </div>

                    <div>
                        Senha
                        <input class="txt" type="password" name="password">
                    </div>

                    <div>
                        Confirmar senha
                        <input class="txt" type="password" name="password_confirmation">
                    </div>
                </div>
                <div style="margin-top: 30px">
                    <button class="btn custom-btn" type="submit">Criar</button>
                </div>
            </form>
        </section>
    </body>