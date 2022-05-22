<?php 

//test si connecter-------------------------------------------------->
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}


if(empty($_SESSION['pseudo'])){
  header('Location:../connexion.php');
  Exit();
}
else{

$pseudo = $_SESSION['pseudo'] ;

$idFilmRecup = $_COOKIE["idFilmRecupSupp"];

try{
  
  $db = new PDO('mysql:host=localhost;dbname=mercier7;charset=utf8', 'mercier', 'Hdf18GK@');

}
catch(Exception $e){

  die('Erreur : ' . $e->getMessage());
}


$cherchIdPseudo = $db -> prepare('SELECT idUtilisateur  FROM Utilisateur WHERE pseudoUser =:pseudo ');
$cherchIdPseudo -> execute([
    'pseudo' => $pseudo,

]);

foreach($cherchIdPseudo as $i )
{
  $pseudoId  = $i['idUtilisateur'];
}


$suppFilmList = $db -> prepare('DELETE  FROM `Liste` WHERE idFilm= :idFil AND idUtilisateur =:idUtili');
$suppFilmList -> execute([
    'idFil' => $idFilmRecup,
    'idUtili' => $pseudoId,
    
]);



echo "ok";





header('Location:../maListe.php');
Exit();



}



