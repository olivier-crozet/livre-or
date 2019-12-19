<?php
session_start();




 if (!empty($_POST['formdeconexion'])) 
    {
    	
    unset ( $_SESSION ['id'] );
    unset ($_SESSION['login']);
    
	
$erreur="<br/>vous n'etes pas connecté !";
}
?>


<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="index.css">
	<title>accueil</title>
	         
</head>
<body class="oc-body-accueil-btp">
	<div class="oc-backgroud-btp">

					 <!--HEADER ADMIN -->
  <header class="oc-header-btp">
       <nav class ="oc-nav-btp" >
        <ul id="oc-nav-btp">
             <li ><a  href="index.php">Accueil</a></li><!--
          --><?php if (!isset($_SESSION['login'])) { echo "<li ><a href=\"inscription.php\">inscription</a></li>";} ?><!--
           --><li ><a href="profil.php">profil</a></li><!--
           --><?php 
              if (!isset($_SESSION['login'])) {
              	echo "vous netes pas conecté";
              }
              else{
               if($_SESSION['login'] == "admin"){
              	echo "<li ><a href=\"admin.php\">admin</a></li>";
                       };
                       }?>
              <?php
              if  (isset($_SESSION['id'])) { echo  '<li>'.'<a href= "">'."connecté".'</a>'.'</li>';} ?>       
        </ul>

       </nav>
   </header>
	  				<!--FIN HEADER ADMIN-->



       <section>	
		       <h1 class="titrelogin-index">rentrer votre identifiant et votre mot de passe</h1>
	

		       <!--MODULE DE CONEXION-->

	      <article class="paneaulogin-index">
	        <div class="psedo">


               <!--debut formulaire-->
    <form method="post" action="index.php"><!--pour le php -->

<?php

	$bdd = new PDO('mysql:host=127.0.0.1;dbname=moduleconnexion','root','');

	if (isset($_POST['formconnexion']))
	 { 
		$loginconexion = htmlspecialchars($_POST['psedoconect']);
		$passwordconexion =sha1($_POST['passwordconect']);


	   	if (!empty($_POST['psedoconect']) && !empty($_POST['passwordconect']) )
	   	{
			$requser = $bdd->prepare("SELECT * FROM utilisateurs where login = ? AND password = ?");
			$requser->execute(array($loginconexion, $passwordconexion));
			$userexist = $requser->rowcount();
		    	if($userexist == 1)
			     {
				
			     	$userinfo = $requser->fetch();
			     	session_start();
			     	$_SESSION['id'] = $userinfo['id'];
			     	$_SESSION['login'] = $userinfo['login'];
		    		$_SESSION['prenom'] = $userinfo['prenom'];
			     	$_SESSION['nom'] = $userinfo['nom'];

			         	header("location: profil.php?id=".$_SESSION['id']);
			    	}

		    	else
		    	{
			   	$erreur = "<br/>mauvais psedo ou mauvais mot de passe !";
		    	}
	     		}

	   	else
	   	{
			$erreur = "<br/>tous les champ doives etre completés !";
			}
		
	}

?>

    	<!--fin du php-->


    	<div class="div-tableau-connexion" >
    	 <table >
          <tr>
            <td>
              <label  for="psedoconect"> login :</label>
        </td>
        <td>
              <input type="text" name="psedoconect" placeholder="ecrire votre pseudo" value="<?php if(isset($_SESSION['login'])){echo $_SESSION['login'];} ?>"><!--php pour laisser le text dans l'input-->
            </td>
          </tr>
          
   
              <tr>
               <td>
                <label  for="passwordconect">mot de passe :</label>
              </td>
              <td>
                <input type="password" name="passwordconect" placeholder="ecrire votre mot de passe">
              </td>
          </tr>
          
          
        </table>
        <br/>
                <input class="butonconexion" type="submit" name="formconnexion" value="CONNEXION"/>  
        <br/><br/>
        		<input class="butonconexion2" type="submit" name="formdeconexion" value="se deconnecté"/>       		   
          </form>
        </div>
        </table>



          		<!--PHP-->

<?php

   if (isset($erreur))
    	{
      	echo "<strong>".'<font size= "5px" color="red">'.$erreur.'</font>'."</strong>";
    	}

?>
<footer>
 <!-- <div>
	<img class="ballon" src="image/foot-01.gif">  
  </div> -->
	 </footer>

</body>
</html>
