<?php
$bdd =new PDO('mysql:host=127.0.0.1;dbname=db_inscri','root',"");
if(isset($_POST['forminscrioption']))
{
    if(!empty($_POST['noms']) AND !empty($_POST['mail']) AND !empty($_POST['mdp']) )
    {
    $noms =htmlspecialchars($_POST['noms']);
    $mail =htmlspecialchars($_POST['mail']);
    $mdp =sha1($_POST['mdp']);
}
}
    else
 {
        $erreur ="Tous les champs doivent être complétés";
    }









?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iscription et connection </title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <div class="FormInscrs">
        <div class="form-text">Inscription</div>
         <div class="form-saisie">
             <form method="POST" action="">
                 <span> Nom & Prénoms</span>
                 <input type="text" name="noms" placeholder="Taper votre nom ">
                 <span> Address email</span>
                 <input type="text" name="mail" placeholder="Taper votre Addresss email ">
                 <span> Mot de passe</span>
                 <input type="password" name="mdp" placeholder="Taper votre mot de passe ">
                 <input type="submit" name="forminscription" value="S'insrire" class="btnInscris">
                 Vous êtes déjà inscrit?&nbsp; <a href="connection.php"> Connectez-vous</a>
                </form>
                <?php
if(isset($erreur))
{
    echo '<font color= "red" ' .$erreur. "</font>";
}
                ?>
         </div>
    </div>
</body>
</html>