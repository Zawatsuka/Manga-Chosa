<?php 
$error = array();
$notGood="ce n'est pas bon !";
    
if(isset($_POST['mail'])){
    $mail = $_POST['mail'];
    if(filter_var($mail, FILTER_SANITIZE_EMAIL)){
        $error['mail'] = $notGood;
    }
} 

?>