#!/opt/lampp/bin/perl
use CGI ":standard";
use CGI::Cookie;


#getting data from form
$a=param("t1");
$b=param("t2");


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
		print ("Welcome back $a");
		last; #breaks from loop
	}
}
exit(0);