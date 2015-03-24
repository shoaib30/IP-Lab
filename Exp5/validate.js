function validateUSN()
{
	var dom = document.getElementById("usn");
	var str = dom.value;
	var pos = dom.value.search(/^\d[A-Z][A-Z]\d\d[A-Z][A-Z]\d\d\d$/);
	if (pos!=0)
	{
		alert("USN is incorrect. correct format : 1MS13IS999");
		dom.focus();
		dom.select();	
		return false;
	}
	else
	{
		alert("USN is correct");
		return true;
	}
}
function validateSEM()
{
	var dom=document.getElementById("sem");
	var str=dom.value;
	var pos=str.search(/^[1-8]$/);
	if(pos != 0)
	{
		alert("Semester is incorrect");
		dom.focus();
		dom.select();	
		return false;
	}
	else
	{
		alert("Semester is correct");
		return true;
	}
}
