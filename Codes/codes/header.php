<!DOCTYPE html>
<html>
<title>HABITT-O-CIRCLE</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="./common/xp.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body>

<div class="xp-bar" style="background-color: #eb7700; color:white;">
  <a href="\dailyregister\codes\" class="xp-bar-item xp-button">HOME</a>
  <a href="\dailyregister\codes\Aimset" class="xp-bar-item xp-button">Aimset</a>
  <a href="\dailyregister\codes\Habbit" class="xp-bar-item xp-button xp-hide-small">Ur Habbit</a>
  <a href="\dailyregister\codes\Received" class="xp-bar-item xp-button xp-hide-small">+ Received</a>
   <a href="\dailyregister\codes\Expenses" class="xp-bar-item xp-button xp-hide-small">-Expenses</a>
    <a href="\dailyregister\codes\SeeRemarks" class="xp-bar-item xp-button xp-hide-small">SeeRemarks</a>
	 <a href="\dailyregister\codes\GiveRemarks" class="xp-bar-item xp-button xp-hide-small">GiveRemarks</a>
  <a href="logout.php" class="xp-bar-item xp-button xp-hide-small">Logout</a>
  <a href="javascript:void(0)" class="xp-bar-item xp-button xp-right xp-hide-large xp-hide-medium" onclick="myFunction()">&#9776;</a>
</div>

<div id="demo" style="background-color: #eb7700; color:white;" class="xp-bar-block  xp-hide xp-hide-large xp-hide-medium">
  
  <a href="\dailyregister\codes\Aimset" class="xp-bar-item xp-button ">Label Received</a>
  <a href="\dailyregister\codes\Habbit" class="xp-bar-item xp-button ">Label Expenses</a>
   <a href="\dailyregister\codes\Received" class="xp-bar-item xp-button ">+ADD MONEY</a>
    <a href="\dailyregister\codes\Expenses" class="xp-bar-item xp-button ">-SPENDED MONEY</a>
	 <a href="\dailyregister\codes\SeeRemarks" class="xp-bar-item xp-button ">SeeRemarks</a>
	  <a href="\dailyregister\codes\GiveRemarks" class="xp-bar-item xp-button ">GiveRemarks</a>
  <a href="logout.php" class="xp-bar-item xp-button ">Logout</a>
</div>


<script>
function myFunction() {
  var x = document.getElementById("demo");
  if (x.className.indexOf("xp-show") == -1) {
    x.className += " xp-show";
  } else { 
    x.className = x.className.replace(" xp-show", "");
  }
}
</script>

</body>
</html>