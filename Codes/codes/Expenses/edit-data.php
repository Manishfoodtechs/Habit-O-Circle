

<?php

 // Session Start
 session_start();
 // Include the PHP-CSRF library
 include('../common/php-csrf.php'); 
include_once '../common/dbconfig.php';
date_default_timezone_set('Asia/Kolkata');
$V9234 ="";
$V9234 = date('Y-m-d H:i:s ', time());

$time_stamp_expencesErr = $time_stamp_expencesErr_show = $expense_dateErr = $expense_dateErr_show = $AmountSpendErr = $AmountSpendErr_show = $Spend_modeErr = $Spend_modeErr_show = $progressive_spendErr = $progressive_spendErr_show = $spend_planningErr = $spend_planningErr_show = $remarks_spendErr = $remarks_spendErr_show = $post_ownerErr = $post_ownerErr_show = "" ;
$time_stamp_expences = $expense_date = $AmountSpend = $Spend_mode = $progressive_spend = $spend_planning = $remarks_spend = $post_owner = "" ;
$time_stamp_expences_ff1 = $expense_date_ff1 = $AmountSpend_ff1 = $Spend_mode_ff1 = $progressive_spend_ff1 = $spend_planning_ff1 = $remarks_spend_ff1 = $post_owner_ff1 = "" ;
$time_stamp_expencesreq = "required" ;
$expense_datereq = "required" ;
$AmountSpendreq = "required" ;
$Spend_modereq = "required" ;
$progressive_spendreq = "required" ;
$spend_planningreq = "required" ;
$remarks_spendreq = "required" ;
$post_ownerreq = "required" ;
$time_stamp_expencesErr_tip = "Only Positive Numbers with no decimal places";
$expense_dateErr_tip = "Only Positive Numbers with no decimal places";
$AmountSpendErr_tip = "only Negative and Positive numbers with decimals";
$Spend_modeErr_tip = "Only Alphabets ,Numerics and Alphanumerics allowed";
$progressive_spendErr_tip = "Only Alphabets ,Numerics and Alphanumerics allowed";
$spend_planningErr_tip = "Only Alphabets ,Numerics and Alphanumerics allowed";
$remarks_spendErr_tip = "Few Special characters are not allowed";
$post_ownerErr_tip = "Only Alphabets ,Numerics and Alphanumerics allowed";


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
//<----- Start Variable Server Validation: time_stamp_expences---->//
$time_stamp_expences = (($_POST['time_stamp_expences']));


if (preg_match("/^^[^-\s][a-zA-Z0-9_:\s-]*$/", $time_stamp_expences) && ($time_stamp_expencesreq == "required")) {
//condition is true
 $b0= 'true';
 $time_stamp_expences_ff1 = $time_stamp_expences;
} else {
//condition is false
 $b0= 'false';
 $time_stamp_expencesErr = $time_stamp_expencesErr_tip; 
 $time_stamp_expencesErr_show = $time_stamp_expencesErr;

//<----- END Variable Server Validation : time_stamp_expences---->//
}

//<----- Start Variable Server Validation: expense_date---->//
$expense_date = (($_POST['expense_date']));


if (preg_match("/^^[^-\s][a-zA-Z0-9_\s-]*$/", $expense_date) && ($expense_datereq == "required")) {
//condition is true
 $b2= 'true';
 $expense_date_ff1 = $expense_date;
} else {
//condition is false
 $b2= 'false';
 $expense_dateErr = $expense_dateErr_tip; 
 $expense_dateErr_show = $expense_dateErr;

//<----- END Variable Server Validation : expense_date---->//
}

//<----- Start Variable Server Validation: AmountSpend---->//
$AmountSpend = (($_POST['AmountSpend']));


if (preg_match("/^^-?[^-\s][0-9.\s-]*$/", $AmountSpend) && ($AmountSpendreq == "required")) {
//condition is true
 $b4= 'true';
 $AmountSpend_ff1 = $AmountSpend;
} else {
//condition is false
 $b4= 'false';
 $AmountSpendErr = $AmountSpendErr_tip; 
 $AmountSpendErr_show = $AmountSpendErr;

//<----- END Variable Server Validation : AmountSpend---->//
}

//<----- Start Variable Server Validation: Spend_mode---->//
$Spend_mode = (($_POST['Spend_mode']));


if (preg_match("/^^[^-\s][a-zA-Z0-9_\s-]*$/", $Spend_mode) && ($Spend_modereq == "required")) {
//condition is true
 $b6= 'true';
 $Spend_mode_ff1 = $Spend_mode;
} else {
//condition is false
 $b6= 'false';
 $Spend_modeErr = $Spend_modeErr_tip; 
 $Spend_modeErr_show = $Spend_modeErr;

//<----- END Variable Server Validation : Spend_mode---->//
}

//<----- Start Variable Server Validation: progressive_spend---->//
$progressive_spend = (($_POST['progressive_spend']));


