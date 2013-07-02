<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	$pageTitle 		= "Papyrus - Support";

	# Paste your HTML content between the EOHTML markers!
	$html = <<<EOHTML
<div id="midcolumn">
	<ul>
		<li><b><a href="/modeling/mdt/papyrus/usersCorner/usersCornerIndex.php"
			title="Documentation">Documentation</a></b> - read about
		the details</li>
		<li><b><a
			href="http://www.eclipse.org/forums/index.php/f/121/"
			title="Papyrus forum"
			rel="nofollow">Papyrus forum</a></b> - get an answer to your questions</li>
		<li><b><a
			href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&amp;short_desc_type=allwordssubstr&amp;short_desc=&amp;classification=Modeling&amp;product=MDT.Papyrus&amp;component=Core&amp;long_desc_type=allwordssubstr&amp;long_desc=&amp;bug_file_loc_type=allwordssubstr&amp;bug_file_loc=&amp;status_whiteboard_type=allwordssubstr&amp;status_whiteboard=&amp;keywords_type=allwords&amp;keywords=&amp;bug_status=NEW&amp;bug_status=ASSIGNED&amp;bug_status=REOPENED&amp;emailtype1=exact&amp;email1=&amp;emailtype2=substring&amp;email2=&amp;bugidtype=include&amp;bug_id=&amp;votes=&amp;chfieldfrom=&amp;chfieldto=Now&amp;chfieldvalue=&amp;cmdtype=doit&amp;order=Reuse+same+sort+as+last+time&amp;field0-0-0=noop&amp;type0-0-0=noop&amp;value0-0-0="
			title="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&amp;short_desc_type=allwordssubstr&amp;short_desc=&amp;classification=Modeling&amp;product=MDT.Papyrus&amp;component=Core&amp;long_desc_type=allwordssubstr&amp;long_desc=&amp;bug_file_loc_type=allwordssubstr&amp;bug_file_loc=&amp;status_whiteboard_type=allwordssubstr&amp;status_whiteboard=&amp;keywords_type=allwords&amp;keywords=&amp;bug_status=NEW&amp;bug_status=ASSIGNED&amp;bug_status=REOPENED&amp;emailtype1=exact&amp;email1=&amp;emailtype2=substring&amp;email2=&amp;bugidtype=include&amp;bug_id=&amp;votes=&amp;chfieldfrom=&amp;chfieldto=Now&amp;chfieldvalue=&amp;cmdtype=doit&amp;order=Reuse+same+sort+as+last+time&amp;field0-0-0=noop&amp;type0-0-0=noop&amp;value0-0-0="
			rel="nofollow">Bugzilla</a></b> - review and create Bugzilla entries</li>
		<li><b><a
			href="https://bugs.eclipse.org/bugs/enter_bug.cgi?product=MDT.Papyrus&amp;rep_platform=All&amp;op_sys=All&amp;version=0.8.2&amp;rep_platform=All&amp;op_sys=All"
			title="https://bugs.eclipse.org/bugs/enter_bug.cgi?product=MDT.Papyrus&amp;rep_platform=All&amp;op_sys=All&amp;version=0.8.2&amp;rep_platform=All&amp;op_sys=All"
			rel="nofollow">File a bug</a></b> - file bugs and feature requests</li>
		<li><b><a href="/modeling/mdt/papyrus/usersCorner/usersCornerIndex.php"
			title="Documentation">Documentation</a></b> - read about
		the details</li>
	</ul>
</div>
EOHTML;
	
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
