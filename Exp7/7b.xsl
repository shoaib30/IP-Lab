<?xml version="1.0" encoding="utf-8"?>
<xsl:stylesheet version="1.0"
			xmlns:xsl ="http://www.w3.org/1999/XSL/Transform"
			xmlns="http://www.w3.org/1999/xhtml">
	<xsl:template match="employees">
	<h2> Employee Details </h2>
		<xsl:for-each select="employee">
			<span style="font-style:italic;color:black">Name:</span>
			<xsl:value-of select="ename"/>
			<br/>
			<span style="font-style:italic;color:brown">Designation:</span>
			<xsl:value-of select="edesig"/>
			<br/>
			<span style="font-style:italic;color:blue">Salary:</span>
		<xsl:value-of select="esalary"/>
		<br/>
		</xsl:for-each>
	</xsl:template>
</xsl:stylesheet>
