<?php require "includes/head.php";


    if (isset($_POST['submit']) && isset($_SESSION['id_u']))
    {
        $requete = $bdd->prepare("INSERT INTO post(contenu, u_id, t_id) VALUES(:contenu, :u_id, :t_id)");
        $requete->bindParam(':contenu', $contenu);
        $requete->bindParam(':u_id', $u_id);
        $requete->bindParam(':t_id', $t_id);
        $contenu = $_POST['contenu'];
        $u_id = $_SESSION['id_u'];
        $t_id = 1;
        $requete->execute();

    }



?>

	<h2 class="color h2">Mécanique<h2>
	
	<?php
		$requete = $bdd->prepare("SELECT post.contenu, users.pseudo FROM post, users WHERE post.u_id = users.id_u AND post.t_id = 1");

	$requete->execute();
	while($reponse = $requete->fetch())
	{
	   echo "<div class='background4'><p class='center text1'>" . $reponse['pseudo'] . " a écrit : <br>" . $reponse['contenu'] . "</p></div>"; 

	}     
    ?>
    
<form class ="commentaire" action="" method="POST">
    		 <textarea name="contenu" id="desc" cols="30" rows="10" ></textarea><br>
			 <input type="submit" name="submit" value="Poster">
 <script src="http://cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script><script> CKEDITOR.replace('desc');</script> 
</form>
<?php require "includes/foot.php"?>