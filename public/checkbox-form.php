
<?php
/*if(isset($_POST['formDoor'])) {
  $aDoor = $_POST['formDoor'];
  if(empty($aDoor)) {
     echo("You didn't select any buildings.");
  } else {
    $N = count($aDoor);
    echo("You selected the $N door(s): ");
    echo(implode(" ", $aDoor));
  }
}
*/

  $aDoor = $_POST['formDoor'];
  if(empty($aDoor)) 
  {
     echo("You didn't select any services. <br>");
  }
  else 
  {
    $N = count($aDoor);

    echo("You selected the $N services: ");
    for($i=0; $i < $N; $i++) {
        echo($aDoor[$i] . " " . "<br>");
    }

    //Checking if a particular checkbox  is selected
    if(IsChecked('formDoor','A')){
        echo '<br>A is checked <br>';
    }
    if(IsChecked('formDoor','B')){
        echo 'B is checked <br>';
    }
    if(IsChecked('formDoor','C')){
        echo 'C is checked <br>';
    }
    if(IsChecked('formDoor','D')){
        echo 'D is checked <br>';
    }
  }

  function IsChecked($chkname,$value) {
     if(!empty($_POST[$chkname]))
      {
        foreach($_POST[$chkname] as $chkval)  
          {
              if($chkval == $value) {
                  return true;
              }
          }    
      }
      return false;
  }

$to = 'stefiaxe@gmail.com';
$subject = 'Checkbox Values';

// Get checkbox values from form submission
if(isset($_POST['formDoor'])) {
  $checkvalues = implode(', ', $_POST['formDoor']);
}

$message = "Selected Checkbox Values: ".$checkvalues;


/*
  $aDoor = $_POST['formDoor'];
  if(empty($aDoor)) 
  {
    echo("You didn't select any buildings.");
  } 
  else 
  {
    $N = count($aDoor);

    echo("You selected $N door(s): ");
    for($i=0; $i < $N; $i++)
    {
      echo($aDoor[$i] . " ");
    }
  }
*/

?>

