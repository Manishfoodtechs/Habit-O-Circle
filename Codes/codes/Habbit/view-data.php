




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
<!---- form input for (TimeStamp) ---->
<div style="margin-left:20px;"
<u><h3 style="color: #eb7700">TimeStamp*</h3></u>
<br><?php echo htmlspecialchars($habbit_timestamp);?><hr class="new"></div>

<!---- form input for (Control Start Date) ---->
<div style="margin-left:20px;"
<u><h3 style="color: #eb7700">Control Start Date*</h3></u>
<br><?php echo htmlspecialchars($control_start_date);?><hr class="new"></div>

<!---- form input for (Control End Date) ---->
<div style="margin-left:20px;"
<u><h3 style="color: #eb7700">Control End Date*</h3></u>
<br><?php echo htmlspecialchars($control_end_date);?><hr class="new"></div>

<!---- form input for (Status Date) ---->
<div style="margin-left:20px;"
<u><h3 style="color: #eb7700">Status Date*</h3></u>
<br><?php echo htmlspecialchars($status_date);?><hr class="new"></div>

<!---- form input for (Estimated Self Progress (only numbers out of 100)) ---->
<div style="margin-left:20px;"
<u><h3 style="color: #eb7700">Estimated Self Progress (only numbers out of 100)*</h3></u>
<br><?php echo htmlspecialchars($self_progress);?><hr class="new"></div>

<!---- form input for (Remarks) ---->
<div style="margin-left:20px;"
<u><h3 style="color: #eb7700">Remarks*</h3></u>
<br><?php echo htmlspecialchars($remarks_habbit);?><hr class="new"></div>

<!---- form input for (Next Estimation Date) ---->
<div style="margin-left:20px;"
<u><h3 style="color: #eb7700">Next Estimation Date*</h3></u>
<br><?php echo htmlspecialchars($next_estimation_date);?><hr class="new"></div>

<!---- form input for (Make it Public?) ---->
<div style="margin-left:20px;"
<u><h3 style="color: #eb7700">Make it Public?*</h3></u>
<br><?php echo htmlspecialchars($make_public);?><hr class="new"></div>

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