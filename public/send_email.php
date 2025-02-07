<php
    if(isset($_POST['options'])){
    $to = "stefiaxe@gmail.com";
    $subject = "Selected options";
    $message = "Selected services have been delivered";
    
    foreach ($_POST['options'] as $option) {
        $message .= $option."\n";
    }

    $headers = "From: alex.tiron@direwolf.ro"."\r\n".
               "Reply-To: alex.tiron@direwolf.ro"."\r\n".
               "X-Mailer: PHP/".phpversion();
    
    mail($to, $subject, $message, $headers);
}
?>
