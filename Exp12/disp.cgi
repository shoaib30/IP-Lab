#!/opt/lampp/bin/perl
use DBI;
use CGI ":standard";
print "content-type: text/html \n\n";

#connecting to db
$db=DBI->connect("DBI:mysql:library","root","");
print "connection established...</br><br/>";
print "selected database<br/><br/>";

$query=$db->prepare("select * from books");

$query->execute;

print ("<html><body><table border='2'>");
print ("<tr><td>BNO</td><td>Title</td><td>Author</td><td>Publisher</td><td>Price</td><td>Edition</td></tr>");

while(@row=$query->fetchrow_array())
{
	print "<tr><td>";
	print $row[0];
	print "</td><td>";
	print $row[1];
	print "</td><td>";
	print $row[2];
	print "</td><td>";
	print $row[3];
	print "</td><td>";
	print $row[4];
	print "</td><td>";
	print $row[5];
	print "</td></tr>";
}

print "</table></body></html>";
