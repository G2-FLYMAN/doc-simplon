<!DOCTYPE html>
<html>
 <head>
    <meta charset="UTF-8"/> <!-- inclus les caracteres speciaux -->
    <link rel="stylesheet" type="text/css" href="css.css"/> <!-- inclus le css -->
	<link href='https://fonts.googleapis.com/css?family=Orbitron:500' rel='stylesheet' type='text/css'> <!-- inclus de nouvelles "google fonts" -->
    <link href='https://fonts.googleapis.com/css?family=Share+Tech+Mono' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="afficher_cacher.js"></script> <!-- inclus le javascript -->
    <title>CV De Solid Snake</title> <!-- ajoute un titre -->
 </head>
 
<body>
<?php
    $DonneesCV = array('Nom' => 'David',
                       'date de naissance' => '1972',
                       'Nationalité' => 'Américain',
                       'Codec' => '141.80',
                       'Profession' => 'soldat d\'élite',
                       'Methode' => 'solitaire',
                       'mission' => 'détruire des engins',
                       'passion' => 'se cacher dans des cartons',
                       'Hobbies' => 'maniement des armes a feu',
);
    foreach($DonneesCV as $cle=>$valeur){
    echo $cle.':'.$valeur.'<br>';
}
?>

<div id="texte" class="texte"> <!-- bouton qui affiche/masque la page -->
<header class="b3blue">
  <div class="contourbandeau"> <!-- bandeau en haut de la page -->
  <a href="https://www.youtube.com/watch?v=dSP_n_BIe0w"> <!-- rend l'image clicable -->
  <img id="bandeau" src="pics/bandeau.jpg"/></a> <!-- chemin vers l'image dans le dossier -->
  </div>
</header>
                 <!-- <em> pour italique, <br> pour revenir a la ligne, <strong> pour mettre en gras, <u> pour souligner, <a> pour ajouter un lien -->
<div class="contourpage">
<div class="infosperso">
    <h1><u>Informations personnelles</u></h1>
	<a href="http://fr.metalgear.wikia.com/wiki/Solid_Snake">
    <img id="identpic" src="pics/pdp.jpg"></a>
     <!-- Information de contact du personnage -->
      <p>Nom de naissance: <em>David</em></p>
      <p>Nom professionel: <em>Solid Snake</em></p>
      <p>Date de naissance: <em>1972</em></p>
      <p>Nationalite: <em>Americain</em></p>
      <p>Codec: <em>141.80</em></p>
	  <a href="https://fr.wikipedia.org/wiki/Fox_Hound">
    <img id="foxhound" src="pics/foxhound.png"></a>
</div>
<div class="presentation">
    <h2><u>Ma presentation</u></h2>
         <!-- Paragraphe de presentation -->
    <p>Bonjour, je suis <em>David</em> plus connu sous le nom de<br><em>Solid Snake</em> je suis un soldat d'elite expert en infiltrations et en combats rapprochés.</p>
	<p>Surentrainé,je suis apte a remplir, en solitaire,des missions<br><strong>ultra-secretes</strong> et <strong>dangereuses</strong> en territoire ennemie.</p>
</p>
</div>


<div class="parcours">
    <h3><u>Mon parcours</u></h3> <!-- 4 elements concernant sa formation -->
      <p>- Anciennement sujet du projet "<em>Les Enfants Terribles</em>" du gouvernement Americain en <em>1972</em>.</p>
      <p>- J'ai accompli mon service millitaire au sein des <br>"<em>Green Berets</em>" en <em>1991</em>.</p>
	  <p>- J'ai suivi une formation d'espion.</p>
      <p>- Ensuite j'ai rejoint "l'unitée des forces speciales de "<em>Big Boss</em>" appelées "<em>FOXHOUND</em>" en <em>1995</em>.</p>
    <h3><u>Mes experiences</u></h3> <!-- 3 experiences pro -->
      <p>- J'ai participé a une mission d'infiltration en Irak de l'Ouest, pendant la "<em>Guerre du Golf</em>" en <em>1991</em>.</p>
      <p>- En <em>1995</em>, j'ai du infiltrer le "<em>Outer Heaven</em>", une base millitaire sithuée en <strong>afrique du sud</strong>".</p>
      <p>- En Decembre <em>1999</em>, je fut appelé par le nouveau commandant "<em>Roy Campbell</em>" pour une infiltration en <strong>Asie centrale.</strong></p>
</div>
</div>

<div class="centreinteret">
    <h4><u>Mes centres d'interets</u></h4>
	<a href="https://www.youtube.com/watch?v=ZgeVrNONuYA">
    <img id="intpic" src="pics/Solid.jpg"/></a>
<div class="interest"> <!-- Centre d'interet -->
      <p>- J'aime <strong>l'espionnage</strong>.</p>
      <p>- Detruire des "<strong>Engins Nucleaires</strong>" a mes heures perdues.</p>
      <p>- J'aime me cacher dans des <strong>cartons</strong>.</p>
      <p>- Maniement des <strong>armes a feux</strong>.</p>
</div>
</div>
</div>
<div class="commandtab"> <!-- tableau de commande en bas de la page -->
<span class="bouton" id="bouton_texte" onclick="javascript:afficher_cacher('texte');">Cacher la page</span> <!-- bouton qui affiche/masque la page -->
<select name="fondecran" size=2>
         <option value="rouge" onclick="couleur('red')">Rouge</option>
	 <option value="jaune" onclick="couleur('yellow')">Jaune</option>
	 <option value="gris" onclick="couleur('grey')">Gris</option>
	 <option value="vert" onclick="couleur('green')">Vert</option>
	 <option value="bleu" onclick="couleur('blue')">Bleu</option>
	 <option value="orange" onclick="couleur('orange')">Orange</option>
	 <option value="blanc" onclick="couleur('white')">Blanc</option>
	 <option value="noir" onclick="couleur('black')">Noir</option>
</select>
</div>
<script type="text/javascript"></script> <!-- inclus le javascript -->

<body>
</html>
