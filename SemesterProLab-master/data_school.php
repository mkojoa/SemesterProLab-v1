<?php
include("connect_php\connect.php");
// this is the school details

 $name=$_POST['sch_name'];
 $location=$_POST['sch_loc'];
$depart=$_POST['depart'];
$Hod=$_POST['hod'];
$program=$_POST['prog'];
$stud_id=$_POST['stud_id'];
$Fn =$_POST['fname'];
$Ln =$_POST['lname'];
$date_birth =$_POST['dob'];
$em =$_POST['mail'];
$gn =$_POST['gender'];
$lev =$_POST['level'];
$phone=$_POST['phone'];
$cou_name =$_POST['c_name'];
$describe =$_POST['desc'];
//inserting into the school table
$sql= "INSERT INTO school(school_name,school_location)
   VALUES('$name','$location')";

   if(mysqli_query($conn, $sql)){
    header('Location:submit_Project.php');
   } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
   }
?>


<?php
include("connect_php\connect.php");
$sql ="INSERT INTO department(DepartmentName,Hod)
              VALUES('$depart','$Hod')";
      if(mysqli_query($conn, $sql)){
               header('Location:submit_Project.php');
              } else {
               echo "Error: " . $sql . "<br>" . mysqli_error($conn);
              }
 ?>


 <?php
 include("connect_php\connect.php");
 $sql ="INSERT INTO program(program_name)
                      VALUES('$program')";

                      if(mysqli_query($conn, $sql)){
                       header('Location:submit_Project.php');
                      } else {
                       echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                      }
  ?>



<?php
  include("connect_php\connect.php");
$sql = "INSERT INTO student(StudentID,Fname,Lname,Date_Of_Birth,Email,gender,level,phone,c_name,c_desc)
VALUES('$stud_id','$Fn','$Ln','$date_birth','$em','$gn','$lev','$phone','$cou_name','$describe')";


if(mysqli_query($conn, $sql)){
 header('Location:submit_Project.php');
} else {
 echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
//end of this form when the user is direct
?>
