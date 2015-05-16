#!/opt/lampp/bin/perl
use CGI ":standard";
print "content-type: text/html\n\n";
$a=param("t1");
$b=param("t2");
if($b lt(18))
{
	print "not eligible";
}
else
{
	print "eligible";
}