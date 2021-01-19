<?php 
$error = array();
$notGood="ce n'est pas bon !";
//On ne controle que s'il y a des données envoyées 
if($_SERVER['REQUEST_METHOD'] == 'POST'){

    // mail 
    $mail = trim(filter_input(INPUT_POST, 'mail', FILTER_SANITIZE_EMAIL));

    //On test si le champ n'est pas vide
    if(!empty($mail)){
        // On test la valeur
        $testMail = filter_var($mail, FILTER_VALIDATE_EMAIL);

        if($testMail == false){
            $errorsArray['mail_error'] = 'Le mail n\'est pas valide';
        }
    }else{
        $errorsArray['mail_error'] = 'Le champ n\'est pas rempli';
    }


     // password
     // On verifie l'existance et on nettoie
     $password = trim(filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES));
     $rePassword = trim(filter_input(INPUT_POST, 'rePassword', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES));
 
     //On test si le champ n'est pas vide
     if(!empty($password)){
         // On test la valeur
         if($password != $rePassword){
             $errorsArray['password_error'] = 'Les mots de passe ne correspondent pas';
         }
     }else{
         $errorsArray['password_error'] = 'Les champs password sont vides';
     }
     
     if(!empty($rePassword)){
        if($rePassword != $password ){
            $errorsArray['rePassword_error'] = 'Les mots de passe ne correspondent pas';
        }
    }else{
            $errorsArray['rePassword_error'] = 'Les champs password sont vides';
        }





    // pseudo
     // On verifie l'existance et on nettoie
     $pseudo = trim(filter_input(INPUT_POST, 'pseudo', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES));
 
     //On test si le champ n'est pas vide
     if(!empty($pseudo)){
         // On test la valeur
         $testRegex = preg_match('/^.{3,32}$/',$pseudo);
 
         if($testRegex == false){
             $errorsArray['pseudo_error'] = 'Le pseudo n\'est pas valide';
         }
     }else{
         $errorsArray['pseudo_error'] = 'Le champ n\'est pas rempli';
     }
}



    
?>