<?php 
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Accueil</title>
    
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="./CSS/stylecss.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="./JS/populaire.js"></script>
</head>
<body onload="traiterBase()">

<?php 
 
 
 if (isset($_SESSION['pseudo'])){


    include('./PHP/enteteCo.php');
  

}
else{
    include('./PHP/entete.php');
  
}

?>




<h1>Populaire en ce moment </h1>
    <div id="zoneCardFilm">...</div>

    

    <br>
    </div>

   
</body>
</html>
