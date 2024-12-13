
<?php
include "connection.php";
// Select database
mysqli_select_db($con, "e-commerce");

$sql= "create table if not exists Feedback
(  Name varchar(20),
   Email varchar(10) not null primary key,
    ContactNumber varchar(10) ,
   Message varchar(200))";

mysqli_query($con,$sql);

$sql="insert into Feedback (Name, Email, ContactNumber, Message) 
values ('$_POST[name]','$_POST[email]','$_POST[phone]','$_POST[message]')";

if(mysqli_query($con,$sql))

{
 
  echo "<script type='text/javascript'>
         alert('registered Success');
          </script>";                                                                                                                                       
}else{
  echo "Error: " . mysqli_error($con);
  echo "<script type='text/javascript'>
  alert('registered failed');
   </script>";  
}
?>
