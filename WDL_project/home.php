<?php

session_start();
//if(!isset($_SESSION['username'])){
//	header('location:login.php');
//}
?>

<html lang="en">
	<head>
		<title>Practice</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="apti1.css">
		<link rel="icon" href="images/logo.jpeg" type="image/icon type">
	</head>

	<body>
		<a href="apti1.html" ><img src="images/logo2.jpeg" height="80px" ></a>
		<button class="button" ><a class="login" href="login.php"> LOGIN / REGISTER </a></button> 

<!--	<a href="logout.php" style="float:right;" > LOGOUT </a>	-->


		<div class="header">
			<ul>
				<li><a href="#home">Home</a></li>
				<li><a href="#aptitude">Aptitude</a></li>
				<li><a href="#interview">Interview</a></li>
				<li><a href="#onlinetest">Online test</a></li>
			</ul>
		</div>

			<h3> Welcome to Practice.com!!</h3>
			
			<div class="intro">
				<p>Here, you can read the important formulas required to solve aptitude questions and evaluate
				yourself for your interview and entrance exams preparation.</p>
			</div>
		
		<br><br>
		
		<div class="formula">
			<p><b>General Aptitude</b></p>
		</div>

		<img src="images/Q.jpeg" height="150px;" width="150px;">
		<ul class="inf">
			<li><a href="num.html">Number System</a></li>
			<li><a href="ar.html">Arithmetic</a></li>
			<li><a href="alg.html">Algebra</a></li>
			<li><a href="geo.html">Geometry</a></li>
		</ul>
		
		<br><br>
		
		<div class="formula1">
			<p><b>Interview</b></p>
		</div>

		<img src="images/int.jpeg" height="150px;" width="150px;">
		<ul class="inf">
			<li><a href="gd.html">Group Discussion</a></li>
			<li><a href="hr.html">HR Interview</a></li>
			<li><a href="tech.html">Technical Interview</a></li>
			<li><a href="bl.html">Body Language</a></li>
		</ul>
		
		
	<div class="footer">
		<div class="inner-footer">
				<p class="mx-gray mx-fs-13 mx-lh-2">&copy; PracTice&trade; | <a href="/about/copyright.php">Copyright</a> | <a href="#">Terms of Use &amp; Privacy Policy</a></p>
				<p class="mx-gray mx-fs-13 mx-lh-2">Contact us: <span class="mx-green mx-bold">PracTice<span class="mx-none"></span>@gma<span class="mx-none"></span>il.com</span></p>
		</div>
	</div>


	</body>
</html>
