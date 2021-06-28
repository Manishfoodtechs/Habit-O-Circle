<?php session_start(); /* Starts the session */

if(!isset($_SESSION['UserData']['Username'])){
	header("location:login.php");
	exit;
}
 include_once 'header.php';
 
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>HABBITO-CIRCLE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="./common/xp.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
.glass{
background: rgba( 255, 255, 255, 0.25 );
box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
backdrop-filter: blur( 4px );
-webkit-backdrop-filter: blur( 4px );
border-radius: 10px;
border: 1px solid rgba( 255, 255, 255, 0.18 );
}
</style>
<body >

<div class="container glass">
  <center><h2>HABBIT-O-CIRCLE</h2>
<h4 style="color:red;"> WELCOME <?php echo $_SESSION['UserData']['Username'];?> !!!</h4>
  <p>Habit-o-Circle is intended to help people better manage their lives. You can set goals, manage your personal finances, and break bad habits. Even your friends and you can support each other in breaking bad habits.</p>  <div>

<center><div class="xp-row ">
  <div class="xp-col" style="width:49%"> 
  <div class="xp-card " style="width:auto ">
  <i class="fa fa-fort-awesome fa-5x" style="width:100% " aria-hidden="true"></i>
  <div class="xp-container xp-center">
  <br><a href="\dailyregister\codes\Aimset" class="btn btn-info " role="button">+AIM SETTING</a><br><br>
 </div>
 </div></div>
  <div class="xp-col" style="width:2%"><p></p></div>
  <div class="xp-col" style="width:49%">
  <div class="xp-card" style="width:auto;">
    <i class="fa fa fa-grav fa-5x"  aria-hidden="true"></i>
    <div class="xp-container xp-center">
       <br><a href="\dailyregister\codes\Habbit" class="btn btn-success" role="button">UR HABBIT</a><br><br>
    </div>
  </div></div>
</div>
</center>
<center><div class="xp-row">
  <div class="xp-col" style="width:49%"> 
  <div class="xp-card" style="width:auto;">
  <i class="fa fa-plus-circle fa-5x" style="width:100%" aria-hidden="true"></i>
  <div class="xp-container xp-center">
  <br>
  <a href="\dailyregister\codes\Received" class="btn btn-warning" role="button">+RECEIVED</a><br><br>
 </div>
 </div></div>
  <div class="xp-col" style="width:2%"><p></p></div>
  <div class="xp-col" style="width:49%">
  <div class="xp-card" style="width:auto;">
    <i class="fa fa-minus-circle fa-5x"  aria-hidden="true"></i>
    <div class="xp-container xp-center">
       <br><a href="\dailyregister\codes\Expenses" class="btn btn-warning" role="button">-EXPENSES</a><br><br>
    </div>
  </div></div>
</div>
</center>
<center><div class="xp-row">
  <div class="xp-col" style="width:49%"> 
  <div class="xp-card" style="width:auto;">
  <i class="fa fa fa-comments fa-5x" style="width:100%" aria-hidden="true"></i>
  <div class="xp-container xp-center">
  <br><a href="\dailyregister\codes\SeeRemarks" class="btn btn-danger" role="button">SeeRemarks</a><br><br>
 </div>
 </div></div>
  <div class="xp-col" style="width:2%"><p></p></div>
  <div class="xp-col" style="width:49%">
  <div class="xp-card" style="width:auto;">
    <i class="fa fa-commenting-o fa-5x"  aria-hidden="true"></i>
    <div class="xp-container xp-center">
       <br><a href="\dailyregister\codes\GiveRemarks" class="btn btn-primary" role="button">GiveRemarks</a><br><br>
    </div>
  </div></div>
</div>
</center>
<br><br><p>This is OpenSource Project. Free for personal and commercial use. Developed by Manish while drinking coffee.</p>
<a href="https://github.com/Manishfoodtechs"><i class="fa fa-github fa-3x" aria-hidden="true"></i></a>
</body>
</html>



