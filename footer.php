<footer class = "text-center">
    <p><h3>&copyCOPYRIGHT 2018 GROUPE-14-ITR2</h3></p>
<?php 
$jour = date('d');
$mois = date('m');
$annee = date('Y');
$heure = date('H');
$minute = date('i');
echo 'Nous sommes le ' . $jour . '/' . $mois . '/' . $annee . ' et il est ' . $heure. ' h ' . $minute;
?>
    <ul class = "list-inline">
        <li><a href=#><span class = "glyphicon glyphicon-chevron-down"></span> Mentions génerales</a></li>
        <li><a href=#><span class = "glyphicon glyphicon-thumbs-up"></span> Partenaires</a></li>
        <li><a href=#><span class = "glyphicon glyphicon-copyright-mark"></span> Conditions génerales</a></li>
        <li><a href=#><span class = "glyphicon glyphicon-euro"></span> Paiements en ligne</a></li>      
    </ul>
</footer>