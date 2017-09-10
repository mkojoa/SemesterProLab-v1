<?php
include("connect_php\connect.php");


     $stdID =$_POST['id'];
     $school=$_POST['sid'];
     $FirstName=$_POST['fname'];
     $LastName=$_POST['lname'];
    $email=$_POST['email'];
     $Gender =$_POST['gender'];
     $password=$_POST['password'];

   //$ToTable = "INSERT INTO school(SchoolID, Name)
     //VALUES('2', 'Central')";

$ToTable = "INSERT INTO student(stdID, FirstName, LastName ,Gender,Password,SchoolID,email)
     VALUES('$stdID', '$FirstName' ,'$LastName','$gender' ,'$password','$school','$email')";


if(mysqli_query($conn, $ToTable)) {
   // echo "Thank you for creating an Account";
    header('Location:submit_Project.php');
} else {
    echo "Error: " . $ToTable . "<br>" . mysqli_error($conn);
}

//mysqli_close($conn);
?>
