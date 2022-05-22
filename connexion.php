<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/inscription.css">
    <title>Connexion</title>
</head>
<body>

<?php 
 
 
 if (isset($_SESSION['pseudo'])){


    include('./PHP/enteteCo.php');
  

}
else{
    include('./PHP/entete.php');
  
}

?>



    <div class="form">
      <form action="./PHP/connexionService.php" method="POST">
        <div class="title">Binevenue</div>
        <div class="subtitle">Connecte toi !</div>
        <div class="input-container ic1">
          <input name="pseudo" id="pseudo" class="input" type="text" placeholder=" " />
          <div class="cut"></div>
          <label for="pseudo" class="placeholder">Pseudo</label>
        </div>
        <div class="input-container ic2">
          <input id="mp" name="mp" class="input" type="password" placeholder=" " />
          <div class="cut"></div>
          <label for="mp" class="placeholder">Mot de passe</label>
        </div>
       
        <button type="submit" class="submit">Se connecter</button>
        <p id="lienInscription" >Vous n'avez pas de compte ?<a href="./inscription.php">Inscrivez-vous</a></p>
    </form>
  </div>
</body>
</html>






