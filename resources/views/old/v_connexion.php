<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <link rel="stylesheet" type="text/css" href="./css/connexion.css">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!-- Optional theme -->
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> 
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Connexion</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    </head>
    <!-- BODY -->
    <body id="bodyConnexion">
        <div class="container">
            <div class="flex-center align-top">
                <img src="./img/logo-hh.png" style="height: 30%; position: absolute;padding-top:150px;">
            </div>
                <!-- Title -->
            <div class="flex-center" style="padding-top: 150px;">
                <div class="content" id="connexionForm">

                    <script src="https://use.typekit.net/ayg4pcz.js"></script>
                        <script>try{Typekit.load({ async: true });}catch(e){}</script>
                        <div class="container">
                            <div class="card card-container">
                                <div class="title m-b-md align-middle flex-center" id="titreConnexion">
                                    <p><h1>Reporting</h1></p>
                                </div>
                            <hr>
                                <form class="form-signin" action="./admin">
                                    <span id="reauth-email" class="reauth-email"></span>
                                    <p class="input_title">Email</p>
                                    <input type="text" id="inputEmail" class="login_box" placeholder="user@hissez-haut.com" required autofocus>
                                    <p class="input_title">Password</p>
                                    <input type="password" id="inputPassword" class="login_box" placeholder="******" required>
                                    <p><a href="./">Mot de passe oublié ?</a></p>
                                    <button class="btn btn-lg btn-primary" type="submit">Login</button>
                                    </div>
                                </form><!-- /form -->
                            </div><!-- /card-container -->
                        </div><!-- /container -->                 
                </div>
            </div>
        </div>
    </body>
</html>
