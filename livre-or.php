<?php
session_start();
$connexion = mysqli_connect("localhost","root","","livreor");
  
if (!empty($_POST['envoideconnexion'])) 
    {     
    unset ( $_SESSION ['id'] );
    unset ($_SESSION['login']); 
$erreur="<p class='codeerreur'>vous n'etes pas connecté !";
    }
?>

<?php                 
if (isset($_SESSION['id'])) 
{        
  if (isset($_POST["envoicomentaire"]))
   {
              $bouton=htmlspecialchars($_POST['entrecom']);

        if (!empty($_POST["entrecom"]))     
        {   
          $id_user = $_SESSION['id'];
                              //requete d'insertion
          $reqcom="INSERT INTO commentaires(commentaire,id_utilisateur,date) VALUES (\"$bouton\",\"$id_user\",NOW())";
          $lecom = mysqli_query($connexion, $reqcom);
         
              

             

        }
             header('Location: livre-or.php');       
  }
  unset($bouton);
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/nav.css">
	<link rel="stylesheet" type="text/css" href="css/livre-or.css">
	<title>porte folio</title>
</head>
	<body>
<header>
		  <nav class="oc-header">
       <ul class="menu">
  
  <li class="oc-onglet"><a class="oc-nav-marg" href="index.php">accueil</a> </li>
  
  <li class="oc-onglet" class="violet"><a class="oc-nav-marg" href="#">languages</a>
        <ul class="oc-back1">
  <li class="oc-sous"><a href="#">html</a>
    <ul>
  <li><a class="oc-sous-sous" href="projet.php/404/404.html">404</a></li>
  <li><a class="oc-sous-sous" href="projet.php/work-in-progress/work-in-progress.html">work in progress</a></li>
  <li><a class="oc-sous-sous" href="projet.php/btp/accueil.html">btp</a></li>
  <li><a class="oc-sous-sous" href="projet.php/application-favorites/app-favorites.html">application favorites</a></li>
  <li><a class="oc-sous-sous" href="projet.php/voyages/voyages.html">voyages</a></li>
  <li><a class="oc-sous-sous" href="projet.php/botanique/accueil.html">botanique</a></li>
        </ul>
        </li>
  <li>
  <li class="oc-sous"><a href="#">php.sql</a>
    <ul>
  <li><a class="oc-sous-sous" href="projet.php/connexion/">connexion</a></li>
  <li><a class="oc-sous-sous" href="projet.php/discussion/">discussion</a></li>
     </ul>
  </li>
  <li class="oc-sous"><a href="#">java script</a>
     <ul>
  <li><a class="oc-sous-sous" href="voyage31.html"></a></li>
  <li><a class="oc-sous-sous" href="voyage32.html"></a></li>
    </ul>
    </ul>
  </li>
  <li>
  <li class="oc-onglet"><a class="oc-nav-marg" href="livre-or.php">livre d'or</a>
    <ul class="oc-back1">
 <!-- <li class="oc-sous"><a href="voyage21.html">norvège</li></a>
  <li class="oc-sous"><a href="voyage22.html">bénin</li></a>
  <li class="oc-sous"><a href="voyage11.html">brésil</li></a>
  <li class="oc-sous"><a href="voyage12.html">japon</li></a>
  <li class="oc-sous"><a href="voyage31.html">la dominique</li></a>
  <li class="oc-sous"><a href="voyage32.html">turquie</li></a>-->
  <li></li>
      </ul>
  </li>
  </li> 
  <li class="oc-onglet"><a class="oc-nav-marg" href="projet.php/cv/cvolivier.html">C.V</li></a>
  <li class="oc-onglet"><a class="oc-nav-marg" href="projet.php/work-in-progress/work-in-progress.html">contact</li></a>
  </ul>
  </nav>	
</header>
  <!--FIN DU HEADER
      DEBUT DE LA CONNEXION  -->
   
   <h1 class="titre-livreor">Livre d'or</h1>

<?php
  $bdd = new PDO('mysql:host=127.0.0.1;dbname=livreor','root','');
  if (isset($_POST['envoiconnexion']))
   { 
    $loginconexion = htmlspecialchars($_POST['login']);
    $passwordconexion =sha1($_POST['password']);
      if (!empty($_POST['login']) && !empty($_POST['password']) )
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
                header("location: livre-or.php?id=".$_SESSION['id']);
            }
          else
          {
          $erreur = "<br/>mauvais pseudo ou mauvais mot de passe !";
          }
          }
      else
      {
      $erreur = "<p class=\"er\"><br/>tous les champ doives etre completés !";
      } 
  }
  else
    $erreur = "";
