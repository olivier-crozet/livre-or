<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/nav.css">
    <link rel="stylesheet" type="text/css" href="css/Contact.css">
    <meta charset="utf-8">
    <title>Contact</title>
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
  <li class="oc-onglet"><a class="oc-nav-marg" href="contact.php">contact</li></a>
  </ul>
  </nav>    
</header>    
    <h1 class="titre1">Contact</h1>
    
    <form method="post">
     <table class="tableau-form">
     <tr>
         <td><label>Email</label></td>       
        <td><input class="input" type="email" name="email" required></td>
    </tr>
    <tr>
        <td><label>Message</label></td>
        <td><textarea class="input" name="message" required></textarea></td>
    </tr>
    </table><br/>

        <input class="bouton" type="submit" name="envoi" value="envoyé">
    </form>
    
    <?php
    if (isset($_POST['message'])) {
        $position_arobase = strpos($_POST['email'], '@');
        if ($position_arobase === false)
            echo '<p>Votre email doit comporter un arobase.</p>';
        else {
            $retour = mail('olivier-crozet@laplateforme.io', 'Envoi depuis la page Contact', $_POST['message'], 'From: ' . $_POST['email']);
            if($retour)
                echo '<p>Votre message a été envoyé.</p>';
            else
                echo '<p>Erreur.</p>';
        }
    }
?>
</body>
</html>