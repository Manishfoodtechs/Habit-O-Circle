

<?php

 // Session Start
 session_start();
 // Include the PHP-CSRF library
 include('../common/php-csrf.php'); 
include_once '../common/dbconfig.php';
date_default_timezone_set('Asia/Kolkata');
$V9234 ="";
$V9234 = date('Y-m-d H:i:s ', time());
$ami_nameErr = $ami_nameErr_show = $ff_timestampErr = $ff_timestampErr_show = $Date_fromErr = $Date_fromErr_show = $Date_toErr = $Date_toErr_show = $remarks_aimErr = $remarks_aimErr_show = $self_percentageErr = $self_percentageErr_show = $current_statusErr = $current_statusErr_show = $post_ownerErr = $post_ownerErr_show = "" ;
$ami_name = $ff_timestamp = $Date_from = $Date_to = $remarks_aim = $self_percentage = $current_status = $post_owner = "" ;
$ami_name_ff1 = $ff_timestamp_ff1 = $Date_from_ff1 = $Date_to_ff1 = $remarks_aim_ff1 = $self_percentage_ff1 = $current_status_ff1 = $post_owner_ff1 = "" ;
$ami_namereq = "required" ;
$ff_timestampreq = "required" ;
$Date_fromreq = "required" ;
$Date_toreq = "required" ;
$remarks_aimreq = " " ;
$self_percentagereq = "required" ;
$current_statusreq = "required" ;
$post_ownerreq = "required" ;
$ami_nameErr_tip = "Only Alphabets ,Numerics and Alphanumerics allowed";
$ff_timestampErr_tip = "Only Positive Numbers with no decimal places";
$Date_fromErr_tip = "Only Positive Numbers with no decimal places";
$Date_toErr_tip = "Only Positive Numbers with no decimal places";
$remarks_aimErr_tip = "Few Special characters are not allowed";
$self_percentageErr_tip = "Only Positive Numbers with no decimal places";
$current_statusErr_tip = "Only Alphabets ,Numerics and Alphanumerics allowed";
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
//<----- Start Variable Server Validation: ami_name---->//
$ami_name = (($_POST['ami_name']));


if (preg_match("/^^[^-\s][a-zA-Z0-9_\s-]*$/", $ami_name) && ($ami_namereq == "required")) {
//condition is true
 $b0= 'true';
 $ami_name_ff1 = $ami_name;
} else {
//condition is false
 $b0= 'false';
 $ami_nameErr = $ami_nameErr_tip; 
 $ami_nameErr_show = $ami_nameErr;

//<----- END Variable Server Validation : ami_name---->//
}

//<----- Start Variable Server Validation: ff_timestamp---->//
$ff_timestamp = (($_POST['ff_timestamp']));


if (preg_match("/^^[^-\s][a-zA-Z0-9_:\s-]*$/", $ff_timestamp) && ($ff_timestampreq == "required")) {
//condition is true
 $b2= 'true';
 $ff_timestamp_ff1 = $ff_timestamp;
} else {
//condition is false
 $b2= 'false';
 $ff_timestampErr = $ff_timestampErr_tip; 
 $ff_timestampErr_show = $ff_timestampErr;

//<----- END Variable Server Validation : ff_timestamp---->//
}

//<----- Start Variable Server Validation: Date_from---->//
$Date_from = (($_POST['Date_from']));


if (preg_match("/^^[^-\s][a-zA-Z0-9_\s-]*$/", $Date_from) && ($Date_fromreq == "required")) {
//condition is true
 $b4= 'true';
 $Date_from_ff1 = $Date_from;
} else {
//condition is false
 $b4= 'false';
 $Date_fromErr = $Date_fromErr_tip; 
 $Date_fromErr_show = $Date_fromErr;

//<----- END Variable Server Validation : Date_from---->//
}

//<----- Start Variable Server Validation: Date_to---->//
$Date_to = (($_POST['Date_to']));


if (preg_match("/^^[^-\s][a-zA-Z0-9_\s-]*$/", $Date_to) && ($Date_toreq == "required")) {
//condition is true
 $b6= 'true';
 $Date_to_ff1 = $Date_to;
} else {
//condition is false
 $b6= 'false';
 $Date_toErr = $Date_toErr_tip; 
 $Date_toErr_show = $Date_toErr;

//<----- END Variable Server Validation : Date_to---->//
}

//<----- Start Variable Server Validation: remarks_aim---->//
$remarks_aim = (($_POST['remarks_aim']));


if (preg_match("/^$|[^`]*$/", $remarks_aim) && ($remarks_aimreq == " ")) {
//condition is true
 $b8= 'true';
 $remarks_aim_ff1 = $remarks_aim;
} else {
//condition is false
 $b8= 'false';
 $remarks_aimErr = $remarks_aimErr_tip; 
 $remarks_aimErr_show = $remarks_aimErr;

//<----- END Variable Server Validation : remarks_aim---->//
}

//<----- Start Variable Server Validation: self_percentage---->//
$self_percentage = (($_POST['self_percentage']));


if (preg_match("/^[1-9][0-9]*$/", $self_percentage) && ($self_percentagereq == "required")) {
//condition is true
 $b10= 'true';
 $self_percentage_ff1 = $self_percentage;
} else {
//condition is false
 $b10= 'false';
 $self_percentageErr = $self_percentageErr_tip; 
 $self_percentageErr_show = $self_percentageErr;

//<----- END Variable Server Validation : self_percentage---->//
}

