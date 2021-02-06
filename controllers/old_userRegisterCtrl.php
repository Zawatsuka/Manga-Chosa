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

    $errorsArray = array();
    function testData($data, $regex, $nameOfError, $nameOfInput)
    {
        if (!empty($data)) {
            // On test la valeur
            $testRegex = preg_match($regex, $data);

            if ($testRegex == false) {
                $errorsArray[$nameOfError] = 'le ' . $nameOfInput . ' n\'est pas valide';
            }
        } else {
            $errorsArray[$nameOfError] = 'Le champ n\'est pas rempli';
        }
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
    // verification de l'adresse mail
        $mail = isset($_POST['mail']) && !empty($_POST['mail']) ? validateData($_POST['mail']) : '';
        testData($mail, $regexEmail, 'mail_error', 'Adresse Email');

    // verification du mot de passe 
        $password = isset($_POST['password']) && !empty($_POST['password']) ? validateData($_POST['password'], 'password') : '';
        testData($password, $regexPassword, 'password_error', 'mot de passe');
    
     // verification du genre
     $gender = isset($_POST['gender']) && !empty($_POST['gender']) ? validateData($_POST['gender'], 'gender') : '';
     testData($gender, $regexPseudo, 'gender_error', 'civilité');

     // verification du pseudo
     $pseudo = isset($_POST['pseudo']) && !empty($_POST['pseudo']) ? validateData($_POST['pseudo'], 'pseudo') : '';
     testData($pseudo, $regexPseudo, 'pseudo_error', 'pseudo');

     // verification de l'anniversaire
     $birthDate = isset($_POST['birthDate']) && !empty($_POST['birthDate']) ? validateData($_POST['birthDate'], 'birthDate') : '';
     testData($birthDate, $regexBirthDate, 'birthDate_error', 'anniversaire');

    }
