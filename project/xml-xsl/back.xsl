<?xml version = "1.0" encoding = "UTF-8"?> 
<xsl:stylesheet version = "1.0" xmlns:xsl = "http://www.w3.org/1999/XSL/Transform"> 
<xsl:template match = "/"> 
<html> 
<body> 
<h2><center>User Profile</center></h2> 
<table border = "1" align="center"> 
<tr bgcolor = "grey"> 
<th>ID</th> 
<th>Name</th> 
<th>Email</th> 
<th>Mobile</th>
<th>Country</th>
<th>Gender</th>
<th>Hobbies</th>
</tr>
<xsl:for-each select = "class/user"> 
<xsl:sort select = "id"/> 
<tr> 
<td><xsl:value-of select = "@id"/></td> 
<td><xsl:value-of select = "name"/></td> 
<td><xsl:value-of select = "email"/></td> 
<td><xsl:value-of select = "mobile"/></td> 
<td><xsl:value-of select = "country"/></td> 
<td><xsl:value-of select = "gender"/></td> 
<td><xsl:value-of select = "hobbies"/></td> 
</tr> 
</xsl:for-each> 
</table> 
</body> 
</html> 
</xsl:template> 
</xsl:stylesheet>
