
<?php
// les chane de carectere
$note = 15;
$note2 = 15;
// echo $note + $note2 /2 ;
$prenom = "Mechrafi";
$nom = 'Sabrina';

echo 'bonjour ' .  $nom .' ' .  $prenom . ' vous avez eu  ' .(($note + $note2)/2) .  ' de moyenne'
?>

<?php
// les tableaux
$eleve =
['nom' => 'sabrina',
'prenom' => 'mechrafi',
'notes' =>[12, 13,15]
];

echo $eleve['nom'];
print_r($eleve ['notes']);

?> 
<?php
$note = 12;
if($note >= 10){
  echo 'Bravo vous avez pas la moyenne';
}else {
    echo 'Dommage vous n\'avez pas la moyenne';
}

?>