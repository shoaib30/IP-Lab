#!/opt/lampp/bin/perl
use DBI;
use CGI ":standard";
print "content-type: text/html \n\n";

#connecting to db
$db=DBI->connect("DBI:mysql:library","root","");
print "connection established...</br><br/>";
print "selected database<br/><br/>";

#making the query
$query=$db->prepare("insert into books values(?,?,?,?,?,?)");

$bno=param("t1");
$tit=param("t2");
$aut=param("t3");
$pub=param("t4");
$pri=param("t5");
$ed=param("t6");

$result=$query->execute($bno,$tit,$aut,$pub,$pri,$ed);

print "<br/>Book inserted<br/>";
