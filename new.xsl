<?xml version="1.0" encoding="ISO-8859-1"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:template match="/">

<html>
<body>
<table border='1' width='100%' style="border-width:1">
 <CAPTION style="color:red;">STUDENT PROFILE</CAPTION>
  <thead>
   <tr>
    <th style="color:#000;" rowspan="2">ID</th>
    <th style="color:#000;" rowspan="2">USERNAME</th>
    <th style="color:#000;" rowspan="" colspan="2">NAME</th>
	<th style="color:#000;" colspan="2" rowspan="">CONTACT</th>
	<th style="color:#000;" colspan="3">RESUME</th>
   </tr>
	<tr>
     <th style="color:#000;">FIRST NAME</th>
     <th style="color:#000;">LAST NAME</th>
	  <th style="color:#000;">Contact 1</th>
      <th style="color:#000;">Contact 2</th>
	  <th style="color:#000;">Languages</th>
      <th style="color:#000;">Interships</th>
      <th style="color:#000;">Industrial Skills</th>
	</tr>	

  </thead>

   <xsl:for-each select="PROFILE/RECORD" >
   <tr>
    <td style="font-weight:900;"><xsl:value-of select="sid"/></td>
    <td style="font-weight:bold"><xsl:value-of select="uname"/></td>
    <td><table  width='100%'>
     <xsl:for-each select="fullname/name" >
      <tr>
       <td width="100%"><xsl:value-of select="fullname_1"/></td>
	   </tr>
     </xsl:for-each>
      </table></td>
      <td><table width='100%'>
     <xsl:for-each select="fullname/name" >
      <tr>
       <td width="100%"><xsl:value-of select="fullname_2"/></td>
	   </tr>
     </xsl:for-each>
      </table></td>
      
	  
    <td><table  width='100%'>
    <xsl:for-each select="contact/phone" >
    <tr>
     <td width="100%"><xsl:value-of select="contact_1"/></td>
	  </tr>
    </xsl:for-each>
    </table></td>
     
	  <td><table width='100%'>
    <xsl:for-each select="contact/phone" >
    <tr>
     <td width="100%"><xsl:value-of select="contact_2"/></td>
	  </tr>
    </xsl:for-each>
    </table></td>
   

    <td><table width='100%'>
    <xsl:for-each select="resume/detail" >
     <tr>
      <td width="33%"><xsl:value-of select="lang_1"/></td>
     </tr>
    </xsl:for-each>
    </table></td>

	<td>
	<table width='100%'>
	<xsl:for-each select="resume/detail" >
	<tr>
	<td width="33%"><xsl:value-of select="intern_1"/></td>
	</tr>
	</xsl:for-each>
	</table></td>

	<td>
	<table width='100%'>
	<xsl:for-each select="resume/detail" >
	<tr>
	 <td width="33%"><xsl:value-of select="indust_1"/></td>
	</tr>
	</xsl:for-each>
	</table></td>
	
</tr>
</xsl:for-each>

</table>

</body>
</html>

</xsl:template>
</xsl:stylesheet>



