<?php
// Les tableaux
$prenoms[0] = 'Mathieu';
$prenoms[1] = 'Marie';
$prenoms[0] = 'Robert';
// une autre manière de déclaré les variables du tableau

$prenoms = array('Mathieu', 'Marie', 'Robert');

//echo $prenoms[0];
//echo $prenoms[1];
//echo $prenoms[3];

echo print_r($prenoms);
echo "<br/>";

$personne = array('nom' => 'Nebra', 'prenom' => 'Mathieu', 'age'=> 32);

echo print_r($personne);
echo "<br/>";

// pour afficher les cases du tableau 1/1 on peu faire une boucle for

for ($numero = 0; $numero < 3; $numero++)
{
 echo '<p>' . $prenoms[$numero] . '</p>';
}
echo "<br/>";
// sinon avec la boucle foreach fait spécialement pour les tableaux

foreach ($prenoms as $prenom)
{
 echo '<p>' . $prenom . '</p>';
}
echo "<br/>";

foreach ($personne as $detail)
{
    echo '<p>' . $detail . '</p>';
}
echo "<br/>";

foreach ($personne as $libelle => $detail)
{
    echo '<p>' . $libelle . ' vaut '. $detail . '</p>';
}
echo "<br/>";
// Les fonctions

$phrase = 'Bonjour je suis un responsable marketing.';
$nombreDeCaracteres = strlen($phrase);
// la fonction strlen cacule le nombre de caractere qu'il ya dans la phrase

echo ' Il y\'a ' . $nombreDeCaracteres . ' caracteres dans cette phrase.';
echo "<br/>";
// la fonction str_shuffle pour mélanger le nombre de caractère
echo "<br/>";

echo date('d');

echo date('m');

echo date('y');
echo "<br/>";

// comment créer ma propre fonction sur php
//déclarer la fonction
function direBonjour($nom)
{
 echo ' <p>Bonjour ' . $nom . '</p>';
}

//appeler la fonction
direBonjour('Marie');
direBonjour('Mathieu');
direBonjour('Robert');

// <?php session_start(); est très important
// La boucle for permet d'éxécuter des instructions plusieurs fois. Il est aussi
//possible d'utiliser la boucle while dont la syntaxe est un peu différrente

?>




