<?php
	if(file_exists("visitors.dat"))
	{
		$count=file_get_contents("visitors.dat");
		$count++;
	}
	else
	{
		$count=1;	
	}
	file_put_contents("visitors.dat",$count);
	$num=rand(1,5);
	switch($num)
	{
		case 1:echo"Hello";break;
		case 2:echo"Hola";break;
		case 3:echo"Bonjour";break;
		case 4:echo"Aloha";break;
		case 5:echo"Servus";break;
	}
	print("<br/>No of visitors to this page $count");
?>
