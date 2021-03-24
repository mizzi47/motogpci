<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
<html> 
<head>
    <title>Credits</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="icon" type="image/png" href="source/homecon.png"/>
</head>
<body class ="credits">
    <div class = "nav">
            <ul class = "pic">
                <li><img src = "source/navlogo.png" height ="50px"/></li>
            </ul>
            <ul class = "pic">
                <li> <a class = "login" href ="login.html" > Login </a></li>
            </ul>
            <ul>
                <li> <a href = "Home.html" > Home </a></li>
                <li> <a class = "active" href = "contacts.html" > Contact Us </a></li>
            </ul>
    </div><br></br><br></br>
    <div class = "contain">
        <H2 align = "center">ANY ENQUIRES, CAN CONTACT US AS BELOW</H2>
    </div>
    <div class = "contain">
        <div class = "contain">
          <table align = "center" border="1">
            <tr bgcolor="#9acd32">
              <th style="text-align:left">Name</th>
              <th style="text-align:left">Phone</th>
              <th style="text-align:left">Email</th>
            </tr>
            <xsl:for-each select="//person">
            <tr>
              <td><xsl:value-of select="name"/></td>
              <td><xsl:value-of select="phone"/></td>
              <td><xsl:value-of select="email"/></td>
            </tr>
            </xsl:for-each>
          </table>
        </div>
    </div>
</body>
</html>
</xsl:template>
</xsl:stylesheet>

