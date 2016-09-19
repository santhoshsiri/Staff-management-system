<?php
	session_start();
	if(isset($_SESSION['passwordp'])){
		session_destroy();
		header("location:../index.html");
	}
	?>