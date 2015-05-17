#!/opt/lampp/bin/perl
use CGI ":standard";
use CGI::Cookie;


#getting data from form
$a=param("t1");
$b=localtime();
$flag=0;

#storing the data into the cookie
$Dcookie=CGI::Cookie->new(-name=>$a,-value=>$b,-expires=>'+3M');
print header(-cookie=>$Dcookie);
print html_start;
print ('Cookie Saved <br/>');
print html_end;


#fetching the cookie
%cookies=CGI::Cookie->fetch;
foreach $nm (keys %cookies)
{
	if ($nm eq $a)
	{
		$lv=$cookies{$nm}->value;
		print html_start;
		print ("Welcome back $a<br/>");
		print ("last visit : $lv");
		print html_end;
		$flag=1;
		last; #breaks from loop
	}
}

if($flag==0)
{
	print ("Welcome new visitor");
}
exit(0);