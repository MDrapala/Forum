<?php require "includes/head.php";

    if(isset($_POST["submit"]))
    {
        $email = $_POST["email"];
        $mdp = sha1($_POST["mdp"]);
        
        $requete = $bdd->query ("SELECT * FROM users WHERE email = '$email' AND mdp = '$mdp'");
        
        if($reponse = $requete->fetch()) 

        {
            if ($reponse['lvl'] == '0')
            {
                echo "Vous êtes banni";
            }
            else
            {
            $_SESSION["connecte"] = true;
            $_SESSION['id_u'] = $reponse['id_u'];
            header("Location:index_forum.php");
            }

        
        }
        else
        {
            $erreur = "Mauvais identifiants";
        }
    }   
  
?>

<div class="background2">
<form class="form center" action="" method="post">
    <div class="text1">
    Email:<input type="email" placeholder="Entrer votre Email" name="email" /><br> 
    Mot de passe:<input type="password" placeholder="Mot de passe" name="mdp" /><br><br>
    <input type="submit" name="submit" /><br>
    <a href="index_inscription.php">Pas encore inscrit ?</a>
    
    <a href="index_generer.php">Mot de Passe oublié ?</a>
</div>

</form>
</div>
<?php require "includes/foot.php"; ?>
