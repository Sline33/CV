<?php        

// Ma clé privée
$secret = "6LeuNQITAAAAAHwUcbXbyFCUudJKRAjcgNRwlaoE";

// Paramètre renvoyé par le recaptcha
$response = $_POST['g-recaptcha-response'];

// On récupère l'IP de l'utilisateur
$remoteip = $_SERVER['REMOTE_ADDR'];

$api_url = "https://www.google.com/recaptcha/api/siteverify?secret=" 
        . $secret
        . "&response=" . $response
        . "&remoteip=" . $remoteip ;

$decode = json_decode(file_get_contents($api_url), true);
	if ($decode['success'] == true) {
		// C'est un humain
	}
	else {
		// C'est un robot ou le code de vérification est incorrecte
	}

$errors = [];
if(!array_key_exists('name', $_POST) || $_POST['name'] == ''){
    $errors['name'] = 'Vous n\'avez pas renseigné votre nom !';
}
if(!array_key_exists('email', $_POST) || $_POST['email'] == '' || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
    $errors['email'] = 'Vous n\'avez pas renseigné un email valide !';
}
if(!array_key_exists('subject', $_POST) || $_POST['subject'] == ''){
    $errors['subject'] = 'Vous n\'avez pas renseigné votre subject !';
}
if(!array_key_exists('message', $_POST) || $_POST['message'] == ''){
    $errors['message'] = 'Vous n\'avez pas renseigné votre message !';
}
if($_POST['g-recaptcha-response'] == false){
    $errors['captcha'] = 'Merci de vérifier que vous n\'êtes pas un bot !';
}

session_start();

if(!empty($errors)){
    
    $_SESSION['errors'] = $errors;
    $_SESSION['inputs'] = $_POST;
    header('Location: contact.php#errors');
} else {
    $_SESSION['success'] = 1;

    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);
    
    $headers  = 'FROM:'. $email. "\r\n" . 'X-Mailer: PHP/' . phpversion();
    
    mail('contactez-moi@benjamin-martinez.fr', $subject, $message, $headers);
    header('Location: contact.php#success');
}
?>