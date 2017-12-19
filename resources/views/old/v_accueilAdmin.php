<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <link rel="stylesheet" type="text/css" href="./css/style.css">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!-- Optional theme -->
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> 
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Accueil admin</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    </head>
    <!-- BODY -->
    <body id="bodyConnexion">
        <div class="container">
            <div class="flex-center align-center">
                <img src="./img/logo-hh.png" style="height: 256px;width: 512px;position: absolute;padding-top:150px;">
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
                                <a href="./">Logout</a>
                            <hr>
                                <form class="form-signin" action="./admin/reporting">
                                    <span id="reauth-email" class="reauth-email"></span>
                                    <p class="input_title">Choix du client</p>
                                    <select class="custom-select mb-2 mr-sm-2 mb-sm-0 login_box" id="inputClient">
                                        <option selected>Choix du client</option>
                                        <option value="1">Client 1</option>
                                        <option value="2">Client 2</option>
                                        <option value="3">Client 3</option>
                                    </select>
                                    <button class="btn btn-lg btn-primary" type="submit" style="padding-top: 10px">Valider</button>
                                    </div>
                                </form><!-- /form -->
                            </div><!-- /card-container -->
                        </div><!-- /container -->                 
                </div>
            </div>
        </div>
    </body>
</html>
