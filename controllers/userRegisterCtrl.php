<?php 
    include('regex.php');
    function validateData($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        $data = nl2br($data);
        return $data;
    }

    
    function testData($data, $regex, $nameOfInput)
    {
        
        if (!empty($data)) {
            // On test la valeur
            $testRegex = preg_match($regex, $data);

            if ($testRegex == false) {
                return  $nameOfInput . ' n\'est pas valide';
            }
        } else {
            return 'Le champ n\'est pas rempli';   
        }
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $errorsArray = array();
    // verification de l'adresse mail
    $mail = isset($_POST['mail']) && !empty($_POST['mail']) ? validateData($_POST['mail']) : '';
    testData($mail, $regexEmail,'Adresse Email')== NULL ?? array_push($errorsArray,testData($mail, $regexEmail,'Adresse Email'));  

    // verification du mot de passe 
    $password = isset($_POST['password']) && !empty($_POST['password']) ? validateData($_POST['password']) : '';
    testData($password, $regexPassword,'mot de passe')== NULL ?? array_push($errorsArray,testData($password, $regexPassword,'mot de passe')) ;
    
     // verification du genre
     $gender = isset($_POST['gender']) && !empty($_POST['gender']) ? validateData($_POST['gender']) : '';
    testData($gender, $regexPseudo,'civilité')== NULL ?? array_push($errorsArray,testData($gender, $regexPseudo,'civilité')) ;

     // verification du pseudo
     $pseudo = isset($_POST['pseudo']) && !empty($_POST['pseudo']) ? validateData($_POST['pseudo']) : '';
    testData($pseudo, $regexPseudo,'pseudo')== NULL ?? array_push($errorsArray,testData($pseudo, $regexPseudo,'pseudo'));

     // verification de l'anniversaire
     $birthDate = isset($_POST['birthDate']) && !empty($_POST['birthDate']) ? validateData($_POST['birthDate']) : '';
    testData($birthDate, $regexBirthDate,'anniversaire')== NULL ?? array_push($errorsArray,testData($birthDate, $regexBirthDate,'anniversaire'));
    }
