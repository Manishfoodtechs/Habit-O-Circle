

<?php

 // Session Start
 session_start();
 // Include the PHP-CSRF library
 include('../common/php-csrf.php'); 
include_once '../common/dbconfig.php';
date_default_timezone_set('Asia/Kolkata');
$V9234 ="";
$V9234 = date('Y-m-d H:i:s ', time());
$habbit_timestampErr = $habbit_timestampErr_show = $control_start_dateErr = $control_start_dateErr_show = $control_end_dateErr = $control_end_dateErr_show = $status_dateErr = $status_dateErr_show = $self_progressErr = $self_progressErr_show = $remarks_habbitErr = $remarks_habbitErr_show = $next_estimation_dateErr = $next_estimation_dateErr_show = $make_publicErr = $make_publicErr_show = $post_ownerErr = $post_ownerErr_show = "" ;
$habbit_timestamp = $control_start_date = $control_end_date = $status_date = $self_progress = $remarks_habbit = $next_estimation_date = $make_public = $post_owner = "" ;
$habbit_timestamp_ff1 = $control_start_date_ff1 = $control_end_date_ff1 = $status_date_ff1 = $self_progress_ff1 = $remarks_habbit_ff1 = $next_estimation_date_ff1 = $make_public_ff1 = $post_owner_ff1 = "" ;
$habbit_timestampreq = "required" ;
$control_start_datereq = "required" ;
$control_end_datereq = "required" ;
$status_datereq = "required" ;
$self_progressreq = "required" ;
$remarks_habbitreq = "required" ;
$next_estimation_datereq = "required" ;
$make_publicreq = "required" ;
$post_ownerreq = "required" ;
$habbit_timestampErr_tip = "Only Positive Numbers with no decimal places";
$control_start_dateErr_tip = "Only Positive Numbers with no decimal places";
$control_end_dateErr_tip = "Only Positive Numbers with no decimal places";
$status_dateErr_tip = "Only Positive Numbers with no decimal places";
$self_progressErr_tip = "Only Positive Numbers with no decimal places";
$remarks_habbitErr_tip = "Few Special characters are not allowed";
$next_estimation_dateErr_tip = "Only Positive Numbers with no decimal places";
$make_publicErr_tip = "Only Alphabets ,Numerics and Alphanumerics allowed";
$post_ownerErr_tip = "Only Alphabets ,Numerics and Alphanumerics allowed";

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
//<----- Start Variable Server Validation: habbit_timestamp---->//
$habbit_timestamp = (($_POST['habbit_timestamp']));


if (preg_match("/^^[^-\s][a-zA-Z0-9_:\s-]*$/", $habbit_timestamp) && ($habbit_timestampreq == "required")) {
//condition is true
 $b0= 'true';
 $habbit_timestamp_ff1 = $habbit_timestamp;
} else {
//condition is false
 $b0= 'false';
 $habbit_timestampErr = $habbit_timestampErr_tip; 
 $habbit_timestampErr_show = $habbit_timestampErr;

//<----- END Variable Server Validation : habbit_timestamp---->//
}

//<----- Start Variable Server Validation: control_start_date---->//
$control_start_date = (($_POST['control_start_date']));


if (preg_match("/^^[^-\s][a-zA-Z0-9_\s-]*$/", $control_start_date) && ($control_start_datereq == "required")) {
//condition is true
 $b2= 'true';
 $control_start_date_ff1 = $control_start_date;
} else {
//condition is false
 $b2= 'false';
 $control_start_dateErr = $control_start_dateErr_tip; 
 $control_start_dateErr_show = $control_start_dateErr;

//<----- END Variable Server Validation : control_start_date---->//
}

//<----- Start Variable Server Validation: control_end_date---->//
$control_end_date = (($_POST['control_end_date']));


if (preg_match("/^^[^-\s][a-zA-Z0-9_\s-]*$/", $control_end_date) && ($control_end_datereq == "required")) {
//condition is true
 $b4= 'true';
 $control_end_date_ff1 = $control_end_date;
} else {
//condition is false
 $b4= 'false';
 $control_end_dateErr = $control_end_dateErr_tip; 
 $control_end_dateErr_show = $control_end_dateErr;

//<----- END Variable Server Validation : control_end_date---->//
}

//<----- Start Variable Server Validation: status_date---->//
$status_date = (($_POST['status_date']));


if (preg_match("/^^[^-\s][a-zA-Z0-9_\s-]*$/", $status_date) && ($status_datereq == "required")) {
//condition is true
 $b6= 'true';
 $status_date_ff1 = $status_date;
} else {
//condition is false
 $b6= 'false';
 $status_dateErr = $status_dateErr_tip; 
 $status_dateErr_show = $status_dateErr;

//<----- END Variable Server Validation : status_date---->//
}

//<----- Start Variable Server Validation: self_progress---->//
$self_progress = (($_POST['self_progress']));


