<?php
// On crée notre array $prenoms
$prenoms = array ('François', 'Michel', 'Nicole', 'Véronique', 'Benoît');
// Puis on fait une boucle pour tout afficher :
for ($numero = 0; $numero < 5; $numero++)
{
echo $prenoms[$numero] . '<br />'; // affichera $prenoms[0], $prenoms[1], etc..
}
?>
<?php
echo "<br />_______________<br /><br />"
?>

<?php
$coordonnees = array (
'prenom' => 'François',
'nom' => 'Dupont',
'adresse' => '3 Rue du Paradis',
'ville' => 'Marseille');
foreach($coordonnees as $element)
{
echo $element . '<br />';
}

{echo "_______________<br />";
}
?>

<?php
$coordonnees = array (
'prenom' => 'François',
'nom' => 'Dupont',
'adresse' => '3 Rue du Paradis',
'ville' => 'Marseille');
foreach($coordonnees as $cle => $element)
{
echo '[' . $cle . '] vaut ' . $element . '<br />';
}
?>