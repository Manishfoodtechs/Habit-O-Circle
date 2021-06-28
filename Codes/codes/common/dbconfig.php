<?php

$DB_host = "localhost";
$DB_user = "root";
$DB_pass = "";
$DB_name = "diary";


try
{
	$DB_con = new PDO("mysql:host={$DB_host};dbname={$DB_name}",$DB_user,$DB_pass);
	$DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
	echo $e->getMessage();
}

include_once 'class.crud.php';

$crud = new crud($DB_con);


$mysqli = mysqli_connect("$DB_host","$DB_user","$DB_pass","$DB_name");
		if (!$mysqli && !DB_host ) {
			echo "<p>CHECK INTERNET CONNECTION</p>\n";
        	echo mysql_error();
		}else {
		
		}

?>
<?php 

if(!isset($_SESSION['UserData']['Username'])){
	header("location:../logout.php");
	exit;
}
?>

 <?php include_once 'header.php';?>
 <?php
$array = array(
	"https://opendoodles.s3-us-west-1.amazonaws.com/dog-jump.png", 
	"https://opendoodles.s3-us-west-1.amazonaws.com/meditating.png", 
	"https://opendoodles.s3-us-west-1.amazonaws.com/loving.png", 
	"https://opendoodles.s3-us-west-1.amazonaws.com/reading-side.png ",
	"https://opendoodles.s3-us-west-1.amazonaws.com/sleek.png ",
	"https://opendoodles.s3-us-west-1.amazonaws.com/jumping.png ",
	"https://opendoodles.s3-us-west-1.amazonaws.com/running.png ",
	"https://opendoodles.s3-us-west-1.amazonaws.com/petting.png ",
	"https://opendoodles.s3-us-west-1.amazonaws.com/bikini.png ",
	"https://opendoodles.s3-us-west-1.amazonaws.com/unboxing.png ",
	"https://opendoodles.s3-us-west-1.amazonaws.com/ballet.png",
	"https://opendoodles.s3-us-west-1.amazonaws.com/swinging.png ",
	"https://opendoodles.s3-us-west-1.amazonaws.com/laying.png ",
	"https://opendoodles.s3-us-west-1.amazonaws.com/chilling.png ",
	"https://opendoodles.s3-us-west-1.amazonaws.com/selfie.png ",
	"https://opendoodles.s3-us-west-1.amazonaws.com/zombieing.png",
	"https://opendoodles.s3-us-west-1.amazonaws.com/dancing.png",
	"https://opendoodles.s3-us-west-1.amazonaws.com/rolling.png",
	"https://opendoodles.s3-us-west-1.amazonaws.com/plant.png",
	"https://opendoodles.s3-us-west-1.amazonaws.com/clumsy.png",
	"https://opendoodles.s3-us-west-1.amazonaws.com/roller-skating.png"
	);

?>

<center><img src="<?php echo $array[array_rand($array, 1)];?>" alt="Person" class="xp-img" style="width:60%"></center>