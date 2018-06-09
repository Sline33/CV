<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Développeur Logiciel Benjamin Martinez</title>
        <!-- Mes Feuilles de Styles -->
        <link rel="stylesheet" href="css/fontawesome.min.css" />
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link rel="stylesheet" href="css/contact.css" />

        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
        <link rel="icon" href="img/favicon.ico" type="image/x-icon">

        <script src='https://www.google.com/recaptcha/api.js'></script>
        
    </head>
    <body>
        <section class="accueil">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 top-ligne">
                        <a  href="index.html"><i class="fas fa-arrow-left arrow-l"></i> Retour au site</a>
                    </div>
                </div>
                <div class="row center-ligne">
                    <h1>Formulaire</h1>
                    <h1>De</h1>
                    <h1>Contact</h1>
                </div>
            </div>
        </section>
        <section class="formulaire">
            <div class="container">
                <div class="row welcome-text">
                    <div class="col-sm-12 offset-md-2 col-md-7">
                        <p>Désireux de relever de nouveaux challenges, je suis prêt à mettre toutes mes compétences à votre service.</p>
                        <p>Merci de me contacter via le formulaire ou par le biais des informations indiqués ci-dessous.</p>
                    </div>
                </div>
            <?php
                if(array_key_exists('errors', $_SESSION)): ?>
                <div class="row">
                    <div id="errors" class="col-sm-12 col-md-6 alert alert-danger errors">
                        <?php echo implode('<br/>', $_SESSION['errors']); ?>
                    </div>
                </div>
            <?php endif; ?>
            <?php
            if(array_key_exists('success', $_SESSION)): ?>
                <div class="row">
                    <div id="success" class="col-sm-12 col-md-6 alert alert-success success">
                        <p>Votre Email a bien été envoyé !</p>
                    </div>
                </div>
            <?php endif; ?>
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <form action="controler.php" method="post">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" placeholder="Votre Nom" value="<?= isset($_SESSION['inputs']['name']) ? $_SESSION['inputs']['name'] : ''; ?>">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input type="text" name="email" class="form-control" placeholder="Votre Email" value="<?= isset($_SESSION['inputs']['email']) ? $_SESSION['inputs']['email'] : ''; ?>">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input type="" name="subject" class="form-control" placeholder="Objet" value="<?= isset($_SESSION['inputs']['subject']) ? $_SESSION['inputs']['subject'] : ''; ?>">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <textarea name="message" class="form-control" placeholder="Votre Message"><?= isset($_SESSION['inputs']['message']) ? $_SESSION['inputs']['message'] : ''; ?></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-6 captcha">
                                    <div class="g-recaptcha" name="captcha" data-sitekey="6Lcc91QUAAAAAAWj_EnKzsysgibXc9LT5uUKt80q"></div>
                                </div>
                                <div class="col-md-12 offset-lg-3 col-lg-2">
                                    <button type="submit" class="btn btn-primary">Envoyer</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="row photo">
                            <img src="img/photo-cv.jpg" alt="">
                        </div>
                        <div class="row info-perso">
                            <div class="col-sm-12">
                                <ul>
                                    <li>+33 6 50 58 27 00</li>
                                    <li>contactez-moi@benjamin-martinez.fr</li>
                                    <li><a target="blank" href="https://www.linkedin.com/in/benjamin-martinez-4b8621158/">Linkedin</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 text-footer"> 
                        <p>&copy; Benjamin Martinez - 2018</p>
                    </div>
                </div>
            </div>
        </footer>
    <!-- Mes scripts -->
    <script src="js/fontawesome-all.js"></script>
    <script src="js/scrollreveal.min.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/app.js"></script>
    </body>
</html>

<?php

unset($_SESSION['inputs']);
unset($_SESSION['errors']);
unset($_SESSION['success']);

?>