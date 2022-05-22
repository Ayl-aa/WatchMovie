<?php 
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Genre</title>
    
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="./CSS/stylecss.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="./JS/genre.js"></script>
  
</head>
<body >

<?php 
 
 
 if (isset($_SESSION['pseudo'])){


    include('./PHP/enteteCo.php');
  

}
else{
    include('./PHP/entete.php');
  
}

?>



<select name="genre" id="mySelect" onchange="afficheFilmParGenre()">
    <option>Choisi le genre</option>
    <option value="28">Action</option>
    <option value="12" >Aventure</option>
    <option value="16" >Animation</option>
    <option value="35" >Comedie</option>
    <option value="80" >Crime</option>
    <option value="99" >Documentaire</option>
    <option value="18" >Drame</option>
    <option value="10751" >Famille</option>
    <option value="14" >Fantastique</option>
    <option value="36" >Histoire</option>
    <option value="27" >Horreur</option>
    <option value="10402" >Musique</option>
    <option value="9648" >Mystere</option>
    <option value="10749" >Romance</option>
    <option value="878" >Sceience-Fiction</option>
    <option value="10770" >Film télévisé</option>
    <option value="53" >Thriller</option>
    <option value="10752" >Guerre</option>
    <option value="37" >Western</option>
</select>

<div id="filmParGenre">...</div>
</body>
</html>
