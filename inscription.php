<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/inscription.css">
    <title>Inscription</title>
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
      <form action="./PHP/inscriptionService.php" method="POST">
        <div class="title">Bienvenue</div>
        <div class="subtitle">Crée ton compte!</div>
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
        <div class="input-container ic2">
          <input name="mpConf" id="mpConf" class="input" type="password" placeholder=" " />
          <div class="cut cut-short"></div>
          <label for="mpConf" class="placeholder">Confirmation du mot de passe </>
        </div>
        <button type="submit" class="submit">S'inscrire</button>
      
    </form>
  </div>
</body>
</html>






