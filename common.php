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
*******************************************************************************/
 function &read_file($file_name) {
	$fp = fopen($file_name, "r");
	$file_contents = fread($fp, filesize($file_name));
	fclose($fp);
	return $file_contents;
}

# * * * * *   $papyrusTopButtons   * * * * * #
$papyrusTopButtons = <<<EOHTML
<link rel="stylesheet" type="text/css" href="/papyrus/style.css" />

<div id="bigbuttons">
	<h3>Primary Links</h3>
	<ul>
		<li><a id="buttonDownload" href="/papyrus/updates/index.php"
			title="Getting started">Papyrus installation guide and update site</a></li>
		<li><a id="buttonDocumentation"
			href="/papyrus/usersCorner/usersCornerIndex.php" title="Documentation">Tutorials,
				Examples, Videos, Reference Documentation...</a></li>
		<li><a id="buttonSupport" href="/papyrus/support/index.php"
			title="Support">Bug Tracker, Newsgroup, Professional Support</a></li>
		<li><a id="buttonInvolved"
			href="/papyrus/developpersCorner/developpersCornerIndex.php"
			title="Developper Corner">SVN, Developper FAQ, Cookboock...</a></li>
	</ul>
</div>
EOHTML;
# * * * * *   $papyrusTopButtons END   * * * * * #
?>