if (preg_match("/^[1-9][0-9]*$/", $self_progress) && ($self_progressreq == "required")) {
//condition is true
 $b8= 'true';
 $self_progress_ff1 = $self_progress;
} else {
//condition is false
 $b8= 'false';
 $self_progressErr = $self_progressErr_tip; 
 $self_progressErr_show = $self_progressErr;

//<----- END Variable Server Validation : self_progress---->//
}

//<----- Start Variable Server Validation: remarks_habbit---->//
$remarks_habbit = (($_POST['remarks_habbit']));


if (preg_match("/[^`]*$/", $remarks_habbit) && ($remarks_habbitreq == "required")) {
//condition is true
 $b10= 'true';
 $remarks_habbit_ff1 = $remarks_habbit;
} else {
//condition is false
 $b10= 'false';
 $remarks_habbitErr = $remarks_habbitErr_tip; 
 $remarks_habbitErr_show = $remarks_habbitErr;

//<----- END Variable Server Validation : remarks_habbit---->//
}

//<----- Start Variable Server Validation: next_estimation_date---->//
$next_estimation_date = (($_POST['next_estimation_date']));


if (preg_match("/^^[^-\s][a-zA-Z0-9_\s-]*$/", $next_estimation_date) && ($next_estimation_datereq == "required")) {
//condition is true
 $b12= 'true';
 $next_estimation_date_ff1 = $next_estimation_date;
} else {
//condition is false
 $b12= 'false';
 $next_estimation_dateErr = $next_estimation_dateErr_tip; 
 $next_estimation_dateErr_show = $next_estimation_dateErr;

//<----- END Variable Server Validation : next_estimation_date---->//
}

//<----- Start Variable Server Validation: make_public---->//
$make_public = (($_POST['make_public']));


if (preg_match("/^^[^-\s][a-zA-Z0-9_\s-]*$/", $make_public) && ($make_publicreq == "required")) {
//condition is true
 $b14= 'true';
 $make_public_ff1 = $make_public;
} else {
//condition is false
 $b14= 'false';
 $make_publicErr = $make_publicErr_tip; 
 $make_publicErr_show = $make_publicErr;

//<----- END Variable Server Validation : make_public---->//
}

//<----- Start Variable Server Validation: post_owner---->//
$post_owner = (($_POST['post_owner']));


