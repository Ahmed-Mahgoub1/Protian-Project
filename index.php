<?php

$firstname = $_REQUEST['firstname'];
$lastname = $_REQUEST['lastname'];
$address = $_REQUEST['address'];
// $gender = $_REQUEST['gender'];
$gmail = $_REQUEST['gmail'];
$number = $_REQUEST['number'];
$age = $_REQUEST['age'];

if(isset($_POST['btn']))
{
    $host="localhost";
    $user="root";
    $password="";
    $db="supplemnt_store";

    $conn = mysqli_connect($host,$user,$password,$db);


    mysqli_select_db($conn,$db);

    
    $insert="INSERT into profit values('$firstname','$lastname','$gmail','$number','$age','$address')";
    
    $result= mysqli_query($conn,$insert);

    if($result){
  echo("Done");
}
else{
      echo("Not Done");

    }
    
  mysqli_close($conn);

}



?>