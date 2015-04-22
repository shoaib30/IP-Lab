<?php
	session_start();
	if(!IsSet($_SESSION["pn"]))
		$_SESSION["pn"]=1;
	$pg=$_SESSION["pn"];
	$_SESSION["pn"]++;
	$num=rand(1,5);
	switch($num)
	{
		case 1:echo"Hello";break;
		case 2:echo"Hola";break;
		case 3:echo"Bonjour";break;
		case 4:echo"Aloha";break;
		case 5:echo"Servus";break;
	}
	print("<br/>No of visitors to this page $pg");
?>
