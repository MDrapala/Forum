<?php require "includes/head.php";

    $requete = $bdd->query("SELECT * FROM topic WHERE cat_id = ".$_GET['id_cat']);
    
    while($reponse = $requete->fetch())
    {
        echo "<p><a href='topic.php?id_t=".$reponse['id_t']."'>".$reponse['titre']."</p>";
    }


require "includes/foot.php";?>