<?php require "includes/head.php";

    if(isset($_POST['submit']))
{
    $reponse = $_POST['question'];
    $email = $_POST['email'];
    $choix = $_POST['choix'];
                   
   $requete = $bdd->query("SELECT * FROM users WHERE email='$email 'AND reponse = '$reponse'");

 if($reponse = $requete ->fetch())
 {
     $mdp = "";
        $chaine = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
     
     $mdp = $chaine [rand(0,25)];
     $mdp .= $chaine [rand(0,25)];
     $mdp .= $chaine [rand(26,51)];
     $mdp .= $chaine [rand(26,51)];
     $mdp .= $chaine [rand(52,61)];
     $mdp .= $chaine [rand(52,61)];
     $mdp = str_shuffle($mdp);
     
     echo "<div class='mdp'>votre nouveau mdp est" .$mdp;
     //mail($destination,$sujet,$contenu);
     
     $mdp = sha1 ($mdp);
     $requete = $bdd->query("UPDATE users SET mdp='$mdp' WHERE id_u=".$reponse['id_u']);
 }
 
else

{
    echo "Nous avons pas réussit à vous identifier";
}
} 

 ?>  
    


<div class="background2">
<form class="form center" method="post">
    <div class="text1">
    2 min 2MAJ 2Chiffres<input type="radio" name="choix" value="2" checked><br>
    3 min 3MAJ 3Chiffres<input type="radio" name="choix" value="3"><br>
    4 min 4MAJ 4Chiffres<input type="radio" name="choix" value="4"><br><br>

    <label for="Question">Question
             <select name="question" id="question">
                    <option value="">Le prénom de votre annimal de compagnie ?</option>
                    <option value="">Le prénom de votre meilleur(e) ami(e)?</option>
            </select>
    </label><br> <br>
            <label for="email">Email :</label>
        <input type="email" placeholder="Entrer Email" name="email" id="email"/><br><br>
        <input type="text" placeholder="Réponse" name="question" id="question"/><br><br>
           <input type="submit" name="submit"/>

    </div>
</form>
</div>

<?php require "includes/foot.php" ?>