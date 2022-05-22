<?php 
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}


$idGenrePasser = $_GET['id'];

setcookie("idGenre", $idGenrePasser ); 



echo json_encode($_COOKIE['idGenre']);

header('Location:../pageGenre.php');
Exit();