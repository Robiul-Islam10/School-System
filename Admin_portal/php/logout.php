<?php

	session_start();
	//setcookie('my_first_cookie','xyz',time()-300, '/');
	session_destroy();
	header("location: ../views/login.php");
?>