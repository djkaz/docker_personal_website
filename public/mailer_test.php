<?php

if(isset($_POST['submit'])) {
 

$to = "stefiaxe@gmail.com";
$subject = "Customer hardware and software services";
//$name_field = $_POST['name'];
//$email_field = $_POST['email'];

  #-----validatename---
$name_field = $_POST["name"];
    if(!preg_match("/^[a-zA-Z-' ]*$/", $name_field)){
        $userNameErr = "Only letters and white space allowed";
    }
    #-----validatename---

    #-----validateemail---
if(isset($_POST['email'])){
       $email_field = $_POST['email'];
        if(filter_var($email_field, FILTER_VALIDATE_EMAIL))
        {
            echo("E-mail is valid");
            //mail($to, $subject, $body);
            header( 'Location: http://www.direwolf.ro' );
        }
        else
        {
            #echo("E-mail is not valid");
            header( 'Location: http://www.direwolf.ro');
            die("<b>ERROR!</b> E-mail is not valid");
            
        }     
}
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





<!--- 

    if((empty($_POST['myName'])) || (empty($_POST['myEmail'])) || (empty($_POST['myMessage']))){
        header( 'Location: http://www.direwolf.ro' );
        die("<b>ERROR!</b> All fields must be filled.");
    
    }
	
	$userName 		= $_POST['myName'];
	$userEmail	 	= $_POST['myEmail'];
	$userMessage 	= $_POST['myMessage'];

    // Headers
    //$headers  = 'MIME-Version: 1.0' . "\r\n";
    //$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    // Additional headers
    $headers .= 'From: Direwolf webservices <alex.tiron@direwolf.ro>' . "\r\n";  

	$to 			= "stefiaxe@gmail.com";
	$subject 		= "Email from my website";
	$body 			= "Information Submitted:";

	$body .= "\r\n Name: " . $userName;
	$body .= "\r\n Email: " . $userEmail;
	$body .= "\r\n Message: " . $userMessage;


    #-----validatename---
    $userName = $_POST["myName"];
    if(!preg_match("/^[a-zA-Z-' ]*$/", $userName)){
        $userNameErr = "Only letters and white space allowed";
    }
    #-----validatename---

    #-----validateemail---
    if(isset($_POST['myEmail'])){
       $userEmail = $_POST['myEmail'];
        if(filter_var($userEmail, FILTER_VALIDATE_EMAIL))
        {
            #echo("E-mail is valid");
            mail($to, $subject, $body);
            header( 'Location: http://www.direwolf.ro' );
        }
        else
        {
            #echo("E-mail is not valid");
            header( 'Location: http://www.direwolf.ro');
            die("<b>ERROR!</b> E-mail is not valid");
            
        }     
    }


-->