<?php

 if(isset($_POST['login']))
 {
 	if ($_POST['Username'] == 'Vishnupriya' & $_POST['Userpassword'] == 'Piyuu3')
 	 {

 	 		header('location:Home.html');
 	}
 	else
 	{
 		echo "Incorrect username and password"."<br>";
 	}
 }

?>