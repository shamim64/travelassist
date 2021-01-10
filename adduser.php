<?php if(!isset($_SESSION)) { session_start(); } ?>

<!DOCTYPE html>
<html>
<head>
<title>User Details</title>

<link href="css/style.css" rel="stylesheet" type="text/css"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--js--> 
<script src="js/jquery.min.js"></script>

<!--/js-->
</head>
<body>


<?php
if($_SESSION['loginstatus']=="")
{
	header("location:loginform.php");
}
?>

<?php
if(isset($_POST["submit"]))
{
	$cn=makeconnection();
	$s="insert into users values('" . $_POST["t1"] ."','" . $_POST["t2"] . "','" . $_POST["s1"] . "')";
	mysqli_query($cn,$s);
	mysqli_close($cn);
	echo "<script>alert('Record Save');</script>";
}
?>



<?php include('top.php'); ?>

<div style="padding-top:100px; box-shadow:1px 1px 20px black; min-height:570px" class="container">
<div class="col-sm-3" style="border-right:1px solid #999; min-height:450px;">
<?php include('left.php'); ?>
</div>
<div class="col-sm-9">




<form method="post">
<table border="0" width="400px" height="300px" align="center" class="tableshadow">
<tr><td colspan="2" class="toptd">Add User</td></tr>
<tr><td class="lefttxt">User Name</td><td><input type="text" name="t1" required pattern="[a-zA-z1 _]{3,50}" title"Please Enter Only Characters and numbers between 3 to 50 for User name" /></td></tr>
<tr><td class="lefttxt">Password</td><td><input type="password" name="t2" required pattern="[a-zA-z0-9]{1,10}" title"Please Enter Only Characters and numbers between 1 to 10 for Company name"/></td></tr>
<tr><td class="lefttxt">Confirm Password</td><td><input type="password" name="t3" required pattern="[a-zA-z0-9]{1,10}" title"Please Enter Only Characters and numbers between 1 to 10 for Company name"/></td></tr>

<tr><td>&nbsp;</td><td ><input type="submit" value="SAVE" name="submit" /></td></tr>

</table>
</form>
</div>
</div>
<?php include('bottom.php'); ?>
</body>
</html>