<?php
include("functions/thomas.php");
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
  
        <div class="container py-3" >

            <?php

            if (isset($_GET['password'])) {

                $password = $_GET['password'];

                // I use my personal function with my namespace
                // ...

                thomas\checkPassword($password);

               ?>
            </div>
            
                  <br>
                  <div class="text-center">
                 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                 tester votre mot de pass
                 </button>
                 </div>

                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">tester votre mdp</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <form method="get" name="form" action="index.php">
               <input  type="text" placeholder="Enter mdp" name="password">
               <input type="submit" value="test mdp">
               </form>
                </div>
                <div class="modal-footer">
                </div>
                </div>
                </div>
                </div>

              </div>
                <!--<form action='index.php?password=.$result'  method="GET" >
               <button  type="submit" onclick ="affiche()"> entrer votre mot de passe </button >
              <a href='index.php?password=' <?php echo $password; ?>><button onclick ="affiche()"> entrer votre mot de passe </button ></a>
              </form>

                </div>
                <script type="text/javascript">
                var receveur = document.getElementById("mdp");
                function affiche() {
                receveur.innerHTML = entreMDP();
                $password=receveur.innerHTML;
                
                                    }   

                function  entreMDP(){
                let mdpuser=prompt("enter votre mot de passe", "");
                localStorage.setItem('password', mdpuser);
                var test = localStorage.getItem('password');
              
                return test;
                                       }     
               </script>
             
               <?php
                   //entreMDP();
               // $_GET[$password];
               $result = $_GET['password'];
               //print_r ($password);
               //print_r ($test);
               //print_r ($result);
              
               ?>
               </div>
                 -->                
               <?php
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
       


        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    </body>
</html>
