<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script  type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB9wBJ9JSFxX12Uqv7T-klC35sOX7ZvvC4&sensor=false" type="text/javascript"></script>
<script language="javascript" type="text/javascript" src="1.js"></script>
</head>

<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$con = mysql_connect($servername,$username,$password);
if(!$con){
	die("Connection failed:" . $con->connect_error);
}
echo "connected successfully\n";
$selected=mysql_select_db ("test",$con);
$query = 'INSERT INTO  test.location '.'(
ID ,
Lat,
Lng
)'.
'VALUES ("", "" ,  "")';
$ret = mysql_query($query,$con);
if(!$ret){
	die("Insert data failed");
}
echo "<br>Insert is done successfully";
mysql_close($con);
?>
<div  id="googleMap" style="height:500px; width:500px;">
</div>
<div id="latlng" style="width:500px; height:500px; position:inherit; background-color:#0F3;">
<?php
	echo $latLocation="<script>document.write( initialLocation.lat());</script>";
	echo $lngLocation="<br><script>document.write( initialLocation.lng());</script>";
?>
</div>
</body>
</html>
