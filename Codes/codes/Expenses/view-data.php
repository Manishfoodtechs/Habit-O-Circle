




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
<!---- form input for (Time Stamp) ---->
<div style="margin-left:20px;"
<u><h3 style="color: #eb7700">Time Stamp*</h3></u>
<br><?php echo htmlspecialchars($time_stamp_expences);?><hr class="new"></div>

<!---- form input for (Expense Date) ---->
<div style="margin-left:20px;"
<u><h3 style="color: #eb7700">Expense Date*</h3></u>
<br><?php echo htmlspecialchars($expense_date);?><hr class="new"></div>

<!---- form input for (Amount Spend) ---->
<div style="margin-left:20px;"
<u><h3 style="color: #eb7700">Amount Spend*</h3></u>
<br><?php echo htmlspecialchars($AmountSpend);?><hr class="new"></div>

<!---- form input for (Mode of Spend) ---->
<div style="margin-left:20px;"
<u><h3 style="color: #eb7700">Mode of Spend*</h3></u>
<br><?php echo htmlspecialchars($Spend_mode);?><hr class="new"></div>

<!---- form input for (Is it Progressive Spend) ---->
<div style="margin-left:20px;"
<u><h3 style="color: #eb7700">Is it Progressive Spend*</h3></u>
<br><?php echo htmlspecialchars($progressive_spend);?><hr class="new"></div>

<!---- form input for (Spend as per Planning) ---->
<div style="margin-left:20px;"
<u><h3 style="color: #eb7700">Spend as per Planning*</h3></u>
<br><?php echo htmlspecialchars($spend_planning);?><hr class="new"></div>

<!---- form input for (Remarks) ---->
<div style="margin-left:20px;"
<u><h3 style="color: #eb7700">Remarks*</h3></u>
<br><?php echo htmlspecialchars($remarks_spend);?><hr class="new"></div>

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