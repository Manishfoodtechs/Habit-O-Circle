<?php

$DB_host = "localhost";
$DB_user = "root";
$DB_pass = "";
$DB_name = "diary";

$mysqli = mysqli_connect("$DB_host","$DB_user","$DB_pass","$DB_name");
		if (!$mysqli && !DB_host ) {
			echo "<p>CHECK INTERNET CONNECTION</p>\n";
        	echo mysql_error();
		}else {
			
		}

?>
<div class="container">
  <center><h2>LetsBuild4U ADMIN</h2>
  <div>
  <a href="\Manishxpbackend\codes\index.html" class="btn btn-info" role="button">HOME</a><br><br>
  <div>