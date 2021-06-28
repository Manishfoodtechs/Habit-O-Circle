<?php session_start(); /* Starts the session */
	
	/* Check Login form submitted */	
	if(isset($_POST['Submit'])){
		/* Define Password and associated Username array */
		/* Define Password => Username array */
		$logins = array(
		/* Secret => Username */
		'Dhawal800' => 'Dhawal',
		'Manish900' => 'Manish',
		'Amit1000' => 'Amit',
		'User' => 'User1100');
		
		/* Check and assign submitted Username and Password to new variable */
		$Username = isset($_POST['Username']) ? $_POST['Username'] : '';
		$Secret = isset($_POST['Secret']) ? $_POST['Secret'] : '';
		
		/* Check Username and Password existence in defined array */		
		if (isset($logins[$Username]) && $logins[$Username] == $Secret){
			/* Success: Set session variables and redirect to Protected page  */
			$_SESSION['UserData']['Username']=$logins[$Username];
			header("location:index.php");
			exit;
		} else {
			/*Unsuccessful attempt: Set error message */
			$msg="<span style='color:red'>Invalid Login Details</span>";
		}
	}
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

<head>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>HABIT-O-CIRCLE</title>
<link href="./common/xp.css" rel="stylesheet">
<meta name="Habbito" content="Habbit">
<meta name="robot" content="index archive follow">
<link rel="canonical" href="http://gdpchurn.com">


<style>

.glass{
background: rgba( 240, 223, 223, 0.20 );
box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
backdrop-filter: blur( 2.5px );
-webkit-backdrop-filter: blur( 2.5px );
border-radius: 10px;
border: 1px solid rgba( 255, 255, 255, 0.18 );
}
</style>
<body class="glass" style="background: lightblue url(https://picsum.photos/800) no-repeat fixed center;">
<center  ><h1 >HABIT-O-CIRCLE</h1><center>
<center><img src="<?php echo $array[array_rand($array, 1)];?>" alt="Person" class="xp-img" style="width:60%"></center>
     <div class="xp-row glass">
	 <form action="" method="post" name="Login_Form">
	 <?php if(isset($msg)){?>
   <table> <tr>
      <td colspan="2" align="center" valign="top"><?php echo $msg;?></td>
    </tr></table>
    <?php } ?>
	   <div class="xp-col" style="width:1%"><p></p></div>
<div class="xp-card-4 xp-col" style="width:98%">
  
    <div class="xp-container">
	<label>User ID</label>
	<input class="xp-input xp-animate-input" name="Secret" type="text"  placeholder="User ID" style="width:30%"> 
       <label>Password</label>
       <input class="xp-input xp-animate-input"  name="Username" type="password"  placeholder="Password" style="width:30%"> 
	
	 
    <input name="Submit" type="submit" value="Login" class=" xp-block xp-btn xp-black xp-round-xlarge">
	<br>
	
</div>
</div>
</form>
<div class="xp-col" style="width:1%"><p></p></div>
</div> 



</body>
</head>