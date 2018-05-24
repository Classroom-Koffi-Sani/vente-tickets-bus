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
                                <li>Offre</li> 
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
                <div class = "col-lg-4">
                    <img src="IMAGES/offre.png" alt="operation" class = "img-responsive img-rounded"/>
                </div>
                <div class = "col-lg-4">
                    <img src="IMAGES/offre1.png" alt="operation" class = "img-responsive img-rounded"/>
                </div>
                <div class = "col-lg-4">
                    <img src="IMAGES/offre2.png" alt="operation" class = "img-responsive img-rounded"/>
                </div>
            </div>
        </div>
        <div class = "container contenu">
            <div class = "row contenu">
                <div class = "col-xs-12">
                    <div class = "jumbotron">
                        <p>L'objectif premier de ce site est de mettre en place une application permettant à l'utilisateur de
                         choisir les trajets,verifier la disponibilité des places sur les differentes lignes et de réserver son billet.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class = "container contenu">
            <div class = "row contenu">
                <div class = "col-xs-12">
                        <p>L'objectif premier de ce site est de mettre en place une application permettant à l'utilisateur de
                        choisir les trajets,verifier la disponibilité des places sur les differentes lignes et de réserver son billet.</p>
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

