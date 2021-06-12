<?php  
/*
  PHP Snack 2:
  Passare come parametri GET name, mail e age e
  verificare (cercando i metodi che non
  conosciamo nella documentazione) che:
  1. name sia più lungo di 3 caratteri,
  2. mail contenga un punto e una chiocciola
  3. age sia un numero.
  Se tutto è ok stampare “Accesso riuscito”, altrimenti
  “Accesso negato”.
*/

$name = $_GET['nome'];
$mail = $_GET['mail'];
$age = $_GET['age'];
echo $name.'<br>';
echo $mail.'<br>';
echo $age.'<br>';
if (empty($name) || empty($mail) || empty($age) ) {
    echo "Accesso negato ";
} else {
    if (strlen($name) <= 3) {
        echo 'accesso non riuscito';
    } elseif (!stripos($mail,'@') || !stripos($mail,'.')){
        echo 'accesso non riuscito';
    } elseif (!is_numeric($age)) {
        echo 'accesso non riuscito';
    } else {
        echo 'accesso riuscito';
    }
}