<!DOCTYPE html>
<html>

<head>
    <title>livre-or</title>
    <meta sharset="utf-8">
    <link rel="stylesheet" href="inscription.css">
    </head>

        
<body>
    <header>
        <nav>
            <ul>
                <li><a href="connexion.php">Connexion</a></li>
                <li><a href="index.php">Index</a></li>
                <li><a href="commentaire.php">Commentaires</a></li>
            </ul>
        </nav>
    </header>

<div class="align">  
    <p><strong> Inscrivez-vous à </p><p class="nom"> "PROTECT ANIMAL"</strong></p>
</div>

        <form id="form1" action="inscription.php" method ="POST">
            <label>Login</label><br>
            <input type ="text" name ="login" placeholder ="Entrez votre login"/><br><br>
            <label>Password</label><br>
            <input type ="password" name ="psw" placeholder ="Entrez votre password"/><br><br>
            <label>Confirmez le Password</label><br>
            <input type ="password" name ="confirm" placeholder ="Confirmez votre password"/><br><br>
            <input type = "submit" value="s'inscrire" name="submit"/>
        </form>

        <?php

$connexion= mysqli_connect("localhost","root","","livreor");

$requete= "select * from utilisateurs";

$query= mysqli_query($connexion, $requete);

$resultat= mysqli_fetch_all($query);


if(isset($_POST['submit']))
{
    $login= $_POST['login'];
    $psw= $_POST['psw'];
    $confirm= $_POST['confirm'];


     if(!empty($login) && !empty($psw) && !empty($confirm))
        { 
                    $connexion= mysqli_connect("localhost","root","","livreor");
                    $newlogin="SELECT id FROM utilisateurs WHERE login='".$login."'";
                    $reponse=mysqli_query($connexion,$newlogin);
                    $numberlogin=mysqli_fetch_all($reponse);
                    var_dump($numberlogin);
                if(empty($numberlogin))
                {
                   

                    if($psw==$confirm)
                    {
                        $psw=password_hash($psw,PASSWORD_BCRYPT);
                        $newinsert="INSERT INTO `utilisateurs` (`id`, `login`, `password`) VALUES (NULL, '".$login."', '".$psw."');";
                        $reponse=mysqli_query($connexion,$newinsert);
                        
                        
                    }
                     else
                    {
                            echo "Les passwords doivent etre identiques.";
                    }
                }   
                else
                {
                    echo "Ce login est dejà utilisé.";
                }
        }
        else
        {
            echo "Tous les champs doivent etre remplis.";    
        }
         
                 
        
}
       
?>   

    <footer id="logo">
    
         <img height="60" src="footeror.webp">
                
    </footer>
    

</body>