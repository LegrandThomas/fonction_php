<?php
namespace thomas;

function checkPassword($password) {

    $messagedebut='</div><div class="col-4 mx-auto"><ul class="list-group" style="max-width: 325px"><li class="list-group-item active">le mot de passe doit contenir au moins:';
    $message="";
    $messagefin='</ul></div>';
    $messagefinal='<div class="row mx-auto mt-4 bg-success text-white"  style="width: 25px"  >ok</div>';

    $valeurbarre="0";
    $a='<div class="progress"><div class="progress-bar progress-bar-striped ';
    $a1='" role="progressbar" style="width: ';
    $b='%; aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">';
    $c='%</div>';

    $progressfin=$a.$a1.$valeurbarre.$b.$valeurbarre.$c;
    
    echo '<h1 class="text-center">thomas</h1>';
    
    ?>
    <div id="mdp">
    Mot de passe :      <?php echo $_GET['password'];?>
        
   </div>
    <div class="text-end mb-0"> force du mot de passe  </div>
    <?php
    $pwd=$password;
    if( preg_match("#[a-z]+#", $pwd) ) {
        $valeurbarre=($valeurbarre+20);
        $a='<div class="progress"><div class="progress-bar progress-bar-striped bg-danger';        
    }
        else  {
             $message=$message.'<li class="list-group-item">1 minuscule</li>';
             $messagefinal=$messagedebut.$message.$messagefin;
              }
        if( preg_match("#[A-Z]+#", $pwd) ) {
            $valeurbarre=($valeurbarre+20);
            $a='<div class="progress"><div class="progress-bar progress-bar-striped bg-warning';
            $progressfin=$a.$a1.$valeurbarre.$b.$valeurbarre.$c;
                                            }
        else  {
            $message.='<li class="list-group-item">1 Majuscule</li>';
            $messagefinal=$messagedebut.$message.$messagefin;
              }
        if(preg_match("#\W+#", $pwd) ) {
            $valeurbarre=($valeurbarre+20);
            $a='<div class="progress"><div class="progress-bar progress-bar-striped bg-info';
            $progressfin=$a.$a1.$valeurbarre.$b.$valeurbarre.$c;
                                            }
    
        else  {
            $message.='<li class="list-group-item">1 caractère spécial</li>';
            $messagefinal=$messagedebut.$message.$messagefin;
              }
        if( preg_match("#[0-9]+#", $pwd) ) {
            $valeurbarre=($valeurbarre+20);
            $a='<div class="progress"><div class="progress-bar progress-bar-striped';
            $progressfin=$a.$a1.$valeurbarre.$b.$valeurbarre.$c;
                                            }
        else  {
            $message.='<li class="list-group-item">1 nombre</li>';
            $messagefinal=$messagedebut.$message.$messagefin;
              }
        if( strlen($pwd) > 11 ) {
            $valeurbarre=($valeurbarre+20);
            $a='<div class="progress"><div class="progress-bar progress-bar-striped bg-success';
            $progressfin=$a.$a1.$valeurbarre.$b.$valeurbarre.$c;
                                            }
        else  {
            $message.='<li class="list-group-item">12 caractères </li>';
            $messagefinal=$messagedebut.$message.$messagefin;
            }
           $progressfin=$a.$a1.$valeurbarre.$b.$valeurbarre.$c;
           echo $progressfin;
           echo '</div>';
           echo '<br>';
           echo $messagefinal;
}

/*namespace toto;
function checkPassword($password) {
    echo '<h1 class="text-center">thomas</h1>';
}*/
