




<?php

 // Session Start
 session_start();
 // Include the PHP-CSRF library
 include('../common/php-csrf.php'); 
include_once '../common/dbconfig.php';
date_default_timezone_set('Asia/Kolkata');
if(isset($_GET['id']))
{
$id = $_GET['id'];
extract($crud->getID($id));
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<title>HABIT-O-CIRCLE</title>
<style>
hr.new {border-top: 1px dotted #eb7700;}</style>

</head>
<body>
<!-- Your View Data-->
<!---- form input for (Aim Name) ---->
<div style="margin-left:20px;"
<u><h3 style="color: #eb7700">Aim Name*</h3></u>
<br><?php echo htmlspecialchars($ami_name);?><hr class="new"></div>

<!---- form input for (TimeStamp) ---->
<div style="margin-left:20px;"
<u><h3 style="color: #eb7700">TimeStamp*</h3></u>
<br><?php echo htmlspecialchars($ff_timestamp);?><hr class="new"></div>

<!---- form input for (Date From) ---->
<div style="margin-left:20px;"
<u><h3 style="color: #eb7700">Date From*</h3></u>
<br><?php echo htmlspecialchars($Date_from);?><hr class="new"></div>

<!---- form input for (Dead Line) ---->
<div style="margin-left:20px;"
<u><h3 style="color: #eb7700">Dead Line*</h3></u>
<br><?php echo htmlspecialchars($Date_to);?><hr class="new"></div>

<!---- form input for (Remarks) ---->
<div style="margin-left:20px;"
<u><h3 style="color: #eb7700">Remarks</h3></u>
<br><?php echo htmlspecialchars($remarks_aim);?><hr class="new"></div>

<!---- form input for (Self Percentage (only number +)) ---->
<div style="margin-left:20px;"
<u><h3 style="color: #eb7700">Self Percentage (only number +)*</h3></u>
<br><?php echo htmlspecialchars($self_percentage);?><hr class="new"></div>

<!---- form input for (Current Status) ---->
<div style="margin-left:20px;"
<u><h3 style="color: #eb7700">Current Status*</h3></u>
<br><?php echo htmlspecialchars($current_status);?><hr class="new"></div>

<!---- form input for (Owner) ---->
<div style="margin-left:20px;"
<u><h3 style="color: #eb7700">Owner*</h3></u>
<br><?php echo htmlspecialchars($post_owner);?><hr class="new"></div>

</body>
<script>
$('.datepicker').datepicker({
 format: 'd-M-yyyy'
})
</script>
</html>