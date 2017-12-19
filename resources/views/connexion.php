<!doctype html>
<head>
    <?php include 'library.php'; ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Connexion</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
</head>
<!-- BODY -->
<body id="bodyConnexion">
    <div class="container text-center" id="formContainer">
        <div class="flex-center align-top">
            <img id="logoConnexion" src="./img/logo-hh.png" style="padding-left:  30px;">
        </div>
        <!-- Title -->
        <div class="flex-center">
            <div class="content" id="connexionForm">
                <div class="container">
                    <div class="card card-container">
                        <div class="title m-b-md align-middle text-center" id="titreConnexion">
                            <p><h1>Reporting</h1></p>
                        </div>
                        <hr>
                        <form class="form-signin" action="./">
                            <span id="reauth-email" class="reauth-email"></span>
                            <p class="input_title">Email</p>
                            <input type="text" id="inputEmail" class="login_box" placeholder="user@hissez-haut.com" required autofocus>
                            <p class="input_title">Password</p>
                            <input type="password" id="inputPassword" class="login_box" placeholder="******" required>
                            <p><a href="./">Mot de passe oublié ?</a></p>
                            <button class="btn btn-lg btn-primary" type="submit">Login</button>
                        </form><!-- /form -->
                    </div>
                </div><!-- /card-container -->
            </div><!-- /container -->                 
        </div>
    </div>
</div>
</body>
</html>
