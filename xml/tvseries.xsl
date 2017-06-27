<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE tvseries>

<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/tvseries">
<html lang="en">
<head>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width"/>
	<title>TV series - Game of Thrones</title>
	
	<link href="style.css" rel="stylesheet" />
</head>
	<body>
		<header>
			<h2 class="xml_title"><xsl:value-of select="title" /></h2>
			<ul>
				<li>Genre: <xsl:value-of select="@genre" /></li>
				<li>Release: <xsl:value-of select="@release" /></li>
				<li>Origin: <xsl:value-of select="@origin" /></li>
				<li>Network: <xsl:value-of select="network" /></li>
			</ul>
		</header>
		<aside>
			<h3>Character Navigation</h3>
			<ul>
				<xsl:apply-templates select="characters/character" />
			</ul>
		</aside>
		<main>
			<xsl:for-each select="characters/character">
				<div class="d{@id mod 2}">
					<xsl:choose>
						<xsl:when test="allegiance='House Lannister'">
							<img src="./images/house_lannister.png" class="crest" />
						</xsl:when>
						<xsl:when test="allegiance='House Baratheon'">
							<img src="./images/house_baratheon.png" class="crest" />
						</xsl:when>
						<xsl:otherwise>
							<img src="./images/house_stark.png" class="crest" />
						</xsl:otherwise>	
					</xsl:choose>
					<h2 id="{@id}">#<xsl:value-of select="@id"/>: 
						<xsl:value-of select="personinfo/firstname"/>&#160;<xsl:value-of select="personinfo/surname" /></h2>
		    		<img src ="{image/@src}" style="width:{image/@width}px; height:{image/@height}px;"/>
		    		<h3>Character Info:</h3>
		    		<table class="infotable">
		    			<tr>
		    				<td>Status</td>
		    				<td><xsl:value-of select="@status" /></td>
		    			</tr>
		    			<tr>
		    				<td>Seasons</td>
		    				<td><xsl:value-of select="seasons" /></td>
		    			</tr>
		    			<tr>
		    				<td>Allegiance</td>
		    				<td><xsl:value-of select="allegiance" /></td>
		    			</tr>
		    		</table>
		    		<xsl:apply-templates select="actor" />
	    		</div>
			</xsl:for-each>
		</main>
	</body>
</html>
</xsl:template>

<xsl:template match="characters/character">
	<li><a href="#{@id}"><xsl:value-of select="personinfo/firstname" />&#160;<xsl:value-of select="personinfo/surname" /></a></li>
</xsl:template>

<xsl:template match="actor">
	<h3>Actor Info:</h3>
	<table class="infotable">
		<tr>
			<td>First Name</td>
			<td><xsl:value-of select="personinfo/firstname" /></td>
		</tr>
		<tr>
			<td>Surname</td>
			<td><xsl:value-of select="personinfo/surname" /></td>
		</tr>
		<tr>
			<td>Birthday</td>
			<td><xsl:value-of select="@birthday" /></td>
		</tr>
		<tr>
			<td>Birthplace</td>
			<td><xsl:value-of select="birthplace/city" /></td>
		</tr>
		<tr>
			<td>Nationality</td>
			<td><xsl:value-of select="birthplace/country" /></td>
		</tr>
	</table>
</xsl:template>
</xsl:stylesheet>