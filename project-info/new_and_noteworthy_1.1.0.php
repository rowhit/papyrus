<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Papyrus - New and Noteworthy - 1.1.0";
	$pageKeywords	= "papyrus, dsl, modeling, domain specific language, graphical, uml, sysml, new, 1.1.0, mars";
	$pageAuthor		= "Remi Schnekenburger";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#
	
	//include('../news/scripts/news.php');
	//$papyrusnews = get_papyrusnews(7);
		
ob_start();
?>

<!-- Middle part -->
<div id="midcolumn">

<h1>What's new in Papyrus 1.1.0?</h1>

<h2>General</h2>



<h2>Diagrams</h2>
<h3>Figure customization and shapes in all diagrams</h3>
<p>Papyrus diagrams now relies mainly on one highly customizable figure, which can be parameterized though CSS or advanced appearance property view. All diagrams support also the shapes framework, allowing you to define your own representation for your language!</p>
<div id="screenshot_shapes">
	<img width="640" src="../images/shapes.png"/>profile
</div>

<h3>Element Types Configuration</h3>
<p>You can now define in a central place all the actions on your model, e.g. the creation, the deletion and the edition of the elements. You can reuse these action definitions in the model explorer, the palettes, the modeling assistants, etc.</p>

<h3>Modeling assistants dedicated to your language</h3>
<p>The modeling assistants are popup shortcuts that help you create new elements in the diagram. You can now create in Papyrus a model of your diagram assistants for your own profile, and load them into your running Papyrus instance for a live test./p>
<div id="screenshot_modelingassistants">
	<img width="640" src="../images/screenshot_modelingassistants.png"/>profile
</div>

<h2>Tests and Debug</h2>
<p align="JUSTIFY">
More than <a href="https://bugs.eclipse.org/bugs/buglist.cgi?action=wrap&bug_status=RESOLVED&bug_status=VERIFIED&bug_status=CLOSED&chfield=resolution&chfieldfrom=2015-01-01&chfieldto=Now&classification=Modeling&component=Core&component=Diagram&component=Others&component=Table&component=Views&product=Papyrus&version=1.1.0">400 bugs</a> have been closed for version 1.1.0 since January 2014, and more than <a href="https://hudson.eclipse.org/papyrus/job/Papyrus-Master-Tests/">10.000</a> unit tests are run against Papyrus every nights.  
</p>
</div>

<?php

// Right Part
//include($_SERVER['DOCUMENT_ROOT'] . "/mdt/papyrus/right_column.php");


$html = ob_get_contents();
ob_end_clean();

# Generate the web page
//$App->AddExtraHtmlHeader("<link rel='alternate' type='application/rss+xml' title='Papyrus News' href='news/papyrusNewsArchive.rss'>");
$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>