<?php
	$db=mysql_connect("localhost","root","");
	if(!$db)
		exit("error connecting MySQL");
	$er=mysql_select_db("telinfo");
	if(!$er)
		exit("Error connecting DB".mysql_error());
	$val=$_POST["val"];
	$ch=$_GET["id"];
	if($ch==0)
		$query="select * from telephone where phno= $val ;";
	elseif($ch==1)
		$query="select * from telephone where name= '$val' ;";
	$result=mysql_query($query);
	if(!$result)
		exit("Error finding record".mysql_error());
	$row=mysql_fetch_array($result);
	echo "Name: ".$row["name"];
	echo "<br/>Number: ".$row["phno"];
	echo "<br/>Address: ".$row["address"];
	echo "<br/>Pincode: ".$row["pincode"];
	mysql_close();
?>
