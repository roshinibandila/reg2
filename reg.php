<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "roshini";


$conn = mysqli_connect($servername , $username , $password , $db_name);  
if(mysqli_connect_errno()) {  
    die("Failed to connect with MySQL: ". mysqli_connect_error());  
}
else
{
   $fname = $_POST['fname'];
   $lname = $_POST['lname'];
   $email = $_POST['email'];
   $password = $_POST['password'];

   $sql = "INSERT INTO `user2`( `fname`, `lname` , `email`,`password`)  VALUES ('$fname','$lname', '$email','$password') ";
   $qry = mysqli_query($conn , $sql);
   if($qry)
   {
echo "registration done sucess";
   }
   else
   {
      echo "somethind wrong";
      echo " error description:", mysqli_error($conn);
   }
   mysqli_close($conn);
}
?>