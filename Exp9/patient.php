<?php
	$db=mysql_connect("localhost","sid","Shoaib@123");
	if(!$db)
		exit("error connecting MySQL");
	$er=mysql_select_db("hospital");
	if(!$er)
		exit("Error connecting DB".mysql_error());
	$p1=$_POST["t1"];
	$p2=$_POST["t2"];
	$p3=$_POST["t3"];
	$p4=$_POST["t4"];
	$query="insert into patient(pname,pno,dis,doc) values('$p1',$p2,'$p3','$p4');";
	$result=mysql_query($query);
	if(!$result)
		exit("Error inserting patient".mysql_error());
	print "Record Added Successfully";
	mysql_close();
?>
