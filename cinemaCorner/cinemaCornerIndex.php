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
	$pageTitle 		= "Papyrus Cinema Corner";
	$pageKeywords	= "papyrus, users, documents, tutorials, examples";
	$pageAuthor		= "Sebastien Gerard";
		
	# Paste your HTML content between the EOHTML markers!	
	ob_start();
	?>

<head>
	<title>Papyrus Slideshow</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="Sebastien Gerard" />
	<link rel="stylesheet" type="text/css" href="css/slideshow.css" media="screen" />
	<script type="text/javascript" src="js/mootools.js"></script>
	<script type="text/javascript" src="js/slideshow.js"></script>
	<script type="text/javascript">		
	//<![CDATA[
	  window.addEvent('domready', function(){
	    var data = {
	      'ProfileDiagramEditor.jpg': { caption: 'Profile diagram editor.' }, 
	    };
	    var myShow = new Slideshow('show', data, {controller: true, height: 300, hu: 'images/', thumbnails: true, width: 400});
	  });
	//]]>
	</script>
</head>
 
<body>
	<div id="midcolumn">
		<h1>Papyrus Cinema Corner</h1>
		<p>
			This page consists of screenshots and screencasts on Papyrus.
		</p>
		<p>
  			<div id="show" class="slideshow">
    			<img src="images/ProfileDiagramEditor.jpg" alt="Profile diagram editor." />
  			</div>
  			<br>
  			<br>
  		</p>
 </body>

 <?
	$html = ob_get_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>