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
	$pageTitle 		= "Papyrus Custumization Documentation";
	$pageKeywords	= "papyrus, users, documents, tutorials, examples";
	$pageAuthor		= "Sebastien Gerard";
		
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML
<div id="midcolumn">
	<h1>Papyrus Custumization Documentation Corner</h1>
		
	<p>Papyrus is a UML tool that provide very advanced facilities for customizing the tool. You will find in this page tutorials and examples illustrating the usage of all this custum facilities. </p>
		
	<h3>Tutorials</h3>
		<ul>
			<li>Coming soon...</li>
		</ul>

	<h3>Examples</h3>
	<ul>
		<li><a href="./custumizationExamples/custumizationExamplesIndex.php">The mixin machin DSML example</li>
	</ul>
</div>

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