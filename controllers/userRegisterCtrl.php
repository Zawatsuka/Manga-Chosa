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
                var_dump($data);

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
        

    }
