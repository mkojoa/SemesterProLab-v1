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

</head>
<body>


<div class="wrap">
	<br>
  <div id="sidebarbottom"></div>
	<div class="clear"> <div id="content">
	<div id="mainpage"><br><br><br>
<div>
	<img src="images\login_bg.jpg" alt=""></div>
	<div class="login_align">
				<h1>Welcome to SemesterProLab Login Form</h1>
				<span style="font-size:18">
		<div style="color:black">Please <span style="color:red">Login</span></div>
</span>
	<br>
<form action="database_connect\connect_data.php" method="post">
			<input type="text" placeholder="ID Number" name="stdID" size="25"><br><br>
			<input type="text" placeholder="Lastname" name="LastName" size="25"><br><br>
			<input type="text" placeholder="Email" name="Email" size="25">
			<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;
			<input type="submit" value="Login" name="submit">
	</div>
</form>

	</div> </div>
	</div>
</div>
<div id="footer">
<p>Copyright &copy; 2017 <a href="#">SemisterProLab</a></p>
</div>


</body>
</html>
</html>
