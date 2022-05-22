<?php 

//test si connecter-------------------------------------------------->
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}


$pseudo = $_SESSION['pseudo'] ;



try{
  
  $db = new PDO('mysql:host=localhost;dbname=mercier7;charset=utf8', 'mercier', 'Hdf18GK@');

}
catch(Exception $e){

  die('Erreur : ' . $e->getMessage());
}

$cherchIdPseudo = $db -> prepare('SELECT idUtilisateur  FROM Utilisateur WHERE pseudoUser =:pseudo ');
$cherchIdPseudo -> execute([
    'pseudo' => "baba",

]);

foreach($cherchIdPseudo as $i )
{
  $pseudoId  = $i['idUtilisateur'];
}

$cherchIdFilm = $db -> prepare('SELECT idFilm  FROM Liste WHERE idUtilisateur =:idUser ');
$cherchIdFilm -> execute([
    'idUser' => $pseudoId,

]);


foreach($cherchIdFilm as $i )
{
  $idFilmUser =  $i['idFilm'];
  
}

echo json_encode($idFilmUser);

