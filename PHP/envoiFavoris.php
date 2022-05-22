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

$idFilmRecup = $_COOKIE["idFilmRecup"];

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

//test si deja dans la base

$cherchIdFilmExist = $db -> prepare('SELECT idFilm  FROM Liste WHERE idUtilisateur =:idUtili ');
$cherchIdFilmExist -> execute([
    'idUtili' => $pseudoId,

]);

foreach($cherchIdFilmExist as $i )
{
  if($i['idFilm'] == $idFilmRecup){
    header('Location:../index.php');
Exit();
  }
}




$ajoutFilmListe = $db->prepare('INSERT INTO Liste (idFilm, idUtilisateur ) VALUES (:idFilmRecup, :pseudoId)');
$ajoutFilmListe-> execute([
'idFilmRecup'=> $idFilmRecup,
'pseudoId' => $pseudoId,

]);

header('Location:../index.php');
Exit();



}