//<----- Start Variable Server Validation: current_status---->//
$current_status = (($_POST['current_status']));


if (preg_match("/^^[^-\s][a-zA-Z0-9_\s-]*$/", $current_status) && ($current_statusreq == "required")) {
//condition is true
 $b12= 'true';
 $current_status_ff1 = $current_status;
} else {
//condition is false
 $b12= 'false';
 $current_statusErr = $current_statusErr_tip; 
 $current_statusErr_show = $current_statusErr;

//<----- END Variable Server Validation : current_status---->//
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
if ($ami_name_ff1 == "" || $ff_timestamp_ff1 == "" || $Date_from_ff1 == "" || $Date_to_ff1 == "" || $self_percentage_ff1 == "" || $current_status_ff1 == "" || $post_owner_ff1 == ""|| $ami_nameErr !=="" || $ff_timestampErr !=="" || $Date_fromErr !=="" || $Date_toErr !=="" || $remarks_aimErr !=="" || $self_percentageErr !=="" || $current_statusErr !=="" || $post_ownerErr !==""){ echo  " <center>&#9888! Please input required correction</center>";} else {
$ami_name_ff = test_input( $ami_name_ff1 );
$ff_timestamp_ff = test_input( $ff_timestamp_ff1 );
$Date_from_ff = test_input( $Date_from_ff1 );
$Date_to_ff = test_input( $Date_to_ff1 );
$remarks_aim_ff = test_input( $remarks_aim_ff1 );
$self_percentage_ff = test_input( $self_percentage_ff1 );
$current_status_ff = test_input( $current_status_ff1 );
$post_owner_ff = test_input( $post_owner_ff1 );
if($crud->create($ami_name_ff, $ff_timestamp_ff, $Date_from_ff, $Date_to_ff, $remarks_aim_ff, $self_percentage_ff, $current_status_ff, $post_owner_ff)){

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

<!---- form input for (Aim Name) ---->
<div class="form-group">
<label for="Aim Name" style="color: #eb7700">Aim Name</label>*
<input class="form-control" type="text" id="ami_name" name= "ami_name" placeholder="" value="<?php echo htmlspecialchars($ami_name);?>" title="<?php echo $ami_nameErr_tip;?>"required />
<span class="error"><?php echo $ami_nameErr_show;?></span>
</div>

<!---- form input for (TimeStamp) ---->
<div class="form-group">
<label for="TimeStamp" style="color: #eb7700">TimeStamp</label>*
<input class="form-control" type="datetime-local" id="ff_timestamp" name= "ff_timestamp" placeholder="" value="<?php echo htmlspecialchars($ff_timestamp);?>" title="<?php echo $ff_timestampErr_tip;?>"required  onfocus="this.value='<?php echo htmlspecialchars($V9234);?>'"/>
<span class="error"><?php echo $ff_timestampErr_show;?></span>
</div>

<!---- form input for (Date From) ---->
<div class="form-group">
<label for="Date From" style="color: #eb7700">Date From</label>*
<input class="form-control" type="date" id="Date_from" name= "Date_from" placeholder="" value="<?php echo htmlspecialchars($Date_from);?>" title="<?php echo $Date_fromErr_tip;?>"required />
<span class="error"><?php echo $Date_fromErr_show;?></span>
</div>

<!---- form input for (Dead Line) ---->
<div class="form-group">
<label for="Dead Line" style="color: #eb7700">Dead Line</label>*
<input class="form-control" type="date" id="Date_to" name= "Date_to" placeholder="" value="<?php echo htmlspecialchars($Date_to);?>" title="<?php echo $Date_toErr_tip;?>"required />
<span class="error"><?php echo $Date_toErr_show;?></span>
</div>

<!---- form input for (Remarks) ---->
<div class="form-group">
<label for="Remarks" style="color: #eb7700">Remarks</label>
<textarea  class="form-control" type="text" id="remarks_aim" name= "remarks_aim" placeholder="" value="<?php echo htmlspecialchars($remarks_aim);?>" title="<?php echo $remarks_aimErr_tip;?>"  ><?php echo htmlspecialchars($remarks_aim);?></textarea>
<span class="error"><?php echo $remarks_aimErr_show;?></span>
</div>

<!---- form input for (Self Percentage (only number +)) ---->
<div class="form-group">
<label for="Self Percentage (only number +)" style="color: #eb7700">Self Marks</label>*
<input class="form-control" type="number" id="self_percentage" name= "self_percentage" placeholder="" value="<?php echo htmlspecialchars($self_percentage);?>" title="<?php echo $self_percentageErr_tip;?>"required />
<span class="error"><?php echo $self_percentageErr_show;?></span>
</div>

<!---- form input for (Current Status) ---->
<div class="form-group">
<label for="Current Status" style="color: #eb7700">Current Status</label>*
<select class="form-control" type="text" id="current_status" name= "current_status" placeholder="" value="<?php echo htmlspecialchars($current_status);?>" title="<?php echo $current_statusErr_tip;?>"required />
<option>Unfinished</option>
<option>Completed</option>

</select>
<span class="error"><?php echo $current_statusErr_show;?></span>
</div>

<!---- form input for (Owner) ---->
<div class="form-group">
<label for="Owner" style="color: #eb7700">Owner</label>*
<input class="form-control" type="text" id="post_owner" name= "post_owner" placeholder="" value="<?php echo htmlspecialchars($_SESSION['UserData']['Username']);?>" disabled title="<?php echo $post_ownerErr_tip;?>"required />
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