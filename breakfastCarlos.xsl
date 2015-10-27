<?xml version="1.0" encoding="UTF-8"?>

<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:template match="/">
  <html>
    <head>
      <link rel="stylesheet" type="text/css" href="styleSheet.css"/>
    </head>
  <body>
    <table border="1">
      <caption><h2>Desayunos</h2></caption> 
      <tr id="header">
        <th>ID</th>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Calorias</th>
      </tr>
      <xsl:for-each select="desayuno/platillo">
      <xsl:sort select="/desayuno/platillo/caloriasfirstname"/>
      <tr>
        <td><xsl:value-of select="desayuno/platillo/@id"/></td>
        <td><xsl:value-of select="nombre"/></td>
        <td>$<xsl:value-of select="precio"/></td>
        <td><xsl:value-of select="calorias"/></td>

      </tr>

      </xsl:for-each>
      <tr>
        <td colspan="4">------------------------------------------------------</td>
      </tr>

      <tr>
        <td colspan="3">Total Calorias: </td>
        <td><xsl:value-of select="sum(desayuno/platillo/calorias)"/></td>
      </tr>
      <tr>
        <td colspan="3">Total: </td>
        <td>$<xsl:value-of select="sum(desayuno/platillo/precio)"/></td>
      </tr>
    </table>
    </body>
  </html>
</xsl:template>

</xsl:stylesheet>
