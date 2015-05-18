<?php
	$db=mysql_connect("localhost","sid","Shoaib@123");
	if(!$db)
		exit("error connecting MySQL");
	$er=mysql_select_db("hospital");
	if(!$er)
		exit("Error connecting DB".mysql_error());
	
	$query="select * from patient;";
	$result=mysql_query($query);
	if(!$result)
		exit("No Patient found".mysql_error());
	while($row=mysql_fetch_array($result))
	{
		echo "<br/>Patient Name: ".$row["pname"];
		echo "<br/>Patient Number: ".$row["pno"];
		echo "<br/>Disease: ".$row["dis"];
		echo "<br/>Doctor: ".$row["doc"];
		echo "<br/><br/><br/>";
	}
	mysql_close();
?>