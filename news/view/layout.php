<!DOCTYPE html>
<html>
	<head>
		<title> NEWSPORTAL</title>
		<link rel="stylesheet" hlef=''
		integrity=
		crossorigin="anonymous">
		<link rel="stylesheet" type ="text/css" hlef="style.css">
	<link href="" rel="style.css">
	<meta charset="utf-8">

</head>
<body>

	<nav class="one">
		<ul class="topmenu">
		<li><a href="#">Kategooriad<i class="fa fa-angle-down"></i></a>
			<ul class="submenu">
		<?php
				Controller::AllCategory();
			?>
		 </ul>
		</li>
		<li><a href="testEroor">Info</a></li>
		<li><a href="./">Stardileht</a></li>
		<li><a href="registerForm">Register</a></li>
		<div class="pull-right"></div>

		</ul>
	</nav>

<section>
	<div class='divBox'>
		<?php
		if(isset($content)){
			echo $content;
		}
		else{
			echo '<h1>Content is gone!</h1>';
		}
		?>
	</div>
</section>
		<hr>
		<p style="display:block; text-align:center;">JPTVR18 2019 a. &cupy </p>
	</body>
</html>