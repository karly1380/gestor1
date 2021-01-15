<?php
	session_start();

	if(isset($_SESSION['usuario'])){
		include "header.php";
?>

<div class="jumbotron jumbotron-fluid">
	    <div class="container">
			<h1 class="display-4"><center>Inicio :D</center></h1>
			<hr>
			<br>
			<br>
			

<iframe src="https://assets.pinterest.com/ext/embed.html?id=670121619552387453" height="714" width="345" frameborder="0" scrolling="no" ></iframe>

<iframe src="https://assets.pinterest.com/ext/embed.html?id=670121619552387496" height="714" width="345" frameborder="0" scrolling="no" ></iframe>

<iframe src="https://assets.pinterest.com/ext/embed.html?id=717550153126920924" height="714" width="345" frameborder="0" scrolling="no" ></iframe>



	
		</div>
	</div>


<?php 
		include "footer.php";
	} else {
		header("location:../index.php");
	}
?>