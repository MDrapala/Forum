<?php session_start(); 

    try
    {
$bdd = new PDO
    ("mysql:host=localhost;dbname=forum","root","root");
    }
 catch(exception $e)
 {
     die("Erreur de Connexion");
 }
    ?>

<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style/style.css">
    
</head>
<body>

 <div id="header">
      <div class="img_ul_1">
        <nav class="ul_1">
    <ul class="menu1">
        <li><a href="index.php">Accueil</a></li>
        <li><a href="index_forum.php">Forum</a></li>
    </ul>
   </nav>
     
      <img class="logo" src="style/image/logo.png">
      <div class="clearfix"></div>
      <div class="background">
    
    <nav class="ul_2">
    <ul class="menu2">
        <li><a href="https://www.facebook.com/Car-Passion-125741114868566/" target = "_blank" ><img class="img_2" src="style/image/facebook-icon.png"></a></li>
        <li><a href="https://plus.google.com/u/0/111482433654488116493" target = "_blank" ><img class="img_2" src="style/image/googleplus-icon.png"></a></li>
        <li><a href="https://www.instagram.com/carpassionwebsite/" target = "_blank" ><img class="img_2" src="style/image/instagram-icon.png"></a></li>
    </ul>
   </nav>       
                <nav class="ul_3 center">
                <ul>
            
                    <?php if (isset($_SESSION['connecte']))
                    { ?>
                     <li><a href="index_profil.php"><img class="img2" src="style/image/Profile-icon.png">Profil</a></li>
                     <li><a href="index_deconnexion.php"><img class="img1" src="style/image/connexion.png">Deconnexion</a></li>
                     <?php }
                    else { ?>
                       <li><a href="index_inscription.php"><img class="img1" src="style/image/inscription.png">Inscription</a></li>
                       <li><a href="index_connexion.php"><img class="img1" src="style/image/connexion.png">Connexion</a></li>
                        
                    <?php } ?>
                </ul>
            </nav>

</div>
</div>
</div> 
