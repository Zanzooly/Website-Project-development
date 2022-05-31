<?php

// Starting the session, to use and test
// store data in session variable
session_start();

// If the session variable is empty, this
// means the user is yet to login
// User will be sent to 'login.php' page
// to allow the user to login
if (!isset($_SESSION['username'])) {
	$_SESSION['msg'] = "You have to log in first";
	header('location: login.php');
}

// Logout button will destroy the session, and
// will unset the session variables
// User will be headed to 'login.php'
// after logging out
if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['username']);
	header("location: login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="cal.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<!--<script src="calendar.js" charset="utf-8"></script>-->
	<!--<script src="newcal.js" charset="utf-8"></script>-->
	<meta charset="utf-8">

	<title>Homepage</title>
	<link rel="stylesheet" type="text/css"
					href="style.css">
</head>
<body>
	<div id="overlay" onclick="off()">
  <div id="text">Overlay Text</div>
  </div>
	<div class="header">
		<h2>Home Page</h2>
	</div>
	<div class="content">

		<!-- Creating notification when the
				user logs in -->

		<!-- Accessible only to the users that
				have logged in already -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php
						echo $_SESSION['success'];
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<!-- information of the user logged in -->
		<!-- welcome message for the logged in user -->
		<?php if (isset($_SESSION['username'])) : ?>



<p>
				Welcome
				<strong>
					<?php echo $_SESSION['username']; ?>
				</strong>
			</p>






<p>
				<a href="index.php?logout='1'" style="color: red;">
					Click here to Logout
				</a>
			</p>

		  <button type="button" name="button" id = "create" onclick = "createCalendar()">calendar</button>
			<p>
				<button type="button" name="BackMonth" id="GoBack" onclick="lastMonth()"> < </button>
				<button type="button" name"ForwardMonth" id="GoForward" onclick="NextMonth()"> > </button>
			</p>
		  <table id="calendar">
		  </table>
		  <p> Date: <input type="text" name="" value="" id = "inDate"> Event: <input type="text" name="" value="" id = "inEvent"> </p>
		  <button type="button" name="button" onclick = "addEvent(), updateCalendar()">update</button>
			<p id="p1"></p>
			<p id="p2"></p>



			<div id="calltable">
			<table>
				<tr><td id="MonthTitle" colspan="7"><h1 id="MonthTitleData"></h1></td></tr>
				<tr>
					<th>Sunday</th>
					<th>Munday</th>
					<th>Tuesday</th>
					<th>Wednesday</th>
					<th>Thursday</th>
					<th>Friday</th>
					<th>Saturday</th>
				</tr>
				<tr>
					<td id="R11">
						<h1 id="H11"></h1>
						<p id="B11"></p>
					</td>
					<td id="R12">
						<h1 id="H12"></h1>
						<p id="B12"></p>
					</td>
					<td id="R13">
						<h1 id="H13"></h1>
						<p id="B13"></p>
					</td>
					<td id="R14">
						<h1 id="H14"></h1>
						<p id="B14"></p>
					</td>
					<td id="R15">
						<h1 id="H15"></h1>
						<p id="B15"></p>
					</td>
					<td id="R16">
						<h1 id="H16"></h1>
						<p id="B16"></p>
					</td>
					<td id="R17">
						<h1 id="H17"></h1>
						<p id="B17"></p>
					</td>
				</tr>
				<tr>
					<td id="R21">
						<h1 id="H21"></h1>
						<p id="B21"></p>
					</td>
					<td id="R22">
						<h1 id="H22"></h1>
						<p id="B22"></p>
					</td>
					<td id="R23">
						<h1 id="H23"></h1>
						<p id="B23"></p>
					</td>
					<td id="R24">
						<h1 id="H24"></h1>
						<p id="B24"></p>
					</td>
					<td id="R25">
						<h1 id="H25"></h1>
						<p id="B25"></p>
					</td>
					<td id="R26">
						<h1 id="H26"></h1>
						<p id="B26"></p>
					</td>
					<td id="R27">
						<h1 id="H27"></h1>
						<p id="B27"></p>
					</td>
				</tr>
				<tr>
					<td id="R31">
						<h1 id="H31"></h1>
						<p id="B31"></p>
					</td>
					<td id="R32">
						<h1 id="H32"></h1>
						<p id="B32"></p>
					</td>
					<td id="R33">
						<h1 id="H33"></h1>
						<p id="B33"></p>
					</td>
					<td id="R34">
						<h1 id="H34"></h1>
						<p id="B34"></p>
					</td>
					<td id="R35">
						<h1 id="H35"></h1>
						<p id="B35"></p>
					</td>
					<td id="R36">
						<h1 id="H36"></h1>
						<p id="B36"></p>
					</td>
					<td id="R37">
						<h1 id="H37"></h1>
						<p id="B37"></p>
					</td>
				</tr>
				<tr>
					<td id="R41">
						<h1 id="H41"></h1>
						<p id="B41"></p>
					</td>
					<td id="R42">
						<h1 id="H42"></h1>
						<p id="B42"></p>
					</td>
					<td id="R43">
						<h1 id="H43"></h1>
						<p id="B43"></p>
					</td>
					<td id="R44">
						<h1 id="H44"></h1>
						<p id="B44"></p>
					</td>
					<td id="R45">
						<h1 id="H45"></h1>
						<p id="B45"></p>
					</td>
					<td id="R46">
						<h1 id="H46"></h1>
						<p id="B46"></p>
					</td>
					<td id="R47">
						<h1 id="H47"></h1>
						<p id="B47"></p>
					</td>
				</tr>
				<tr>
					<td id="R51">
						<h1 id="H51"></h1>
						<p id="B51"></p>
					</td>
					<td id="R52">
						<h1 id="H52"></h1>
						<p id="B52"></p>
					</td>
					<td id="R53">
						<h1 id="H53"></h1>
						<p id="B53"></p>
					</td>
					<td id="R54">
						<h1 id="H54"></h1>
						<p id="B54"></p>
					</td>
					<td id="R55">
						<h1 id="H55"></h1>
						<p id="B55"></p>
					</td>
					<td id="R56">
						<h1 id="H56"></h1>
						<p id="B56"></p>
					</td>
					<td id="R57">
						<h1 id="H57"></h1>
						<p id="B57"></p>
					</td>
				</tr>

			</table>


		<?php endif ?>
	</div>
	<script src="newcal.js" charset="utf-8"></script>
</body>
</html>
