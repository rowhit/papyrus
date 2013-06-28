<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Papyrus - New and Noteworthy ";
	$pageKeywords	= "papyrus, dsl, modeling, domain specific language, graphical, uml, sysml, Update Site";
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

<h1>What's new in Papyrus 0.10.0?</h1>

<h2>General</h2>

<h3>CDO support</h3>
<p>
Papyrus can now interact with models manipulated using <a href="http://wiki.eclipse.org/CDO">CDO</a>. Until 0.10.0 version, Papyrus models were stored locally in file resources. Papyrus models can now be shared through CDO repositories. This means that you can share and edit your models across several users!
</p>  
<div id="screenshot_cdo">
	<img width="640" src="../images/cdo_overview.png"/>
</div>

<h3>Textual Model Search</h3>
<p>It is now possible to search for elements in models using string or regular expressions. A new tab "Papyrus search" has been integrated into the Eclipse search window</p>
<sup><i>The search dialog is accessible using following key combination: Ctrl + 'h'</i></sup>     
<div id="screenshot_search">
	<img width="640" src="../images/search_dialog.png"/>
</div>

<h3>OCL Support</h3>
<p>Support for OCL constraints has been added in several parts of Papyrus. 
<ul>
<li>You can for example add constraints in your UML profiles. These constraints will be evaluated on models on which the profile has been applied.</li>
<li>You can edit constraints direclty in diagrams using a smart editor (completion, syntax coloring, etc.)</li>
<li>You can validate constraints and see errors and warnings on Papyrus views: model explorer, diagrams</li>
</ul>
</p>


<h2>Diagrams</h2>
<h3>Diagram Navigation</h3>
<p>You can define navigation trough Papyrus diagrams using drag'n'drop from model explorer to element representation in diagram</p>
<sup><i>Once you have defined shortcuts using drag'n'drop, you can double click on the representation to navigate to the diagram</i></sup>
<sup><i>You can also reference object representations in diagrams instead of diagrams themselves</i></sup>        

<h3>Symbols</h3>
<p>The goal of the symbol support in Papyrus is to give users access to some custom representations. They can use their own representation, i.e. their own svg files, in their diagrams, so the model can be easily read and understood.</p>
<div id="screenshot_symbols">
	<img width="640" src="../images/Symbol_Example.png"/>
</div>

<h3>Navigation between type and typed elements</h3>
<p>This facility is about the possibility to select any kind of element within a view (diagram, table or text) and to be able to retrieve this latter in the model explorer.</p>
<sup><i>You can use alt + left click to navigate from a Property to its Type for example</i></sup>      

<h3>New Diagrams</h3>
<p>2 new diagrams are shipped with Papyrus 0.10.0: UML Timing diagram and UML Interaction Overview diagram.</p>

<h3>Model element links in Comments</h3>
<p>Papyrus enables to insert references to Model Elements within comments. The displayed text of the comment is automatically computed to match the Model Element's name/label change.</p>
<div id="screenshot_comment">
	<img width="260" src="../images/comment.png"/>
</div>

<h2>Tests and Debug</h2>
<p align="JUSTIFY">
More than <a href="https://bugs.eclipse.org/bugs/buglist.cgi?action=wrap&bug_status=RESOLVED&bug_status=VERIFIED&bug_status=CLOSED&chfield=resolution&chfieldfrom=2013-01-01&chfieldto=Now&classification=Modeling&component=Core&component=Diagram&component=Others&component=Table&component=Views&product=MDT.Papyrus&version=0.10.0&list_id=6028843">240 bugs</a> have been closed for version 0.10.0 since january 2013, and more than <a href="https://hudson.eclipse.org/hudson/job/papyrus-trunk-nightly-tests/">8.000</a> unit tests are run against Papyrus every nights.  
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