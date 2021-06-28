

<?php

 // Session Start
 session_start();
 // Include the PHP-CSRF library
 include('../common/php-csrf.php'); 
include_once '../common/dbconfig.php';
date_default_timezone_set('Asia/Kolkata');
$V9234 ="";
$V9234 = date('Y-m-d H:i:s ', time());

$ff_timestampErr = $ff_timestampErr_show = $receive_dateErr = $receive_dateErr_show = $amount_receivedErr = $amount_receivedErr_show = $mode_receiveErr = $mode_receiveErr_show = $Planned_forErr = $Planned_forErr_show = $remarksErr = $remarksErr_show = $post_ownerErr = $post_ownerErr_show = "" ;
$ff_timestamp = $receive_date = $amount_received = $mode_receive = $Planned_for = $remarks = $post_owner = "" ;
$ff_timestamp_ff1 = $receive_date_ff1 = $amount_received_ff1 = $mode_receive_ff1 = $Planned_for_ff1 = $remarks_ff1 = $post_owner_ff1 = "" ;
$ff_timestampreq = "required" ;
$receive_datereq = "required" ;
$amount_receivedreq = "required" ;
$mode_receivereq = "required" ;
$Planned_forreq = "required" ;
$remarksreq = "required" ;
$post_ownerreq = "required" ;
$ff_timestampErr_tip = "Only Positive Numbers with no decimal places";
$receive_dateErr_tip = "Only Positive Numbers with no decimal places";
$amount_receivedErr_tip = "only Negative and Positive numbers with decimals";
$mode_receiveErr_tip = "Only Alphabets ,Numerics and Alphanumerics allowed";
$Planned_forErr_tip = "Few Special characters are not allowed";
$remarksErr_tip = "Few Special characters are not allowed";
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
//<----- Start Variable Server Validation: ff_timestamp---->//
$ff_timestamp = (($_POST['ff_timestamp']));


if (preg_match("/^^[^-\s][a-zA-Z0-9_:\s-]*$/", $ff_timestamp) && ($ff_timestampreq == "required")) {
//condition is true
 $b0= 'true';
 $ff_timestamp_ff1 = $ff_timestamp;
} else {
//condition is false
 $b0= 'false';
 $ff_timestampErr = $ff_timestampErr_tip; 
 $ff_timestampErr_show = $ff_timestampErr;

//<----- END Variable Server Validation : ff_timestamp---->//
}

//<----- Start Variable Server Validation: receive_date---->//
$receive_date = (($_POST['receive_date']));


if (preg_match("/^^[^-\s][a-zA-Z0-9_\s-]*$/", $receive_date) && ($receive_datereq == "required")) {
//condition is true
 $b2= 'true';
 $receive_date_ff1 = $receive_date;
} else {
//condition is false
 $b2= 'false';
 $receive_dateErr = $receive_dateErr_tip; 
 $receive_dateErr_show = $receive_dateErr;

//<----- END Variable Server Validation : receive_date---->//
}

//<----- Start Variable Server Validation: amount_received---->//
$amount_received = (($_POST['amount_received']));


if (preg_match("/^^-?[^-\s][0-9.\s-]*$/", $amount_received) && ($amount_receivedreq == "required")) {
//condition is true
 $b4= 'true';
 $amount_received_ff1 = $amount_received;
} else {
//condition is false
 $b4= 'false';
 $amount_receivedErr = $amount_receivedErr_tip; 
 $amount_receivedErr_show = $amount_receivedErr;

//<----- END Variable Server Validation : amount_received---->//
}

//<----- Start Variable Server Validation: mode_receive---->//
$mode_receive = (($_POST['mode_receive']));


if (preg_match("/^^[^-\s][a-zA-Z0-9_\s-]*$/", $mode_receive) && ($mode_receivereq == "required")) {
//condition is true
 $b6= 'true';
 $mode_receive_ff1 = $mode_receive;
} else {
//condition is false
 $b6= 'false';
 $mode_receiveErr = $mode_receiveErr_tip; 
 $mode_receiveErr_show = $mode_receiveErr;

//<----- END Variable Server Validation : mode_receive---->//
}

//<----- Start Variable Server Validation: Planned_for---->//
$Planned_for = (($_POST['Planned_for']));


if (preg_match("/[^`]*$/", $Planned_for) && ($Planned_forreq == "required")) {
//condition is true
 $b8= 'true';
 $Planned_for_ff1 = $Planned_for;
} else {
//condition is false
 $b8= 'false';
 $Planned_forErr = $Planned_forErr_tip; 
 $Planned_forErr_show = $Planned_forErr;

//<----- END Variable Server Validation : Planned_for---->//
}

//<----- Start Variable Server Validation: remarks---->//
$remarks = (($_POST['remarks']));


