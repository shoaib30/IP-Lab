<?php
	$db=mysql_connect("localhost","root","");
	if(!$db)
		exit("error connecting MySQL");
	$er=mysql_select_db("telinfo");
	if(!$er)
		exit("Error connecting DB".mysql_error());
	$num=$_POST["num"];
	$name=$_POST["name"];
	$add=$_POST["add"];
	$pin=$_POST["pin"];
	$query="insert into telephone(phno,name,address,pincode) values ('$num','$name','$add','$pin');";
	$result=mysql_query($query);
	if(!$result)
		exit("Error inserting record".mysql_error());
	print "Record Added Successfully";
	mysql_close();
?>
