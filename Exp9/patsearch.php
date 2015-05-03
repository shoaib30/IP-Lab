<?php
	$db=mysql_connect("localhost","root","");
	if(!$db)
		exit("error connecting MySQL");
	$er=mysql_select_db("hospital");
	if(!$er)
		exit("Error connecting DB".mysql_error());
	$p1=$_POST["t1"];
	
	$query="select * from patient where pno=$p1;";
	$result=mysql_query($query);
	if(!$result)
		exit("No Patient found".mysql_error());
	$row=mysql_fetch_array($result);
	//if(count($row))
		//exit("No row Found");
	echo "<br/>Patient Name: ".$row["pname"];
	echo "<br/>Patient Number: ".$row["pno"];
	echo "<br/>Disease: ".$row["dis"];
	echo "<br/>Doctor: ".$row["doc"];
	mysql_close();
?>
