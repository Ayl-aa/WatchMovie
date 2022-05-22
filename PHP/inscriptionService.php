
<?php

session_start();

try{
  
    $db = new PDO('mysql:host=localhost;dbname=mercier7;charset=utf8', 'mercier', 'Hdf18GK@');

}
catch(Exception $e){

    die('Erreur : ' . $e->getMessage());
}

$pseudo = $_POST['pseudo'];

$mp = $_POST['mp'];
$mpHash = password_hash($mp, PASSWORD_DEFAULT);

$mpConf = $_POST['mpConf'];

$_SESSION["pseudo"]=$pseudo;




//probleme au niv du faite qu'il donne que le dernier pseudo





if (empty($_POST['pseudo']) || empty($_POST['mp']) || empty($_POST['mpConf']) ) 
{
    echo "Vous n'avez pas rempli tous les champs !";
} 


elseif ($mp !== $mpConf) 
{
    echo "Les deux mot de passe ne sont pas pareil";
} 

else 
{
    $userDB = $db -> prepare('INSERT INTO Utilisateur(mpUser , pseudoUser ) VALUES (:pass, :pseudo )');
    $userDB -> execute([
    'pass'=> $mpHash,
    'pseudo' => $pseudo,

]);
header('Location:../maListe.php');
Exit();

}
