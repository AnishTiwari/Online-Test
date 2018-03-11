<?php

session_start();

if (isset($_POST['login']))
{

    $userid= $_POST['userid'];
    $password= $_POST['password'];
       

    include("connection.php");
  $password_hash = password_hash($password, PASSWORD_DEFAULT);
    

    $query= mysqli_query($con,"SELECT * FROM first_year WHERE student_ID = '$userid' ") or die(mysqli_error($con));

    if(password_verify($password, $password_hash)) {
   
if(mysqli_num_rows($query) == 1){
 
                //login the user in
                //echo "user loggedin";
                sleep(1);
                header("Location: student_dashboard.php");
               exit();
    
}
}
   echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Invalid Username & Password')
  window.location.href='../html/welcome.html';
    </SCRIPT>");
    
        
}
?>
