<?php require "includes/head.php";
    
  if (isset($_POST['submit']))
	{
		$pseudo = $_POST['pseudo'];
		$mdp = sha1($_POST['mdp']);
		$email = $_POST['email'];
		

		$requete = $bdd->query("UPDATE users SET pseudo = '$pseudo', mdp = '$mdp', email = '$email' WHERE id_u = " . $_SESSION['id_u']);
	}

	$requete = $bdd->query("SELECT * FROM users WHERE id_u = " . $_SESSION['id_u']);
	$reponse = $requete->fetch();

    ?>
	


 <div class="background2">
<form class="form center" method="post" enctype="multipart/form-data">  
<div class="text1">  
   Pseudo :<input type="text" placeholder="Changer de peudo" name="pseudo" value="<?php echo 	$reponse['pseudo'];?>"><br>
   Email :<input type="email" placeholder="Changer d'email" name="email" value="<?php echo 	 $reponse['email'];?>"><br>
   Mot de passe :<input type="password" placeholder="Changer mot de passe" name="mdp"><br>

    <label for="Question">Question</label>
             <select name="question" id="Pays">
                    <option value="">Le prénom de votre annimal de compagnie ?</option>
                    <option value="">Le prenom de votre meilleur(e) ami(e)?</option>
            </select>
    <br> <br>
    <input type="reponse" placeholder=" Votre reponse " name="reponse"><br>
   Avatar<input type="file" name="file"><br><br>
   <input type="submit" name="submit"/>
   </div>   
</form>
</div>

<?php require "includes/foot.php" ?>