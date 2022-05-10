<?php
  // include ("/public_html/functions/thomas.php");
  function check_Password($password) {

    $messagedebut='<ul class="list-group" style="max-width: 325px">le mot de passe doit contenir:';
    $message="";
    $messagefin="</ul>";

    $valeurbarre="0";
    $a='<div class="progress"><div class="progress-bar" role="progressbar" style="width: ';
    $b='%; aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">';
    $c='%</div>';
    $progressfin=$a.$valeurbarre.$b.$valeurbarre.$c;
    echo '<h1 class="text-center">thomas</h1>';
    ?>
    <div>
    Mot de passe :    </div><div id="mdp">  <?php echo $_GET['password'];
         ?>
   </div>
    <div>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; force du mot de passe  </div>
    <?php
    $pwd=$password;
    if( preg_match("#[a-z]+#", $pwd) ) {
        
        $valeurbarre=($valeurbarre+20);
        $progressfin=$a.$valeurbarre.$b.$valeurbarre.$c;

    }
        else  {
             $message=$message.'<li class="list-group-item">contient une minuscule</li>';
             $messagefinal=$messagedebut.$message.$messagefin;
            
             
              }
        if( preg_match("#[A-Z]+#", $pwd) ) {
            $valeurbarre=($valeurbarre+20);
            $progressfin=$a.$valeurbarre.$b.$valeurbarre.$c;
             
                                            }
        else  {
            $message.='<li class="list-group-item">contient une Majuscule</li>';
            $messagefinal=$messagedebut.$message.$messagefin;
           
              }
        if(preg_match("#\W+#", $pwd) ) {
            $valeurbarre=($valeurbarre+20);
            $progressfin=$a.$valeurbarre.$b.$valeurbarre.$c;
                                            }
    
        else  {
            $message.='<li class="list-group-item">contient un caractère spécial</li>';
            $messagefinal=$messagedebut.$message.$messagefin;
         
              }
        if( preg_match("#[0-9]+#", $pwd) ) {
            $valeurbarre=($valeurbarre+20);
            $progressfin=$a.$valeurbarre.$b.$valeurbarre.$c;
                                            }
        else  {
            $message.='<li class="list-group-item">contient un nombre</li>';
            $messagefinal=$messagedebut.$message.$messagefin;
           
              }
        if( strlen($pwd) > 12 ) {
            $valeurbarre=($valeurbarre+20);
            $progressfin=$a.$valeurbarre.$b.$valeurbarre.$c;
            $messagefinal='ok';
                                            }
        else  {
            $message.='<li class="list-group-item">contient + de 12 caractères</li>';
            $messagefinal=$messagedebut.$message.$messagefin;
           
            }
            
           echo $progressfin;
           echo '</div>';
           echo $messagefinal;
                
}

function  entreMDP(){
    echo '<script type="text/javascript"> ';
    echo 'var inputname = prompt("entrer un mot de passe", "");';
    echo 'alert(inputname);';
    echo '</script>';
}



?>

<!DOCTYPE html>
<html lang="fr">
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>PHP - Les fonctions</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    </head>
    <body>
   
        <div class="container py-3">

            <?php

            if (isset($_GET['password'])) {

                $password = $_GET['password'];

                // I use my personal function with my namespace
                // ...
               

               check_Password($password);
            }
            else {
              
                ?>
 
                <div class="alert alert-info" role="alert">
                    <h4 class="alert-heading">Bonjour et bienvenue 🙂</h4>
                    <p>Vérifions si votre mot de passe est bien sécurisé !</p>
                    <hr>
                    <p>Pour celà, il vous suffit de le renseigner directement dans l'URL comme dans l'example ci-dessous :</p>
                    <a href="index.php?password=motdepasse" class="link-primary mb-0">index.php?password=motdepasse</a>
                </div>

                <?php
               
            }
           
            ?>

        </div>
        <div>
        <button onclick ="entreMDP()"> entrer votre mot de passe </button >
     
    
        <?php
           // entreMDP();

        ?>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    </body>
</html>
