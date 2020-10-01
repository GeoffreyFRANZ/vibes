<?php

session_start();

foreach ($_POST  as $key => $val) {
    if (!empty($val)) {
        ${$key} =  htmlspecialchars($val);

    } else{
        $_SESSION['error'] = "<p style='text-align:center;margin: 0; padding: 0.5em; background-color:red; color:white;'> le champs '$key' n'as pas été  renseigné ";
        header('location: http://franzgeoffrey.com/vibes');

        exit();
    }
}
        if (!filter_var($mail, FILTER_VALIDATE_EMAIL)){
            $_SESSION['error'] = "<p style='text-align:center;margin: 0; padding: 0.5em; background-color:red; color:white;'>le champ " . $key. " n'est pas valide</p>";
            header('location: http://franzgeoffrey.com/vibes'); 
         exit();
        }


$to = "franz.geoffrey@hotmail.fr";
$message  = " email : " .$mail. " \r\n phone : " .$phone ." \r\n voici la demande de la part de ". $name ."  via le site  vibes: \r\n ".$message;  
$headers =  'mail : ' .$mail . " \r\n tel : " .$phone;


if(mail($to, $sujet  ,$message, $headers )){
    $_SESSION['success'] = "<p style='text-align:center;margin: 0; padding: 0.5em; background-color:green; color:white;'>votre message a bien été envoyé</p>";
    header('location: http://franzgeoffrey.com/vibes');
    exit();
}
else{
    $_SESSION['error'] = 'une erreur est survenue  merci de vérifié la validité de vos coordonnée';  
      header('location: http://franz.geoffrey.com/vibes');

exit();
}

