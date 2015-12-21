<?xml version="1.0" encoding="utf-8"?>
<!-- 
<item title="" icon="" link="">
 Some content
</item>
 -->
<xsl:stylesheet 
	xmlns:xsl="http://www.w3.org/1999/XSL/Transform" 
	version="1.0" 
	xmlns:xalan="http://xml.apache.org/xalan" 
	exclude-result-prefixes="xalan date"
	xmlns:date="http://exslt.org/dates-and-times">
<xsl:template match="news" mode="pageinfo">
  <xsl:param name="root"/>
  <xsl:call-template name="page">
    <xsl:with-param name="element" select="."/>
    <xsl:with-param name="title" select="'News'"/>
    <xsl:with-param name="subtitle" select="'What&#8216;s new with the WTP'"/>
    <xsl:with-param name="root" select="'../'"/>
  </xsl:call-template>
</xsl:template>
<xsl:template match="news">
  <xsl:param name="root"/>
  <xsl:variable name="items">
    <xsl:apply-templates select="." mode="listcreation">
       <xsl:with-param name="all">true</xsl:with-param>
    </xsl:apply-templates>
   </xsl:variable>
   <table BORDER="0" CELLSPACING="5" CELLPADDING="2" WIDTH="100%" >
        <tr> 
          <td ALIGN="LEFT" VALIGN="TOP" COLSPAN="2" BGCOLOR="#0080C0">
            <b><font color="#FFFFFF" face="Arial,Helvetica">&#160;</font></b>
          </td>
        </tr>
      </table>
   <table border="0">
   <xsl:for-each select="xalan:nodeset($items)/item">
       <tr>
         <td width="100" valign="top">
           <b><xsl:value-of select="date:month-name(@date)"/>&#160;<xsl:value-of select="date:day-in-month(@date)"/>,&#160;<xsl:value-of select="date:year(@date)"/></b>
         </td>
         <td width="10" valign="top">
           <img src="{$root}/images/Adarrow.gif"/>
         </td>
         <td valign="top">
           <h3><xsl:value-of select="@title"/></h3>
           <xsl:apply-templates select="*|@*|text()" mode="body"/><br /><br />
         </td>
       </tr>
   </xsl:for-each>
   </table>
</xsl:template>
<xsl:template match="news" mode="listcreation">
<xsl:param name="all"/>
<xsl:param name="alldates"/>
<xsl:variable name="numItems" select="5"/>
          <xsl:for-each select="item">
          <xsl:sort select="@date" order="descending"/>
          <xsl:if test="$all or ($numItems+1 > position())">
            <item>
              <!-- 
              <xsl:if test="$alldates or (not(preceding-sibling::item[1]/@date) or not(contains(@date,preceding-sibling::item[1]/@date)))">
              -->
              <xsl:attribute name="title"><xsl:value-of select="@title"/></xsl:attribute>
              <xsl:attribute name="date"><xsl:value-of select="@date"/></xsl:attribute>
              <xsl:if test="@link != ''">
                <xsl:attribute name="link"><xsl:value-of select="@link"/></xsl:attribute>
              </xsl:if>
              <!-- 
              </xsl:if>
              -->
              <xsl:attribute name="icon">
                {$root}/images/adarrow.gif
              </xsl:attribute>
              <!-- xsl:attribute name="link"/-->
	          
		        <xsl:apply-templates select="*|text()" mode="news"/>
	         
            </item>
          </xsl:if>
          </xsl:for-each>
</xsl:template>

<xsl:template match="*|@*|text()" mode="news">
		<xsl:copy>
			<xsl:apply-templates select="*|@*|text()" mode="news"/>
		</xsl:copy>
</xsl:template>
</xsl:stylesheet>
