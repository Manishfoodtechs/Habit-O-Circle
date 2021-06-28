




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
<!---- form input for (Time stamp) ---->
<div style="margin-left:20px;"
<u><h3 style="color: #eb7700">Time stamp*</h3></u>
<br><?php echo htmlspecialchars($ff_timestamp);?><hr class="new"></div>

<!---- form input for (Receive Date) ---->
<div style="margin-left:20px;"
<u><h3 style="color: #eb7700">Receive Date*</h3></u>
<br><?php echo htmlspecialchars($receive_date);?><hr class="new"></div>

<!---- form input for (Amount Received) ---->
<div style="margin-left:20px;"
<u><h3 style="color: #eb7700">Amount Received*</h3></u>
<br><?php echo htmlspecialchars($amount_received);?><hr class="new"></div>

<!---- form input for (Mode of Receive) ---->
<div style="margin-left:20px;"
<u><h3 style="color: #eb7700">Mode of Receive*</h3></u>
<br><?php echo htmlspecialchars($mode_receive);?><hr class="new"></div>

<!---- form input for (Planned for) ---->
<div style="margin-left:20px;"
<u><h3 style="color: #eb7700">Planned for*</h3></u>
<br><?php echo htmlspecialchars($Planned_for);?><hr class="new"></div>

<!---- form input for (Remarks) ---->
<div style="margin-left:20px;"
<u><h3 style="color: #eb7700">Remarks*</h3></u>
<br><?php echo htmlspecialchars($remarks);?><hr class="new"></div>

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