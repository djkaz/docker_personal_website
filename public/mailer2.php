
<?php
if(isset($_POST['submit'])) {
 

$to = "stefiaxe@gmail.com";
$subject = "Customer hardware and software services";
$name_field = $_POST['name'];
$email_field = $_POST['email'];
$message = $_POST['message'];
 
foreach($_POST['check'] as $value) {

    $check_msg .= "The customer has chosen: $value\n";

}
 
$body = "From: $name_field\n E-Mail: $email_field\n Message:\n $message\n $check_msg";
 
    /*echo "Data has been submitted to $to!";*/
    header( 'Location: http://www.direwolf.ro');
    mail($to, $subject, $body);
 
} else {

echo "It died!";

}
?>
