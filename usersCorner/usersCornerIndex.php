<?php
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
	$pageTitle = "Papyrus Users Corner";
	$pageKeywords = "papyrus, users, documents, tutorials, examples";
	$pageAuthor = "Sebastien Gerard";

	// 	Paste your HTML content between the EOHTML markers!
	$html = <<<EOHTML
	
<div id="midcolumn">
	<h1>Papyrus Documentation Corner</h1>
	<p>
	Papyrus is a UML tool that provide very advanced facililitlies for custmizing the tool. You will find in this page tutorials and examples illustrating the usage of all this custum facilities.
	Developpers may go the Papyrus wiki to know more Papyrus design and questions may be asked to the Papyrus forum.
	In addition to the documentation available through this page, you will find documentation in the online help of the tool.
	</p>
	<p>
		<ul>
			<li><a href="./../usersTutorials/usersTutorialsIndex.php">Papyrus users corner</a></li>
			<li><a href="./../custumizersCorner/custumizersCornerIndex.php">Papyrus custumizers corner</a></li>
		</ul>
	</p>
</div>
	
<div id="rightcolumn">
	<div class="sideitem">
		<h6>Related Links</h6>
		<ul>
			<li>For developpers, let's see at the <a href="http://wiki.eclipse.org/MDT/Papyrus">Papyrus wiki</a></li>
			<li>For any questions, let's go to the <a href="http://www.eclipse.org/forums/index.php/f/121/">Papyrus forum</a></li>
		</ul>
	</div>
</div>	
EOHTML;
	
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>