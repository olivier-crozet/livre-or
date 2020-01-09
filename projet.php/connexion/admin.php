<?php
session_start();
$connexion = mysqli_connect("localhost","root","","moduleconnexion");
$_SESSION['id'];
$_SESSION['login'];

?>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="index.css">
  <link rel="stylesheet" type="text/css" href="inscription.css">
  <title>profil</title>
</head>

<body class="oc-body-accueil-btp">
  <div class="oc-backgroud-btp">
  <header class="oc-header-btp">
       <nav class ="oc-nav-btp" >
        <ul id="oc-nav-btp">
          
           <li ><a  href="index.php">Accueil</a></li><!--
          --><?php if (!isset($_SESSION['login'])) { echo "<li ><a href=\"inscription.php\">inscription</a></li>";} ?><!--
           --><li ><a href="profil.php">profil</a></li>
              <?php if (!empty($_SESSION['login'] == "admin" )){echo "<li ><a href=\"admin.php\">admin</a></li>";}?>
           <?php  if  (isset($_SESSION['id'])) { echo  '<li>'.'<a href= "">'."connecté".'</a>'.'</li>';} ?>
           </ul>
       </nav>
   
          <!--HTML TABLEAU INPUT-->

                          <h1>espace administrateur </h1>
 
</header>

				<?php



$requete = "SELECT * FROM utilisateurs ";

$query = mysqli_query($connexion, $requete);

$resultat= mysqli_fetch_all($query);



?>
<div class="div-tabladmin">
<table class = "tableadmin">

	<tr class="tbladmin">
		<td class="tbladmin">id</td>
		<td class="tbladmin" >login</td>
		<td class="tbladmin">prenom</td>
		<td class="tbladmin">nom</td>

		
	</tr>
	<?php foreach ($resultat as $key ): ?>

	
		<tr class="tbladmin">
			<td class="tbladmin"><?php echo $key[0] ?></td>
			<td class="tbladmin"><?php echo $key[1] ?></td>
			<td class="tbladmin"><?php echo $key[2] ?></td>
			<td class="tbladmin"><?php echo $key[3] ?></td>

		</tr>
		
	<?php endforeach ?>

</table>
</div>

</body>
</html>