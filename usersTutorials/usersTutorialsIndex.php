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

	# Begin: page-specific settings.
	$pageTitle 		= "Papyrus Tutorials";
	$pageKeywords	= "papyrus, users, documents, tutorials, examples";
	$pageAuthor		= "Sebastien Gerard";
		
# Paste your HTML content between the EOHTML markers!
	$html = <<<EOHTML
<div id="midcolumn">
	<h1>Papyrus Tutorials</h1>
		
	<p>	This page is about the Papyrus documentation dedicated to both its users. It contains both tutorials and examples. In addition to this page, users may find documentation in the online help of the Eclipse tool.</p>
	
	<h3>Presentations at conferences</h3>
		<ul>
			<li><a href="resources/ECE15-MDE WITH PAPYRUS novelties and beyond.pptx">Presentation at the EclipseCon 2015 Europe</a></li>
		</ul>
	<h3>Tutorials for modeling with Papyrus</h3>
		<ul>
			<li><a href="resources/TutorialOnPapyrusUSE_d20101001.pdf">A slide-ware tutorial on Papyrus usage for starters (2010-10-01).</a></li>
			<li><a href="resources/PapyrusTutorial_CollaborativeWork_v1.0_d20110727.pdf">A tutorial on Papyrus usage for collaborative work  (2011-07-27).</a></li>
			<li><a href="resources/PapyrusTutorial_OnSequenceDiagrams_v0.1_d2010100.pdf">A tutorial on Papyrus sequence diagram editor  (2010-10-01).</a></li>
			<li><a href="resources/PapyrusTutorial_OnActivityDiagrams_v0.2_d20110719.pdf">A tutorial on Papyrus activity diagram editor (2011-07-19).</a></li>
			<li><a href="resources/PapyrusTutorial_OnDiagramStylesheets.pdf">A tutorial on Papyrus diagram stylesheets (2012-09-27).</a></li>
		</ul>
	<h3>Tutorials for desiging DSML support within Papyrus</h3>
		<ul>
			<li><a href="resources/PapyrusUserGuideSeries_AboutUMLProfile_v1.0.0_d20120606.pdf">A tutorial on designing and using UML profiles with Papyrus (2012-06-06).</a></li>
		</ul>	
		
	</div>

<!-- remove the entire <div> tag to omit the right column!  -->
<div id="rightcolumn">
	<div class="sideitem">
		<h6>Related Links</h6>
		<ul>
			<li>For developpers, let's see at the <a href="http://wiki.eclipse.org/MDT/Papyrus">Papyrus wiki</a></li>
			<li>For questions, let's go to the <a href="http://www.eclipse.org/newsportal/thread.php?group=eclipse.papyrus">Papyrus forum</a></li>
		</ul>
	</div>
</div>
EOHTML;
	
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>