<?php 
$error = array();
$notGood="ce n'est pas bon !";
$regexBirthday ="/^(?:(?:31(\/|-|\.)(?:0?[13578]|1[02]))\1|(?:(?:29|30)(\/|-|\.)(?:0?[13-9]|1[0-2])\2))(?:(?:1[6-9]|[2-9]\d)?\d{2})$|^(?:29(\/|-|\.)0?2\3(?:(?:(?:1[6-9]|[2-9]\d)?(?:0[48]|[2468][048]|[13579][26])|(?:(?:16|[2468][048]|[3579][26])00))))$|^(?:0?[1-9]|1\d|2[0-8])(\/|-|\.)(?:(?:0?[1-9])|(?:1[0-2]))\4(?:(?:1[6-9]|[2-9]\d)?\d{2})$/"
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


    // civilite 
    $gender = trim(filter_input(INPUT_POST, 'gender', FILTER_SANITIZE_NUMBER_INT, FILTER_FLAG_NO_ENCODE_QUOTES));
        if(empty($gender)){
            $errorsArray['gender_error']= 'Le champ n\'est pas rempli';
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


  
    // DATE D'ANNIVERSAIRE 
    // On verifie l'existance et on nettoie
    $birthDate = trim(filter_input(INPUT_POST, 'birthDate', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES));

    //On test si le champ n'est pas vide
    if(!empty($birthDate)){
        // On test la valeur
        $testRegex = preg_match($regexBirthday,$birthDate);

        // On peut aller plus loin sur le test de la date à cet endroit

        if($testRegex == false){
            $errorsArray['birthDate_error'] = 'Le date n\'est pas valide, le format attendu est YYYY-MM-JJ';
        }
    }else{
        $errorsArray['birthDate_error'] = 'Le champ n\'est pas rempli';
    }
}
?> 