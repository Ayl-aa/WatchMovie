<?php

session_start();


$pseudo = $_POST['pseudo'];
$_SESSION['pseudo'] = $pseudo;

$mp = $_POST['mp'];



try{
  
    $db = new PDO('mysql:host=localhost;dbname=mercier7;charset=utf8', 'mercier', 'Hdf18GK@');

}
catch(Exception $e){

    die('Erreur : ' . $e->getMessage());
}



$verifPseudo = $db->query('SELECT pseudoUser , mpUser  FROM Utilisateur WHERE pseudoUser ="'.$pseudo.'" OR mpUser ="'.$mp.'"');

foreach($verifPseudo as $i )
{

    $userPseudo = $i["pseudoUser"];
    $userPass = $i["mpUser"];
}





if($pseudo != $userPseudo)
    { 
        header("Refresh:0; url=../connexion.php");
        $messagePseudo = '<script type="text/javascript">alert("Pseudo ou mot de passe incorrect");</script>';
        echo $messagePseudo;
    }
   elseif(!password_verify($mp , $userPass)){
        header("Refresh:0; url=../connexion.php");
        $messagePass = '<script type="text/javascript">alert("Pseudo ou mot de passe incorrect");</script>';
        echo $messagePass;
   }
    else
    {
     
        header('Location:../maListe.php');
        Exit();
    }
 


    



