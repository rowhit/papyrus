<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
/*******************************************************************************
 * Copyright (c) 2009 Eclipse Foundation and others.
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/epl-v10.html
 *
 * Contributors:
 * Sébastien Gérard, CEA LIST
 *    
 *******************************************************************************/
	
	$root = $_SERVER['DOCUMENT_ROOT'];

	require_once($root . "/eclipse.org-common/system/app.class.php");	require_once($root . "/eclipse.org-common/system/nav.class.php"); 	require_once($root . "/eclipse.org-common/system/menu.class.php"); 	require_once ($root . '/papyrus/common.php'); require_once ($root . '/papyrus/newstohtml.php'); $App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());

	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Papyrus Update Sites";
	$pageKeywords	= "papyrus, dsl, modeling, domain specific language, graphical, uml, sysml, Update Site";
	$pageAuthor		= "Remi Schnekenburger";
	
	# Paste your HTML content between the EOHTML markers!
	$html = <<<EOHTML
	
<!-- Middle part -->
<div id="midcolumn">

	<object type="application/x-shockwave-flash"data="PapyrusInstallation&UpdateProcedure.swf" width="400" height="350"> 
		<param name="movie" value="PapyrusInstallation&UpdateProcedure.swf" /> 
		<param name="wmode" value="transparent" /> 
		<param name="quality" value="high"/>
	</object>


	<h1>Papyrus Installation Guide</h1>
	<ul>
		<li>The most basic procedure for installing Papyrus consists in installing the <a href= "http://www.eclipse.org/downloads/packages/eclipse-modeling-tools/keplersr2">Eclipse Modeling Package</a> for your own platform.</li>
		<li>Then, you have to use the discovery interface ("Help" => "Install Modeling Component") and select Papyrus.</li>
		<li>Proceed through installation steps. It is then recommended to install latest release from Papyrus (0.10.2a). See instruction on following chapter "Papyrus Update sites".
		<br/>See the <a href="http://www.eclipse.org/forums/index.php?t=rview&goto=1259579#msg_1259579">papyrus forum</a> for more information</li>
	</ul>


	<h1>Papyrus Update Sites</h1>
		<p align="JUSTIFY">Eclipse provides facilities for adding new software to the platform or updating software in the system. 
In all cases, the site location (i.e. the Web URL or the archived Update Site provided above) is the only required item to update or install a software within Eclipse.</p>
		<p align="JUSTIFY">To add the Papyrus site, one of the procedures described from the <a href="http://help.eclipse.org/galileo/index.jsp?topic=/org.eclipse.platform.doc.user/tasks/tasks-129.htm">Install Manager documentation</a> must be followed.</p>  

		<h4>Update sites for Papyrus release versions:</h4>
			<h5>Papyrus release 0.10.2a (Kepler) (Recommended):</h5>
			<ul>
				<li>Papyrus 0.10.X / Eclipse Kepler:<br/> 	<font color='#808080'>http://download.eclipse.org/modeling/mdt/papyrus/updates/releases/kepler</font></li>
			</ul>
			<h5>Previous releases</h5>
			<ul>
				<li>Papyrus 0.9.2 / Eclipse Juno:<br/>		<font color='#808080'>http://download.eclipse.org/modeling/mdt/papyrus/updates/releases/juno</font></li>
				<li>Papyrus 0.8.2 / Eclipse Indigo:<br/> 	<font color='#808080'>http://download.eclipse.org/modeling/mdt/papyrus/updates/releases/maintenance/indigo</font></li>
				<li>Papyrus 0.7.3 / Eclipse Helios:<br/> 	<font color='#808080'>http://download.eclipse.org/modeling/mdt/papyrus/updates/releases/helios</font></li>
			</ul>
		
		<h4>Update sites for Papyrus nightly builds:</h4>
			<p>For advanced users and pioneers, you can access the latest commits done within Papyrus by accessing its nightly builds...</p>
			<h5>Papyrus nightly builds, version 1.0.x (Luna):</h5>
			<ul>
				<li>Papyrus 1.0.x / Eclipse Luna:<br/> <font color='#808080'>http://download.eclipse.org/modeling/mdt/papyrus/updates/nightly/luna</font></li>
			</ul>
			
			<h5>Previous nightly builds</h5>
			<ul>
				<li>Papyrus 0.10.x / Eclipse Kepler:<br/> <font color='#808080'>http://download.eclipse.org/modeling/mdt/papyrus/updates/nightly/kepler</font></li>
				<li>Papyrus 0.9.x / Eclipse Juno:<br/> 	<font color='#808080'>http://download.eclipse.org/modeling/mdt/papyrus/updates/nightly/juno</font></li>
				<li>Papyrus 0.8.x / Eclipse Indigo:<br/> <font color='#808080'>http://download.eclipse.org/modeling/mdt/papyrus/updates/nightly/indigo</font></li>
			</ul>
</div>
EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>