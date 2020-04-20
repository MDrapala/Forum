<?php 
	if(isset($_SESSION['admin']) AND $_SESSION['admin']) {
		header ('Location: index_admin.php');
	}
	$erreur = '';
if(isset($_POST['connexion'])) {
	if(isset($_POST['pseudo'], $_POST['mdp'])) {
		$pseudo = htmlspecialchars($_POST['pseudo']);
		$mdp = htmlspecialchars($_POST['mdp']);


	if(!empty($pseudo) AND !empty($mdp)) {
		if(($pseudo == 'admin1' AND $mdp == '1234') OR ($pseudo == 'admin' AND $mdp == 'azerty')) {
			$_SESSION['admin'] = true;
			header('Location: index_admin.php');
	}else{
		$erreur = 'Les identifiants que vous avez saisie sont invalides';
	}
	}else{
		$erreur = 'Veuillez saisir votre nom d\'utilisateur et votre mdp ';}
	}else{
		$erreur = 'Veuillez saisir votre nom d\'utilisateur et votre mdp ';
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Connexion</title>
</head>
<body>
	
	<?php require "includes/head.php";?>
    

<h2>Connexion</h2>


<form method="POST">

	<input type="text" placeholder="Nom Utilisateur" name="pseudo" <?php if(isset($pseudo)) { ?> value="<?= $pseudo ?>"<?php } ?>>
	<br>
	<input type="password" placeholder="Mot de passe" name="mdp"<?php if(isset($mdp)) { ?> value="<?= $mdp ?>"<?php } ?>>
	<br>
	<input type="submit" name="connexion" value="Se connecter">
</form>
	<?php if($erreur) { ?>
	<p style="color: red;"><?= $erreur ?></p>
<?php } ?>
	







	<?php require 'includes/foot.php';?>


</body>
</html>