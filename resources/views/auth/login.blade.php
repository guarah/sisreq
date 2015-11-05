<!DOCTYPE html>
<html>
    <head>
        <link href="../css/style.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    </head>
    <body id="login-body">
        <section class="main">
            <form class="login-form" method="POST" action="/auth/login">
                {!! csrf_field() !!}

                <h2 class="form-title">Login</h2>
                <section class="submit-data">
                    <div>
                        Email
                        <input style="margin-left: 10px"class="txt" type="email" name="email" value="{{ old('email') }}">
                    </div>
                    <div>
                        Senha
                        <input class="txt" type="password" name="password" id="password">
                    </div>
                </section>

                <section class="submit-login">
                    <div>
                        <button class="btn custom-btn" type="submit">Entrar</button>
                    </div>
                    <div>
                        <input type="checkbox" name="remember"> Lembrar senha
                    </div>
                </section>

                <section class="forget-password">
                    Esqueceu sua senha? <a href="#" id="forget">Clique aqui</a>
                </section>

                <section class="no-account">
                    <div>Não tem uma conta?</div>
                    <a href="/auth/register">
                        <div class="btn custom-btn custom-btn-new-acc">Criar agora</div>
                    </a>
                </section>

            </form>

        </section>
    </body>