if (preg_match("/^^[^-\s][a-zA-Z0-9_\s-]*$/", $post_owner) && ($post_ownerreq == "required")) {
//condition is true
 $b16= 'true';
 $post_owner_ff1 = $post_owner;
} else {
//condition is false
 $b16= 'false';
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
if ($habbit_timestamp_ff1 == "" || $control_start_date_ff1 == "" || $control_end_date_ff1 == "" || $status_date_ff1 == "" || $self_progress_ff1 == "" || $remarks_habbit_ff1 == "" || $next_estimation_date_ff1 == "" || $make_public_ff1 == "" || $post_owner_ff1 == ""|| $habbit_timestampErr !=="" || $control_start_dateErr !=="" || $control_end_dateErr !=="" || $status_dateErr !=="" || $self_progressErr !=="" || $remarks_habbitErr !=="" || $next_estimation_dateErr !=="" || $make_publicErr !=="" || $post_ownerErr !==""){ echo  " <center>&#9888! Please input required correction</center>";} else {
$habbit_timestamp_ff = test_input( $habbit_timestamp_ff1 );
$control_start_date_ff = test_input( $control_start_date_ff1 );
$control_end_date_ff = test_input( $control_end_date_ff1 );
$status_date_ff = test_input( $status_date_ff1 );
$self_progress_ff = test_input( $self_progress_ff1 );
$remarks_habbit_ff = test_input( $remarks_habbit_ff1 );
$next_estimation_date_ff = test_input( $next_estimation_date_ff1 );
$make_public_ff = test_input( $make_public_ff1 );
$post_owner_ff = test_input( $post_owner_ff1 );
if($crud->create($habbit_timestamp_ff, $control_start_date_ff, $control_end_date_ff, $status_date_ff, $self_progress_ff, $remarks_habbit_ff, $next_estimation_date_ff, $make_public_ff, $post_owner_ff)){

echo '<div class="alert alert-success">
<strong><h1 style=font-size:500%>:)</h1>
<h1>SUCCESS!!</h1><br>
<h3>NOTHING TO DO</h3></strong></div>';
 
header("refresh: 3 ;url=index.php");
} 
else 
{ 
echo '<div class="alert alert-danger">
<strong><h1 style=font-size:500%>:(</h1>
<br><h3>SOMETHING WENT WRONG!!!</br></h3>
<br><h2>TRY</h2></strong>Contact system Admin</div>'; 
 header("refresh: 3 ");}
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
header("refresh: 3 "); 
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
.error {color: #eb7700; font-size:11px; font-style: italic;}
.third_btn { display:inline-block; float:right; color:white;}
.form-control:focus{border-color: #eb7700; box-shadow: none; -webkit-box-shadow: none;}
.has-error .form-control:focus{box-shadow: none; -webkit-box-shadow: none;}
</style>

</head>
<body>
<!-- Your normal HTML form -->
<div class="container"><form name="my-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?> "method="POST" ><?=$csrf->input('my-form');?>

<!---- form input for (TimeStamp) ---->
<div class="form-group">
<label for="TimeStamp" style="color: #eb7700">TimeStamp</label>*
<input class="form-control" type="datetime-local" id="habbit_timestamp" name= "habbit_timestamp" placeholder="" value="<?php echo htmlspecialchars($habbit_timestamp);?>" title="<?php echo $habbit_timestampErr_tip;?>"required  onfocus="this.value='<?php echo htmlspecialchars($V9234);?>'"/>
<span class="error"><?php echo $habbit_timestampErr_show;?></span>
</div>

<!---- form input for (Control Start Date) ---->
<div class="form-group">
<label for="Control Start Date" style="color: #eb7700">Control Start Date</label>*
<input class="form-control" type="date" id="control_start_date" name= "control_start_date" placeholder="" value="<?php echo htmlspecialchars($control_start_date);?>" title="<?php echo $control_start_dateErr_tip;?>"required />
<span class="error"><?php echo $control_start_dateErr_show;?></span>
</div>

<!---- form input for (Control End Date) ---->
<div class="form-group">
<label for="Control End Date" style="color: #eb7700">Control End Date</label>*
<input class="form-control" type="date" id="control_end_date" name= "control_end_date" placeholder="" value="<?php echo htmlspecialchars($control_end_date);?>" title="<?php echo $control_end_dateErr_tip;?>"required />
<span class="error"><?php echo $control_end_dateErr_show;?></span>
</div>

<!---- form input for (Status Date) ---->
<div class="form-group">
<label for="Status Date" style="color: #eb7700">Status Date</label>*
<input class="form-control" type="date" id="status_date" name= "status_date" placeholder="" value="<?php echo htmlspecialchars($status_date);?>" title="<?php echo $status_dateErr_tip;?>"required />
<span class="error"><?php echo $status_dateErr_show;?></span>
</div>

<!---- form input for (Estimated Self Progress (only numbers out of 100)) ---->
<div class="form-group">
<label for="Estimated Self Progress (only numbers out of 100)" style="color: #eb7700">Estimated Self Progress (only numbers out of 100)</label>*
<input class="form-control" type="number" id="self_progress" name= "self_progress" placeholder="" value="<?php echo htmlspecialchars($self_progress);?>" title="<?php echo $self_progressErr_tip;?>"required />
<span class="error"><?php echo $self_progressErr_show;?></span>
</div>

<!---- form input for (Remarks) ---->
<div class="form-group">
<label for="Remarks" style="color: #eb7700">Remarks</label>*
<textarea  class="form-control" type="text" id="remarks_habbit" name= "remarks_habbit" placeholder="" value="<?php echo htmlspecialchars($remarks_habbit);?>" title="<?php echo $remarks_habbitErr_tip;?>"required ><?php echo htmlspecialchars($remarks_habbit);?></textarea>
<span class="error"><?php echo $remarks_habbitErr_show;?></span>
</div>

<!---- form input for (Next Estimation Date) ---->
<div class="form-group">
<label for="Next Estimation Date" style="color: #eb7700">Next Estimation Date</label>*
<input class="form-control" type="date" id="next_estimation_date" name= "next_estimation_date" placeholder="" value="<?php echo htmlspecialchars($next_estimation_date);?>" title="<?php echo $next_estimation_dateErr_tip;?>"required />
<span class="error"><?php echo $next_estimation_dateErr_show;?></span>
</div>

<!---- form input for (Make it Public?) ---->
<div class="form-group">
<label for="Make it Public?" style="color: #eb7700">Make it Public?</label>*
<select class="form-control" type="text" id="make_public" name= "make_public" placeholder="" value="<?php echo htmlspecialchars($make_public);?>" title="<?php echo $make_publicErr_tip;?>"required />
<option>NotPublic</option>
<option>Public</option>
</select>
<span class="error"><?php echo $make_publicErr_show;?></span>
</div>

<!---- form input for (Owner) ---->
<div class="form-group">
<label for="Owner" style="color: #eb7700">Owner</label>*
<input class="form-control" type="text" id="post_owner" name= "post_owner" placeholder="" value="<?php echo htmlspecialchars($_SESSION['UserData']['Username']);?>" readonly title="<?php echo $post_ownerErr_tip;?>"required />
<span class="error"><?php echo $post_ownerErr_show;?></span>
</div>

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