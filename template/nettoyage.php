<?php 
$error = array();
$notGood="ce n'est pas bon !";
    
// verification de l'email 
if(isset($_POST['mail'])){
    $mail = $_POST['mail'];
    if(!filter_var($mail, FILTER_SANITIZE_EMAIL)){
        $error['mail'] = $notGood;
    }
} 

// verification du pseudo
if(isset($_POST['pseudo'])){
    $pseudo = $_POST['pseudo'];
    $pseudo = filter_var($pseudo, FILTER_SANITIZE_STRING);
    if(!preg_match('/^.{3,32}$/' , $pseudo)){
        $error['pseudo'] = $notGood;
    }
}

?>