<?php
    require_once 'includes/connection.php';
    require 'includes/publicFunctions.php';
?>
<html>

<head>
    <meta charset="UTF-8">
    <title>Contact - Une année de voyages</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
<?php
    publicHeader();
?>

    <section class="contact">
        <div class="header">
            <div class="container">
                <h1 class="title">Nous contacter</h1>
                <div class="decorative-bar"></div>
            </div>
        </div>
        <div class="localisation">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 d-flex justify-content-center">
                        <h2 class="title">Une question ?</h2>
                    </div>
                    <div class="col-md-6">
                        <h3>Adresse :</h3>
                        <ul>
                            <li>32, Rue des Peupliers</li>
                            <li>92100 Boulogne</li>
                        </ul>
                        <h3>Horaires d'ouverture :</h3>
                        <ul>
                            <li>Du Lundi au Vendredi de 10h à 18h</li>
                            <li>Le Samedi, le Dimanche et les jours fériées de 10h à 18h</li>
                        </ul>
                        <h3>Secrétariat :</h3>
                        <ul>
                            <li>Caroline M’zali</li>
                            <li><a href="mailto:caroline.mzali@uneanneedevoyages.com">caroline.mzali@uneanneedevoyages.com <i class="fas fa-external-link-alt"></i></a></li>
                        </ul>
                        <h3>Rédaction :</h3>
                        <ul>
                            <li>Judith Lossmann</li>
                            <li><a href="mailto:judith.lossmann@uneanneedevoyages.com">judith.lossmann@uneanneedevoyages.com <i class="fas fa-external-link-alt"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 googlemaps">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2626.300478018203!2d2.253422615945295!3d48.833406979285094!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e67a947d5880eb%3A0xc7063297d00ce3cf!2s32+Rue+des+Peupliers%2C+92100+Boulogne-Billancourt!5e0!3m2!1sfr!2sfr!4v1527095514780" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                    <div class="contacts col-md-12">
                        <div class="row justify-content-between">
                            <div class="col-md-5 contact-fb">
                                <div class="left">
                                    <i class="fab fa-facebook-messenger"></i>
                                </div>
                                <div class="right">
                                    <ul>
                                        <li class="h3">Contactez-nous sur Facebook</li><br>
                                        <li><a href="http://facebook.fr">Via Facebook Messenger <i class="fas fa-external-link-alt"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-5 contact-phone">
                                <div class="left">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div class="right">
                                    <ul>
                                        <li class="h3">Contactez-nous par téléphone</li><br>
                                        <li><a href="tel:+33142354657">+33 1 42 35 46 57</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="form-contact">
            <div class="container">
                <form action="" method="post">
                    Je suis un

                    <select id="select">
                        <option value="annonceur" selected>annonceur</option> 
                        <option value="journaliste">journaliste</option>
                        <option value="partenaire">partenaire</option>
                        <option value="lecteur">lecteur</option>
                        <option value="officedetourisme">office de tourisme</option>
                    </select>
                    .<br>
                    Je veux vous briefer ou peut-être juste vous rencontrer.
                    <br>

                    <button type="submit" class="btn btn-primary btn-lg">Envoyer un message</button>
                </form>
            </div>
        </div>
        
        <div class="help-banner">
            <div class="container">
                <div class="help-inside">
                    <div class="left">
                        <img src="assets/img/icon-help.png" alt="icon help">
                        <div>
                            <h3 class="title">Besoin d'aide ?</h3>
                            <h5 class="subtitle">Trouvez vos réponses dans le Centre d'aide en ligne ou contactez-nous.</h5>
                        </div>
                    </div>
                    <div class="right">
                        <a href="#" class="btn btn-light btn-lg">Consulter le centre d'aide →</a>
                    </div>
                </div>                
            </div>
        </div>
    </section>

<?php
    publicFooter($pdo);
?>


    <script src="assets/js/jquery-3.2.1.slim.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>
