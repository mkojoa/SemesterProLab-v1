<!DOCTYPE html>
<html>
<head>
<title> www.semesterpro.com</title>

<link href="style.css" rel="stylesheet" type="text/css" />

<!--the name& the home menus-->
<div id="topbar">
  <h1 id="sitename"><a href="#" target="_blank">SemesterProLab</a></h1>
  <div id="menus">
  <ul id="topmenu">
<li  class="active"><a href="index.php">Home</a></li>
<li><a href="SpLab.php">SpLab</a></li>
<li><a href="about.php">About</a></li>
<li><a href="Login.php">Login</a></li>
<li><a href="Sign_up.php">Sign up</a></li>
</ul>
</div>
</div>
<!--end-->
<div class="startme">

</div>

</head>
  <body>

    <div class="wrap">
    	<br>
      <div id="sidebarbottom"></div>
    	<div class="clear"> <div id="content">
    	<div id="mainpage">
    <div class="shift_log">

    	<img src="images\login_bg.jpg" alt="" width="800px" height="950px">
    </div>

    	<div class="signup_align">
        <h1>SIGN UP</h1>
        <div>
          &nbsp;
        </div>
        <form action="data_school.php" method="post">
      <fieldset class="school">
    <legend class="headname">SCHOOL INFORMATION<span>  *</span></legend><br>
    &nbsp;&nbsp;<label>;<span class="sub_t">  School Name</span></label>&nbsp;&nbsp;
    <select name="sch_name" id="sch_name" type="text" >
  <option value="dd">jdjldslj</option>
      </select>
    <br>
    &nbsp;&nbsp;<span class="sub_t">School Location</span><input type="text" name="sch_loc" size="25">
     <br>
    &nbsp;&nbsp;<span class="sub_t">Department</span><input type="text" name="depart" size="25">
      <br>
      &nbsp;&nbsp;<span class="sub_t">HOD</span><input type="text" name="hod"size="25">
        <br>
          &nbsp;&nbsp;<span class="sub_t">Program</span><input type="text" name="prog" size="25">
             <br>
        </fieldset>
<br>
  <fieldset>
<legend class="headname">PERSONAL INFORMATION<span>  *</span></legend><br>
 &nbsp;&nbsp;<span class="sub_t">Student ID</span><input type="text" name="stud_id" size="25">
  <br>
  &nbsp;&nbsp;<span class="sub_t">FirstName</span><input type="text" name="fname" size="25">
  <br>
   &nbsp;&nbsp;<span class="sub_t">LastName</span><input type="text" name="lname" size="25">
    <br>
    &nbsp;&nbsp;<span class="sub_t">Date of Birth</span><input type="text" name="dob" size="25">
   <br>
   &nbsp;&nbsp;<span class="sub_t">Email</span><input type="text" name="mail" size="25">
  <br>
 &nbsp;&nbsp;<label><span class="sub_t"> Gender</span></label>
  <select name="gender" id="gender" type="text" placeholder="1" required>
    <option value="">--- Select ----</option>
<option value="male">Male</option>
<option value="female">Female</option>
  </select>


<br><br>

&nbsp;&nbsp;<label><span class="sub_t">Level</span></label>
<select name="level" id="level" type="text" placeholder="1" required>
  <option value="">--- Select ---</option>
<option value="l_100">100</option>
<option value="l200">200</option>
<option value="l300">300</option>
<option value="l400">400</option>
</select>
<br><br>
  &nbsp;&nbsp;<span class="sub_t">Phone</span><input type="text" name="phone" size="25">
  <br>
   </fieldset>



<br><br>
<fieldset class="mov_text">
  <legend class="headname">COURSE INFORMATION<span>  *</span></legend>
  <br><br>
  &nbsp;&nbsp;<span class="sub_t">Course ID</span><input type="text" name="c_id" size="25">
   <br><br>
   &nbsp;&nbsp;<span class="sub_t">Name</span><input type="text" name="c_name" size="25">
   <br><br>
    &nbsp;&nbsp;<textarea name="desc" rows="8" cols="50">Course Desc</textarea>
     <br><br>
</fieldset>

<div class="sub">
  <input type="submit" name="submit" id="submit" value="SIGN UP">
</div>
</form>


    	</div> </div>
    	</div>
    </div>

    <div class="footer_l">

    <p>Copyright &copy; 2017 <a href="#">SemisterProLab</a></p>
    </div>


  </body>
</html>
