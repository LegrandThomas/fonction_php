<?php
namespace thomas;

function checkPassword($password) {

    $messagedebut='<ul class="list-group" style="max-width: 325px"><li class="list-group-item active">le mot de passe doit contenir:';
    $message="";
    $messagefin='</ul>';
    $messagefinal='<div class="p-3 mb-2 bg-success text-white">&ensp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;ok</div>';
    $valeurbarre="0";
    $a='<div class="progress"><div class="progress-bar progress-bar-striped" role="progressbar" style="width: ';
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
            
                                            }
        else  {
            $message.='<li class="list-group-item">contient + de 12 caractères</li>';
            $messagefinal=$messagedebut.$message.$messagefin;
           
            }
            
           echo $progressfin;
           echo '</div>';
           echo '<br>';
           echo $messagefinal;
          
                
}

/*namespace toto;
function checkPassword($password) {
    echo '<h1 class="text-center">thomas</h1>';
}*/
