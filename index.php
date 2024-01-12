
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
$note =(int) readline('entrer la note :');
if($note >= 10){
  echo 'Bravo vous avez pas la moyenne';
}else {
    echo 'Dommage vous n\'avez pas la moyenne';
}

?>
<?php
$action = (int) readline('entrer votre action : 1 : attaquer ,  2: defendre, 3: passer mon tour ');
switch($action){
    case 1:
        echo 'jattaque';
        break;
    case 2:
        echo 'je defend';
        break ;
    case 3:
        echo 'passer mon tour ';
        break ;
    default:
        echo 'Commande inconnue';
// if($action ===1){
//     echo 'J\attaque';
// }elseif($action === 2){
//     echo 'defendre';
// } else {
//     echo 'passer mon tour ';
// }

}
?>