if (preg_match("/^^[^-\s][a-zA-Z0-9_\s-]*$/", $progressive_spend) && ($progressive_spendreq == "required")) {
//condition is true
 $b8= 'true';
 $progressive_spend_ff1 = $progressive_spend;
} else {
//condition is false
 $b8= 'false';
 $progressive_spendErr = $progressive_spendErr_tip; 
 $progressive_spendErr_show = $progressive_spendErr;

//<----- END Variable Server Validation : progressive_spend---->//
}

//<----- Start Variable Server Validation: spend_planning---->//
$spend_planning = (($_POST['spend_planning']));


if (preg_match("/^^[^-\s][a-zA-Z0-9_\s-]*$/", $spend_planning) && ($spend_planningreq == "required")) {
//condition is true
 $b10= 'true';
 $spend_planning_ff1 = $spend_planning;
} else {
//condition is false
 $b10= 'false';
 $spend_planningErr = $spend_planningErr_tip; 
 $spend_planningErr_show = $spend_planningErr;

//<----- END Variable Server Validation : spend_planning---->//
}

//<----- Start Variable Server Validation: remarks_spend---->//
$remarks_spend = (($_POST['remarks_spend']));


if (preg_match("/[^`]*$/", $remarks_spend) && ($remarks_spendreq == "required")) {
//condition is true
 $b12= 'true';
 $remarks_spend_ff1 = $remarks_spend;
} else {
//condition is false
 $b12= 'false';
 $remarks_spendErr = $remarks_spendErr_tip; 
 $remarks_spendErr_show = $remarks_spendErr;

//<----- END Variable Server Validation : remarks_spend---->//
}

//<----- Start Variable Server Validation: post_owner---->//
$post_owner = (($_POST['post_owner']));


if (preg_match("/^^[^-\s][a-zA-Z0-9_\s-]*$/", $post_owner) && ($post_ownerreq == "required")) {
//condition is true
 $b14= 'true';
 $post_owner_ff1 = $post_owner;
} else {
//condition is false
 $b14= 'false';
 $post_ownerErr = $post_ownerErr_tip; 
 $post_ownerErr_show = $post_ownerErr;

//<----- END Variable Server Validation : post_owner---->//
}


function test_input($data) {
 $data = trim($data);
 $data = stripslashes($data);
 $data = htmlspecialchars($data);
 return $data;
}

//If error tip has value
if ($time_stamp_expences_ff1 == "" || $expense_date_ff1 == "" || $AmountSpend_ff1 == "" || $Spend_mode_ff1 == "" || $progressive_spend_ff1 == "" || $spend_planning_ff1 == "" || $remarks_spend_ff1 == "" || $post_owner_ff1 == ""|| $time_stamp_expencesErr !=="" || $expense_dateErr !=="" || $AmountSpendErr !=="" || $Spend_modeErr !=="" || $progressive_spendErr !=="" || $spend_planningErr !=="" || $remarks_spendErr !=="" || $post_ownerErr !==""){ echo  " <center>&#9888! Please input required correction</center>";} else {
$time_stamp_expences_ff = test_input( $time_stamp_expences_ff1 );
$expense_date_ff = test_input( $expense_date_ff1 );
$AmountSpend_ff = test_input( $AmountSpend_ff1 );
$Spend_mode_ff = test_input( $Spend_mode_ff1 );
$progressive_spend_ff = test_input( $progressive_spend_ff1 );
$spend_planning_ff = test_input( $spend_planning_ff1 );
$remarks_spend_ff = test_input( $remarks_spend_ff1 );
$post_owner_ff = test_input( $post_owner_ff1 );
if($crud->update($id, $time_stamp_expences_ff, $expense_date_ff, $AmountSpend_ff, $Spend_mode_ff, $progressive_spend_ff, $spend_planning_ff, $remarks_spend_ff, $post_owner_ff)){

echo '<div class="alert alert-success">
<strong><h1 style=font-size:500%>:)</h1>
<h1>SUCCESS!!</h1><br>
<h3>NOTHING TO DO</h3></strong></div>';
 
header("refresh: 3;url=index.php");
} 
else 
{ 
echo '<div class="alert alert-danger">
<strong><h1 style=font-size:500%>:(</h1>
<br><h3>SOMETHING WENT WRONG!!!</br></h3>
<br><h2>TRY</h2></strong>Contact system Admin</div>'; 
 header("refresh: 3");}
}
 } 
