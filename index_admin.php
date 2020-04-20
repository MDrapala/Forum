<?php 
if(!isset($_SESSION['admin']) OR !$_SESSION['admin']) {
		
	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Administration</title>
</head>
<body>
	
	<?php require "includes/head.php";?>
    <h2>Administration</h2>
    <a href="index_deconnexion.php"> Se Déconnecter</a>



<div class="background2">

     <div class="text2">

	<h2> Administration</h2><br>
	


<?php

    if(isset($_GET['ban']))
    {
        $requete = $bdd->query("UPDATE users SET lvl = 0 WHERE id_u = ".$_GET['ban']);
    }
 if(isset($_GET['deban']))
    {
        $requete = $bdd->query("UPDATE users SET lvl = 1 WHERE id_u = ".$_GET['deban']);
    }
    $requete = $bdd->query("SELECT * FROM users");
    while ($reponse = $requete->fetch())
    {
        echo $reponse['pseudo'];
        if($reponse['lvl']!=0)
            echo "---<a href='index_admin.php?ban=".$reponse['id_u']."'>bannir</a><br>";
        else
            echo " --- <a href='index_admin.php?deban=".$reponse['id_u']."'>debannir</a><br>";
    }
 ?>


</div>


	<?php require 'includes/foot.php';?>


</body>
</html>