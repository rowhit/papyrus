<?php
/*******************************************************************************
 * Copyright (c) 2009 Eclipse Foundation and others.
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/epl-v10.html
 *
 * Contributors:
 * Sebastien Gerard & Remi Schnekenburger (CEA LIST)
 *    
 *******************************************************************************/
	$root = $_SERVER['DOCUMENT_ROOT'];
	require_once($root . "/eclipse.org-common/system/app.class.php");	require_once($root . "/eclipse.org-common/system/nav.class.php"); 	require_once($root . "/eclipse.org-common/system/menu.class.php"); 	require_once ($root . '/papyrus/common.php'); require_once ($root . '/papyrus/newstohtml.php'); $App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());
	
	$App->AddExtraHtmlHeader('<link rel="stylesheet" type="text/css" href="/modeling/mdt/papyrus/style.css"/>');
	
	$localVersion = false;
	
	# Define these here, or in _projectCommon.php for site-wide values
	$pageKeywords	= "papyrus, dsl, modeling, domain specific language, graphical, uml, sysml";
	$pageAuthor		= "Sebastien Gerard";
	$pageTitle 		= "Papyrus";
	
	// Generate the HTML content for the news based on the news.xml file
	// that appears in the root directory.
	$newsTitle = "Project News";
	$papyrusnews = news_to_html($root . "/papyrus/news.xml", "", "", "", false, "long", "5");
	
	# Paste your HTML content between the EOHTML markers!
	$html = <<<EOHTML
	
	$papyrusTopButtons
	
<div id="midcolumn">
	<h3>About Papyrus</h3>
	<div id="introText">

		<p class="left">Papyrus is aiming at providing an integrated and
			user-consumable environment for editing any kind of EMF model and
			particularly supporting UML and related modeling languages such as
			SysML and MARTE. Papyrus provides diagram editors for EMF-based
			modeling languages amongst them UML 2 and SysML and the glue required
			for integrating these editors (GMF-based or not) with other MBD and
			MDSD tools.</p>

		<p class="right">Papyrus also offers a very advanced support of
			UML profiles that enables users to define editors for DSLs based on
			the UML 2 standard. The main feature of Papyrus regarding this latter
			point is a set of very powerful customization mechanisms which can be
			leveraged to create user-defined Papyrus perspectives and give it the
			same look and feel as a "pure" DSL editor.</p>
	</div>

	<div id="feature_1">
		<h4>UML2.4.1</h4>
		<p>
			Papyrus is graphical editing tool for <a href="http://www.uml.org/">UML2</a>
			as defined by <a href="http://www.omg.org/">OMG</a>. Papyrus targets
			to implement 100% of the OMG specification!
		</p>
	</div>

	<div id="feature_2">
		<h4>DSL</h4>
		<p>Papyrus provides a very advanced support for UML profiles
			enabling support for "pure" DSL. Every part of Papyrus may be
			customized: model explorer, diagram editors, property editors, etc.</p>
	</div>

	<div id="feature_3">
		<h4>SysML</h4>
		<p>
			Papyrus provides also a complete support to <a
				href="http://www.sysml.org/">SysML</a> in order to enable
			model-based system engineering. It includes an implementation of the
			SysML static profile and the specific graphical editors required for
			SysML.
		</p>
	</div>
	
	<div id="screenshot">
		 <img width="640" src="images/Screenshot.png"/>
	</div>

	<div id="feature_3">
		<h4>Text in Papyrus</h4>
		<p>Papyrus is graphics but also textual. It is hence possible to
			edit model elements using contextual text editors enabling syntax
			highlight, completion and content assist. It is also a custumizabled
			feature of Papyrus.</p>
	</div>

	<div id="feature_more">
		<h4>And much more...</h4>
		<p>
			Read the Papyrus <a href="usersCorner/usersCornerIndex.php">user
				documentation</a> and join the discussion at the <a
				href="http://www.eclipse.org/forums/index.php?t=thread&frm_id=121">forum</a>
			to understand how powerful Papyrus is. Want to know more? <a
				href="http://www.eclipse.org/projects/project_summary.php?projectid=modeling.mdt.papyrus">About
				Papyrus</a>
		</p>
	</div>
</div>
	
<div id="rightcolumn">
	<div class="sideitem">
		<h6>Ongoing work...</h6>
			<ul>
				<li><a
					href="http://www.eclipse.org/projects/project-plan.php?planurl=http://www.eclipse.org/papyrus/project-info/plan_kepler.xml">Papyrus
						Roadmap</a></li>
				<li><a href="http://wiki.eclipse.org/MDT/Papyrus/Ongoing">Ongoing tasks</a></li>
			</ul>
	</div>

	<div class="sideitem">
		<h6>Current Status</h6>
		<p>
			Papyrus team has released the version 0.10.0. It can be runned eiher on Kepler 4.3. You can download it <a href="updates/index.php">here</a> or using the <a href="http://www.eclipse.org/downloads/">Modeling Eclipse Package</a>, using its discovery interface.
		</p>
	</div>
	
	<div class="sideitem">
		<h6>Papyrus Cinema</h6>
		<p>
			Following this link, you will find the <a
				href="cinemaCorner/cinemaCornerIndex.php">Papyrus cinema corner</a>.
		</p>
	</div>

	<div class="sideitem">
		<h6>$newsTitle
			<a href="/papyrus/news.php"><img src="/images/more.gif" title="More..." alt="[More]" /></a>
			<a href="/papyrus/news/"><img src="/images/rss.gif" align="right" title="RSS Feed" alt="[RSS]" /></a>
		</h6>
		$papyrusnews
	</div>
</div>
EOHTML;
	
	
	
	
	// 	# Paste your HTML content between the EOHTML markers!
	// $html = file_get_contents('homePage/PapyrusHomePage.html');

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);

?>