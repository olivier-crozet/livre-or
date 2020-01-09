<?php
session_start();
$bdd = new PDO('mysql:host=127.0.0.1;dbname=livreor','root','');
$connexion = mysqli_connect("localhost","root","","livreor");
 $log = $_SESSION['login'];
 $_SESSION['login'];
//      CONECTION BASE DE DONNER PDO

if(isset($_SESSION['login'])) 
{
  
  
 
    
                // WHEN YOU PUSH BUTTON test 1

     // $login = $_SESSION['login']; //evite l'injection ?? what the fuck??
      if (!empty($_POST['modif']))
       {       
       $login = htmlspecialchars($_POST['newlogin']) ; //evite l'injection ?? what the fuck??
    //   $password = sha1($_POST['newpassword']);//sha1 achage
    //   $password2 = sha1($_POST['newpassword2']);//sha1 et un cryptage mais c mieux hash //
echo "string";
           //   if ( (strlen($login)) >0  )
           //     {
            //     $getid = intval($_POST['newpassword']); //securise la variable evite l'injection de text bizare                   //REQUETE PDO
             //    $id = $_SESSION['id'];
                 //$_SESSION['login']; //= $login;
             //    $sessionlogin = $_SESSION['login'];
                   echo "deux";       
  //   REQUETE ET EXUCUSION EN MYSQLI
 /*    */
  
                     //    if ( strlen($_POST["newpassword"]) >3 && strlen($_POST["newpassword2"]) >3 && $_POST["newpassword"] == $_POST["newpassword2"])
                      //   { 
                            //  $requete2 = "UPDATE utilisateurs SET login = '$login', password = '$password' WHERE login = '".$_SESSION['login']."'";
//$query2=mysqli_query($connexion,$requete2);

                        //  $sql="UPDATE users SET password='$nmdp' WHERE login='$login'";
//$result=mysql_query($sql);
                           //DERNIER TEST
                     //   $requetmodif = "UPDATE utilisateurs SET login='$login', password='$password' WHERE login = '$log'";
 //  $inser= mysqli_query($connexion, $requetmodif);
  //$data = mysqli_fetch_all($inser);
 // $inser->fetch_assoc($inser);

if(isset($_POST['newlogin']) AND !empty($_POST['newlogin']) AND $_POST['newlogin'] != $user['login']) {
      $newpseudo = htmlspecialchars($_POST['newlogin']);
      $insertpseudo = $bdd->prepare("UPDATE utilisateurs SET login = ? WHERE id = ?");
      $insertpseudo->execute(array($login, $_SESSION['id']));
      header('Location: livre-or/livreor.php');

      if(isset($_POST['newpassword']) AND !empty($_POST['newpassword']) AND isset($_POST['newpassword2']) AND !empty($_POST['newpassword2'])) {
      $mdp1 = sha1($_POST['newpassword']);
      $mdp2 = sha1($_POST['newpassword2']);
      if($mdp1 == $mdp2) {
         $insertmdp = $bdd->prepare("UPDATE utilisateurs SET password = ? WHERE id = ?");
         $insertmdp->execute(array($mdp1, $_SESSION['id']));
         header("location: livre-or.php?id=".$_SESSION['id']);
      } else {
         $erreur = "Vos deux mdp ne correspondent pas !";
      }

var_dump($data);

                           //RESUATTE POUR CHANGER LE LOGIN
                         // $requser=$bdd->prepare("UPDATE utilisateurs SET login=$login where login='$sessionlogin'");
                         // $requser->execute(array());// what a fuck (repure infos via url??)
                         // $userinfo = $requser->fetch();
                        //  $_SESSION['login'] = $login;
                        //REQUETTE POUR CHANGER LE PASSWORD
                     //  $reqmdp = $bdd->prepare("UPDATE utilisateurs SET password = $password where id=$id");
                      //  $reqmdp->execute(array());// what a fuck (repure infos via url??)
                     //   $usermdp = $reqmdp->fetch();
                   //     var_dump($reqmdp);
 
                             $erreur = "le profil a eté modifié !";
}
       else
                 {
                   $erreur = "les mots de passe ne doivent pas etre different et doivent faire au moin 4 caractere";
                 } 
        }
 
             else
                {
                   $erreur="completer les trois champ pour modifier";
                }    
              }
else
                {
                   $erreur="completer les trois champ pour modifier";
                }
                $reqecolog = "SELECT  login FROM utilisateurs where id='".$_SESSION['id']."'";
$reqlog = mysqli_query($connexion,$reqecolog);
$loginid = mysqli_fetch_row($reqlog);

?>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/nav.css">
  <link rel="stylesheet" type="text/css" href="css/modif-profil.css">
  <title>profil</title>
</head>

<body class="oc-body-accueil-btp">
  <div class="oc-backgroud-btp">
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
  <li class="oc-onglet"><a class="oc-nav-marg" href="contact.php">contact</li></a>
  </ul>
  </nav>  
</header>

     <section class="section1-modif-profil">  
        <article class="paneaulogin">
            <h1 class="titrelogin">modifier votre profil !</h1>
          <form  method="POST" action="" >
        <table class="tableconnexionprofil" >
          <tr>
            <td>
              <label  for="newlogin"> login :</label>
        </td>
        <td>
              <input type="text" name="newlogin" placeholder="ecrire votre pseudo" value=<?php if(isset($loginid[0])){echo $loginid[0];} ?> >
            </td>
          </tr>
       
              <tr>
               <td>
                <label  for="newpassword">nouveau mot de passe :</label>
              </td>
              <td>
            
                <input type="password" name="newpassword" placeholder="ecrire votre mot de passe">
              </td>
          </tr>
          <tr>
               <td>
                <label  for="newpassword2">confirmer votre nouveau mot de passe :</label>
              </td>
              <td>
                <input type="password" name="newpassword2" placeholder="ecrire votre mot de passe">
              </td>
          </tr>         
        </table>
        <br/>
                <input class="butonconexion-modif" type="submit" name="modif" value="modifier le profil"/>    
          </form>


  <?php
      //MESSAGE D'ERREUR!!



    if (isset($erreur))
     {
      echo '<font color="red">'.$erreur.'</font>';
    }
  ?>
      
        </article>
    
       </section>

              <!--FOOTER-->
<footer>
           
</footer>

    
   

</body>
</html>

<?php 
}
else 
{
  echo "vous n'etes pas connecter !";

echo "<li >.<a  href=\"index.php\">revenir a l'Accueil en cliquant sur se liens</a></li>";
   //si l'id de session n'est pas touver !
}
?>