<?php  
/*******************************************************************************
 * Copyright (c) 2009 Eclipse Foundation and others.
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/epl-v10.html
 *
 * Contributors:
 * Remi Schnekenburger (CEA LIST)
 *    
 *******************************************************************************/																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
$root = $_SERVER['DOCUMENT_ROOT'];
require_once ($root . '/papyrus/common.php'); require_once ($root . '/papyrus/newstohtml.php');

$pageTitle = "Papyrus Project: News";
$pageKeywords	= "";
$pageAuthor		="Remi Schnekenburger";


# Generate the web page
// Get the XML news feed as html
$news = news_to_html($root . "/papyrus/news.xml", "$pageTitle", "/papyrus/news/");

$html = <<<EOHTML
<div id="maincontent">
	<div id="midcolumn">
		<table>
			<tr>
				<td width="60%">
					<h1>Papyrus News</h1>
					<div class="papyrussubtitle">$pageTitle</div>
				</td>
				<td>
					<img src="/papyrus/images/PapyrusLogo48x48.gif"
						align="middle" height="129" hspace="50" width="207" alt="Papyrus logo" 
						usemap="logomap" />
                    <map
                        id="logomap"
                        name="logomap">
                        <area
                            coords="0,0,207,129"
                            href="/papyrus"
                            alt="Papyrus log" />
                    </map>
				</td>
			</tr>
		</table>
		<div class="homeitem3col">
		$news
		</div>
	</div>
</div>

EOHTML;
		$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
		?>