if (preg_match("/[^`]*$/", $remarks) && ($remarksreq == "required")) {
//condition is true
 $b10= 'true';
 $remarks_ff1 = $remarks;
} else {
//condition is false
 $b10= 'false';
 $remarksErr = $remarksErr_tip; 
 $remarksErr_show = $remarksErr;

//<----- END Variable Server Validation : remarks---->//
}

//<----- Start Variable Server Validation: post_owner---->//
$post_owner = (($_POST['post_owner']));


if (preg_match("/^^[^-\s][a-zA-Z0-9_\s-]*$/", $post_owner) && ($post_ownerreq == "required")) {
//condition is true
 $b12= 'true';
 $post_owner_ff1 = $post_owner;
} else {
//condition is false
 $b12= 'false';
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
if ($ff_timestamp_ff1 == "" || $receive_date_ff1 == "" || $amount_received_ff1 == "" || $mode_receive_ff1 == "" || $Planned_for_ff1 == "" || $remarks_ff1 == "" || $post_owner_ff1 == ""|| $ff_timestampErr !=="" || $receive_dateErr !=="" || $amount_receivedErr !=="" || $mode_receiveErr !=="" || $Planned_forErr !=="" || $remarksErr !=="" || $post_ownerErr !==""){ echo  " <center>&#9888! Please input required correction</center>";} else {
$ff_timestamp_ff = test_input( $ff_timestamp_ff1 );
$receive_date_ff = test_input( $receive_date_ff1 );
$amount_received_ff = test_input( $amount_received_ff1 );
$mode_receive_ff = test_input( $mode_receive_ff1 );
$Planned_for_ff = test_input( $Planned_for_ff1 );
$remarks_ff = test_input( $remarks_ff1 );
$post_owner_ff = test_input( $post_owner_ff1 );
if($crud->update($id, $ff_timestamp_ff, $receive_date_ff, $amount_received_ff, $mode_receive_ff, $Planned_for_ff, $remarks_ff, $post_owner_ff)){

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

<!---- form input for (Time stamp) ---->
<div class="form-group">
<label for="Time stamp" style="color: #eb7700">Time stamp</label>*
<input class="form-control" type="datetime-local" id="ff_timestamp" name= "ff_timestamp" placeholder="" value="<?php echo htmlspecialchars($ff_timestamp);?>" title="<?php echo $ff_timestampErr_tip;?>"required  onfocus="this.value='<?php echo htmlspecialchars($V9234);?>'"/>
<span class="error"><?php echo $ff_timestampErr_show;?></span>
</div>

<!---- form input for (Receive Date) ---->
<div class="form-group">
<label for="Receive Date" style="color: #eb7700">Receive Date</label>*
<input class="form-control" type="date" id="receive_date" name= "receive_date" placeholder="" value="<?php echo htmlspecialchars($receive_date);?>" title="<?php echo $receive_dateErr_tip;?>"required />
<span class="error"><?php echo $receive_dateErr_show;?></span>
</div>

<!---- form input for (Amount Received) ---->
<div class="form-group">
<label for="Amount Received" style="color: #eb7700">Amount Received</label>*
<input class="form-control" type="number" step="any" id="amount_received" name= "amount_received" placeholder="" value="<?php echo htmlspecialchars($amount_received);?>" title="<?php echo $amount_receivedErr_tip;?>"required />
<span class="error"><?php echo $amount_receivedErr_show;?></span>
</div>

<!---- form input for (Mode of Receive) ---->
<div class="form-group">
<label for="Mode of Receive" style="color: #eb7700">Mode of Receive</label>*
<select class="form-control" type="text" id="mode_receive" name= "mode_receive" placeholder="" value="<?php echo htmlspecialchars($mode_receive);?>" title="<?php echo $mode_receiveErr_tip;?>"required />
<option>Cash</option>
<option>Bank Transfer</option>
<option>Loan Cash</option>
<option>Loan Bank Transfer</option>

</select>
<span class="error"><?php echo $mode_receiveErr_show;?></span>
</div>

<!---- form input for (Planned for) ---->
<div class="form-group">
<label for="Planned for" style="color: #eb7700">Planned for</label>*
<textarea  class="form-control" type="text" id="Planned_for" name= "Planned_for" placeholder="" value="<?php echo htmlspecialchars($Planned_for);?>" title="<?php echo $Planned_forErr_tip;?>"required ><?php echo htmlspecialchars($Planned_for);?></textarea>
<span class="error"><?php echo $Planned_forErr_show;?></span>
</div>

<!---- form input for (Remarks) ---->
<div class="form-group">
<label for="Remarks" style="color: #eb7700">Remarks</label>*
<textarea  class="form-control" type="text" id="remarks" name= "remarks" placeholder="" value="<?php echo htmlspecialchars($remarks);?>" title="<?php echo $remarksErr_tip;?>"required ><?php echo htmlspecialchars($remarks);?></textarea>
<span class="error"><?php echo $remarksErr_show;?></span>
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