//end of 
 else {
 // Failure
 $message = '<div class="alert alert-danger">
<strong><h1 style=font-size:500%>:(</h1>
<br><h3> EITHER,YOU EXCEEDED RESPONSE TIME OF THIS PAGE : ' .round(($tokentime/60),2).' Minute(s)</br> OR DID YOU TRIED TO RELOAD THIS PAGE?</h3>
<br><h2>NOTHING TO DO</h2></strong> We are rebuilding this page in 3 seconds... 
</div>';
header("refresh: 3"); 
 }

if ($message) echo $message; 
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
.error {color: #eb7700; font-size:8px; font-style: italic;}
.third_btn { display:inline-block; float:right; color:white;}
.form-control:focus{border-color: #eb7700; box-shadow: none; -webkit-box-shadow: none;}
.has-error .form-control:focus{box-shadow: none; -webkit-box-shadow: none;}
</style>

</head>
<body>
<!-- Your normal HTML form -->
<div class="container"><form name="my-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"].'?id='.$id);?> "method="POST" ><?=$csrf->input('my-form');?>

<!---- form input for (Time Stamp) ---->
<div class="form-group">
<label for="Time Stamp" style="color: #eb7700">Time Stamp</label>*
<input class="form-control" type="datetime-local" id="time_stamp_expences" name= "time_stamp_expences" placeholder="" value="<?php echo htmlspecialchars($time_stamp_expences);?>" title="<?php echo $time_stamp_expencesErr_tip;?>"required  onfocus="this.value='<?php echo htmlspecialchars($V9234);?>'"/>
<span class="error"><?php echo $time_stamp_expencesErr_show;?></span>
</div>

<!---- form input for (Expense Date) ---->
<div class="form-group">
<label for="Expense Date" style="color: #eb7700">Expense Date</label>*
<input class="form-control" type="date" id="expense_date" name= "expense_date" placeholder="" value="<?php echo htmlspecialchars($expense_date);?>" title="<?php echo $expense_dateErr_tip;?>"required />
<span class="error"><?php echo $expense_dateErr_show;?></span>
</div>

<!---- form input for (Amount Spend) ---->
<div class="form-group">
<label for="Amount Spend" style="color: #eb7700">Amount Spend</label>*
<input class="form-control" type="number" step="any" id="AmountSpend" name= "AmountSpend" placeholder="" value="<?php echo htmlspecialchars($AmountSpend);?>" title="<?php echo $AmountSpendErr_tip;?>"required />
<span class="error"><?php echo $AmountSpendErr_show;?></span>
</div>

<!---- form input for (Mode of Spend) ---->
<div class="form-group">
<label for="Mode of Spend" style="color: #eb7700">Mode of Spend</label>*
<select class="form-control" type="text" id="Spend_mode" name= "Spend_mode" placeholder="" value="<?php echo htmlspecialchars($Spend_mode);?>" title="<?php echo $Spend_modeErr_tip;?>"required />
<option>Cash</option>
<option>Bank</option>
</select>
<span class="error"><?php echo $Spend_modeErr_show;?></span>
</div>

<!---- form input for (Is it Progressive Spend) ---->
<div class="form-group">
<label for="Is it Progressive Spend" style="color: #eb7700">Is it Progressive Spend</label>*
<select class="form-control" type="text" id="progressive_spend" name= "progressive_spend" placeholder="" value="<?php echo htmlspecialchars($progressive_spend);?>" title="<?php echo $progressive_spendErr_tip;?>"required />
<option>NO Will not create Money </option>
<option>YES Will Create Money </option>
</select>
<span class="error"><?php echo $progressive_spendErr_show;?></span>
</div>

<!---- form input for (Spend as per Planning) ---->
<div class="form-group">
<label for="Spend as per Planning" style="color: #eb7700">Spend as per Planning</label>*
<select class="form-control" type="text" id="spend_planning" name= "spend_planning" placeholder="" value="<?php echo htmlspecialchars($spend_planning);?>" title="<?php echo $spend_planningErr_tip;?>"required />
<?php
$result = mysqli_query($mysqli, "SELECT * FROM finance_received");
while($user_data = mysqli_fetch_array($result))
{
echo "<option>".$user_data['Planned_for']."</option>";
}
?>
</select>
<span class="error"><?php echo $spend_planningErr_show;?></span>
</div>

<!---- form input for (Remarks) ---->
<div class="form-group">
<label for="Remarks" style="color: #eb7700">Remarks</label>*
<textarea  class="form-control" type="text" id="remarks_spend" name= "remarks_spend" placeholder="" value="<?php echo htmlspecialchars($remarks_spend);?>" title="<?php echo $remarks_spendErr_tip;?>"required ><?php echo htmlspecialchars($remarks_spend);?></textarea>
<span class="error"><?php echo $remarks_spendErr_show;?></span>
</div>

<!---- form input for (Owner) ---->
<div class="form-group">
<label for="Owner" style="color: #eb7700">Owner</label>*
<input class="form-control" type="text" id="post_owner" name= "post_owner" placeholder="" value="<?php echo htmlspecialchars($post_owner);?>" disabled title="<?php echo $post_ownerErr_tip;?>"required />
<span class="error"><?php echo $post_ownerErr_show;?></span>
</div>

<input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
<div class="row"><br><input class="btn btn-outline btn-sm third_btn" style=" background-color: #eb7700; margin-right: 10px; " id="submit" value="Submit" type="submit" name="Submit" >
</div></div>
</form>
<br>
 

</body>
<script>
$('.datepicker').datepicker({
 format: 'd-M-yyyy'
})
</script>
</html>