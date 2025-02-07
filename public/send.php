<?php

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



?>