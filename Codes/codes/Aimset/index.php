

<?php

 // Session Start
    session_start();
    // Include the PHP-CSRF library
    include('../common/php-csrf.php');  
include_once '../common/dbconfig.php';
date_default_timezone_set('Asia/Kolkata');
$V9234 ="";

if(isset($_GET['id']))
{
$id = $_GET['id'];
extract($crud->getID($id));
}
?>
<!DOCTYPE html>
<html lang="en" >
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>HABIT-O-CIRCLE</title>
<link rel='stylesheet' href='https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css'>
<link rel='stylesheet' href='https://cdn.datatables.net/1.10.19/css/dataTables.jqueryui.min.css'>
<link rel='stylesheet' href='https://cdn.datatables.net/buttons/1.5.2/css/buttons.jqueryui.min.css'>
<link rel='stylesheet' href='https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css'>
<link rel='stylesheet' href='https://cdn.datatables.net/responsive/2.2.5/css/responsive.dataTables.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
<link rel='stylesheet' href='../common/td.css'>
</head>
<body>
<div>
<p style="text-align: right;">
<a href="add-data.php" class="button" style=" background-color: #eb7700; text-align:right; margin-right: 20px; "><i class="fa fa-plus-square fa-2x" aria-hidden="true"></i></a></p>
</div>
<table id="example" style="color:#eb7700"; class="display nowrap" style="width:100%">
<thead >
<tr>
<th>Aim Name</th>
<th>TimeStamp</th>
<th>Date From</th>
<th>Dead Line</th>
<th>Remarks</th>
<th>Self Percentage (only number +)</th>
<th>Current Status</th>
<th>Owner</th>
<th>View</th>
<th>Edit</th>
<th>Delete</th>
</tr>
</thead>
<tbody>
<?php
echo "<tr>";
$result = mysqli_query($mysqli, "SELECT * FROM aimset");
while($user_data = mysqli_fetch_array($result))
{
echo "<td>".$user_data['ami_name']."</td>";
echo "<td>".$user_data['ff_timestamp']."</td>";
echo "<td>".$user_data['Date_from']."</td>";
echo "<td>".$user_data['Date_to']."</td>";
echo "<td>".$user_data['remarks_aim']."</td>";
echo "<td>".$user_data['self_percentage']."</td>";
echo "<td>".$user_data['current_status']."</td>";
echo "<td>".$user_data['post_owner']."</td>";
echo "<td>";
echo "<a href="."view-data.php?id=".$user_data['id']." class=".' ><center><i class="fa fa fa-info-circle fa-2x" aria-hidden="true"></i><center></a>';
echo "</td>";
echo "<td>";
echo "<a href="."edit-data.php?id=".$user_data['id']." class=".' ><center><i class="fa fa-pencil-square fa-2x" aria-hidden="true"></i><center></a>';
echo "</td>";
echo "<td>";
echo "<a href="."delete-data.php?id=".$user_data['id']." class=".' ><center><i class="fa fa-trash fa-2x" aria-hidden="true"></i><center></a>';
echo "</td>";
echo "</tr>";
}
?>
</tbody>
<tfoot>
<tr>
<th>Aim Name</th>
<th>TimeStamp</th>
<th>Date From</th>
<th>Dead Line</th>
<th>Remarks</th>
<th>Self Percentage (only number +)</th>
<th>Current Status</th>
<th>Owner</th>
<th>View</th>
<th>Edit</th>
<th>Delete</th></tr>
</tfoot>
</table>
<script src='https://code.jquery.com/jquery-3.5.1.js'></script>
<script src='https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js'></script>
<script src='https://cdn.datatables.net/1.10.19/js/dataTables.jqueryui.min.js'></script>
<script src='https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js'></script>
<script src='https://cdn.datatables.net/buttons/1.5.2/js/buttons.jqueryui.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js'></script>
<script src='https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js'></script>
<script src='https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js'></script>
<script src='https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js'></script>
<script src='https://cdn.datatables.net/responsive/2.2.5/js/dataTables.responsive.min.js'></script>
<script src="../common/script.js"></script>
</body>
</html>

