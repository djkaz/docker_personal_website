<?php
$services=$_POST['services'];
foreach($services as $value){ 
    echo $value;
    header( 'Location: http://www.direwolf.ro' );
    };
?>