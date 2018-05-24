<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8"/>
        <link rel = "stylesheet" href = "dist/css/bootstrap.css" />
        <link rel = "stylesheet" href = "style.css" />
        <title>VENTE DE BILLETS EN LIGNE - SOTRAL </title>
    </head>
    <body>
        <div class = "container navigation">
            <div class = "row navigation">
                <div class = "col-lg-12">
                    <header>
                        <div id="titre_principal">
                            <img src="IMAGES/logo.jpg" alt="Logo de Sotral" id="logo" />
                            <h1>Societé SOTRAL</h1>
                        </div>
                            <nav class = "navbar navbar-default" role = "navigation">
                            <ol class = "breadcrumb">
                                <li><a href="index.php">Home</a></li>
                                <li>Contact</li> 
                            </ol>
                            <div class = "navbar-collapse collapse navbar-right"> 
                                <ul class = "nav navbar-nav">
                                    <li><a href="index.php"><span class = "glyphicon glyphicon-home"></span> Accueil</a></li>
                                    <li><a href="offre.php"><span class = "glyphicon glyphicon-certificate"> Offre-Operations</a></li>
                                    <li><a href="contact.php"><span class = "glyphicon glyphicon-inbox"> Contact</a></li>      
                                </ul>
                            </nav>
                    </header>
                    <div id="banniere_image">
                    </div>
                </div>
            </div>
        </div>
        <div class = "container contenu">
            <div class = "row contenu">
                <div class = "col-xs-6">
                    <div class = "jumbotron">
                        <p>L’objectif à terme de la Sotral est de garantir un service de qualité aux populations à prix social.
                        La concrétisation de cet objectif passe par :la poursuite de l’habillage du réseau à travers l’implantation 
                        de poteaux matérialisant les arrêts et la construction d’abribus sur les arrêts de forte fréquentation,
                        l’aménagement des terminus,la poursuite de l’extension du réseau (ouverture des lignes transversales, 
                        et des lignes de dessertes fines en périphérie, puis la création de nouvelles lignes radiales),la formation 
                        du personnel,la poursuite de la sécurisation de l’ensemble du réseau.</p>
                    </div>
                </div>
                <div class = "col-xs-6">
                    <img src="IMAGES/vision.png" alt="vision" class = "img-responsive img-rounded"/>
                </div>
            </div>
        </div>  
        <div class = "container image">
            <div class = "row image">
                <div class = "col-lg-12">
                 <img src="IMAGES/plan2.png" alt="Le trafic" class = "img-responsive img-rounded"/>   
                </div>
            </div>
        </div>
        <div class = "container contenu">
            <div class = "row contenu">
                <div class = "col-lg-3"> 
                        <h3>À PROPOS</h3>
                        <p><strong>La Société des Transports de Lomé (Sotral) est la seule entreprise de transport collectif urbain qui
                        assure un service régulier de transport urbain par autobus dans la capitale togolaise.</strong></p>

                 </div>
                 <div class = "col-lg-3"> 
                        <h3>NOUS RETROUVER</h3>
                        <p><strong>Adresse : Av. des Calais, Place des Martyrs, Bâtiment N°876 B.P. : 8960 Lomé – Togo.
                        Tél : (+228) 22 20 39 38</br>Cel : (+228) 93 88 81 00</br>(+228) 93 88 81 66</strong><p>
                </div>
                 <div class = "col-lg-3"> 
                    <h3>HEURES D’OUVERTURE</h3>
                        <p><strong>Du lundi au vendredi</br>MATIN :  07H30 – 12H30</br>
                        APRES-MIDI :  14H30 – 17H30</strong></p>
                 </div>
                 <div class = "col-lg-3"> 
                    <h3>NOUS ECRIRE</h3>
                        <p><strong>Mail: sotrallome@yahoo.fr / sotral@sotraltogo.com</br>Mail  commercial : commercial@sotraltogo.com</br>
                        SiteWeb : sotraltogo.com</strong></p>
                 </div>
            </div>
        </div>
        <div class = "container contenu">
            <div class = "row contenu">
                <div class = "col-xs-12">
                    <div class = "jumbotron">
                        <p>L'objectif premier de ce site est de mettre en place une application permettant à l'utilisateur de choisir les trajets,verifier
                            la disponibilité des places sur les differentes lignes et de réserver son billet.</p>
                        </div>
                </div>
            </div>
        </div>
        <div class = "text-center">
            <ul class = "pagination">
                <li class = "active"><a href="contact.php">&laquo;</a></li>
                <li class = "active"><a href="index.php">1</a></li>
                <li class = "active"><a href="offre.php">2</a></li>
                <li class = "active"><a href="contact.php">3</a></li>
                <li class = "active"><a href="index.php">&raquo;</a></li>
             </ul>
        </div>   
        <div class = "container footer">
            <div class = "row footer">
                <div class = "col-lg-12">    
                    <?php include ("footer.php"); ?>
                </div>
            </div>
        </div>
        <script type = "text/javascript" src = "dist/js/bootstrap.js"> </script>
        <script type = "text/javascript" src = "dist/js/bootstrap.min.js"> </script>
        <script type = "text/javascript" src = "dist/js/jquery-compressed.js"> </script>
    </body>
</html>

