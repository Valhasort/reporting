<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <?php include 'library.php'; ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Accueil admin</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
</head>
<body id="bodyConnexion">
    <div class="container flex-center text-center">
        <div class="flex-center align-center">
            <img src="./img/logo-hh.png" id="logoConnexion" style="padding-left:  30px;">
        </div>
        <div class="content" id="connexionForm">
            <div class="container">
                <div class="card card-container">
                    <div class="title m-b-md align-middle flex-center" id="titreConnexion">
                        <p><h1>Reporting</h1></p>
                    </div>
                    <a href="#">Logout</a>
                    <hr>
                    <form class="form-signin" action="./admin/reporting">
                        <span id="reauth-email" class="reauth-email"></span>
                        <select class="custom-select mb-2 mr-sm-2 mb-sm-0 login_box" id="inputClient">
                            <option selected>Choix du client</option>
                            <option value="1">Client 1</option>
                            <option value="2">Client 2</option>
                            <option value="3">Client 3</option>
                        </select>
                        <br>
                        <button class="btn btn-lg btn-primary" type="submit" style="padding-top: 10px">Valider</button>
                    </div>
                </form><!-- /form -->
            </div><!-- /card-container -->          
        </div>
    </div>
</div>
</body>
</html>