?>
<!--ARTICLE CONEXION -->
<section class="section-livreor-1">
  <article class="article-connexion">
    <h2><?php if (isset($_SESSION['id'])) 
    {
      echo $_SESSION['login']." "."conecté"." "."!" ;
    }
    else
      echo "connectez vous !";
?> </h2>
     <form class="form-connexion" method="POST" action="livre-or.php">
         <table>
           <tr>
            <td>
              <label class="login"  for="login">login :</label>
            </td>
            <td>
              <input class="login-connexion" type="text" name="login" ><!--php pour laisser le text dans l'input-->
            </td>
          </tr>
          <tr>
            <td>
              <label class="mdp"  for="password">mot de passe :</label>
            </td>
            <td>
              <input class="mdp" type="password" name="password" ><!--php pour laisser le text dans l'input-->
            </td>
          </tr>
        </table> 
        <br/>
                <input class="envoi-connexion" type="submit" name="envoiconnexion" value="connexion">
        <br/>
                <input class="envoi-deconnexion" type="submit" name="envoideconnexion" value="déconnexion">   
        <div>
          <a href="inscription.php"><p>inscrivez vous !</p></a>
        </div>
     </form>
 </article>
 <article class="article-profil" >
   <h2><?php if(isset($_SESSION['id'])) 
    {
      echo "connecté"." "."!"."<br/>";
      echo "Profil"." "."de"." ".$_SESSION['login'] ;
    }
    else
    {
      echo "connectez vous !";
    }
?> </h2>
<?php
if(isset($_SESSION['id']))
 {
   echo  "<a href=\"modif-profil.php\">"."<p class=\"liens-vers-modif\">"."modifier mon profil !"."</p>"."</a>";
}






 ?>     
               <!--PARTI ERREUR-->

 </article>
</section>
<section class="section-com">

<!--FIN DE LA CONNEXION --> <!--PARTIE ECRIRE COMMENTAIRE -->
  <form class="form-connexion" method="POST" >
  <table>


          <tr>
            <td>
              <label class="inputcom"  for="entrecom">commentaire :</label>
        </td>
        <td>
              <input class="inputcom" type="text" name="entrecom" ><!--php pour laisser le text dans l'input-->
            </td>
          </tr>
    </form>
      </table>
           <br/>
                <input class="envoi-comentaire" type="submit" name="envoicomentaire" value="deposé le message">

</section>
   <!-- partie affichege livre-or -->
<section class="section-zoneaffichage">
<?php
  if (isset($_SESSION['login'])) {
    $login=$_SESSION['login'];

  }
$req_jointe = "SELECT  login,  commentaire, date FROM utilisateurs LEFT JOIN commentaires ON utilisateurs.id = commentaires.id_utilisateur ORDER BY `date`  DESC LIMIT 35";
  $req_jointe_bdd = mysqli_query($connexion,$req_jointe);

    $row = mysqli_fetch_all($req_jointe_bdd);

   // $req_jointe = "SELECT  login,  message, date FROM utilisateurs LEFT JOIN messages ON utilisateurs.id = messages.id_utilisateur ORDER BY `date`  DESC LIMIT 35";
  //$req_jointe_bdd = mysqli_query($connexion,$req_jointe);

    //$row = mysqli_fetch_all($req_jointe_bdd);
?>
                     <!--AFFICHE DE LA DATA BASE-->
  <div class="div-affichage">
       <table class="table-affichage">        
      <?php 


      foreach ( $row as $key ):
      {
        if (!empty($key[1]))
            
          # code...
            if (isset($login) == $key[0]) 
        //  echo "<strong>".'<font size= "5px" color="red">'.$key.'</font>'."</strong>";
                  {
                    echo "<tr class=\"psedo-affichage\"><td class=\"taillepse\" >".$key[0].":"."</td>"."<td class=\"texttd\" >".$key[1]."</td>"."<td class=\"date-affichage\">".$key[2]."<td>"."</tr>";
                  }

                else{
                  echo "<tr><td class=\"taillepse\">".$key[0].":"."</td>"."<td class=\"texttd\">".$key[1]."</td>"."<td \"date-affichage\">".$key[2]."</td>"."</tr>";
                      }// } 
         }
endforeach ;
?>
</table>
</div>
<?php
if (isset($erreur))
     {
      echo "<strong>".'<font size= "5px" color="red">'.$erreur.'</font>'."</strong>";
    }
?> 
</section>

 
</body>
</html>