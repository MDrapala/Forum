<?php require "includes/head.php";

     if(isset($_POST['submit']))
    {
        $login = $_POST['login'];
        $mdp = sha1($_POST['mdp']);
        $email = $_POST['email'];
        $reponse = $_POST['reponse'];
        $question = $_POST['question'];
        
        
        $requete = $bdd->query("INSERT INTO users(pseudo,mdp,email,question,reponse) VALUES('$login','$mdp','$email','$question','$reponse')");
        
            header("Location:index_connexion.php");
        }

?>

<div class="background2">

<form class="form center" action="#" method="post" enctype="multipart/form-data">
    <div class="text1">
    Pseudo :<input type="text" placeholder="Entrer votre pseudo" name="login"><br> <br>
    Mot de passe : <input type="password" placeholder="Entrer votre mot de passe" name="mdp"><br> <br>
    Email : <input type="email" placeholder="Entrer votre Email" name="email"><br> <br>

    <label for="Question">Question
             <select name="question" id="question">
                    <option value="">Le prénom de votre annimal de compagnie ?</option>
                    <option value="">Le prénom de votre meilleur(e) ami(e)?</option>
            </select>
    </label><br><br>
    <input type="reponse" placeholder=" Votre reponse " name="reponse"><br>
    Avatar <input type="file" name="avatar"><br/><br>
    <input type="submit" name="submit"/>
    </div>
</form>


</div>
<?php require "includes/foot.php"; ?>