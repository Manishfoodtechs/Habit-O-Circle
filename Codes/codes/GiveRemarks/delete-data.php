

<?php

 // First we need to start a session
 session_start();
 // Include the PHP-CSRF library
 include('../common/php-csrf.php'); 
include_once '../common/dbconfig.php';

date_default_timezone_set('Asia/Kolkata'); $V9234 = date('Y-m-d h:i:s ', time()); $V9234;
if(isset($_GET['id']))
{
$id = $_GET['id'];
extract($crud->getID($id));
}
 // Initialize an instance
$tokentime=5*60; // Hashes should expire in minutes, 5*60 is five minute
 $csrf = new CSRF(
 
 'session-hashes',
 'hidden-key',  
 $tokentime , 
 256  );

 $message = false;
 // If form was submitted
 if ($_SERVER['REQUEST_METHOD'] === 'POST') {
 // Validate that a correct token was given
 if ($csrf->validate('my-form')) {
 // Success
 $id = $_GET['id'];
$crud->delete($id);
echo"Deleted!";header("refresh: 3;url=index.php");
 exit;
 }
  else {echo"Not Deleted!";header("refresh: 3;url=index.php");  exit;}}?>
<title>Delete</title>
<form method="POST">
<?=$csrf->input('my-form');?>
<input id="linkid" href="#" onclick="doSomething()" value="" type="submit" name="Submit" required ></input>
</form><br><h1>This will delete data for ever!!!!</h1>
<script>
window.onload=function(){
 document.getElementById("linkid").click();
};

function doSomething(){
 alert("Delete Permanently?")
}

</script>
