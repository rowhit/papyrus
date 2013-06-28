<?php header('Content-Type: text/xml');
/*******************************************************************************
 * Copyright (c) 2007 Eclipse Foundation and others.
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/epl-v10.html
 *
 * Contributors:
 *    CEA LIST  - initial API and implementation
 *******************************************************************************/
$root = $_SERVER['DOCUMENT_ROOT'];

$filename = $root . '/modeling/mdt/papyrus/news.xml';
$lastBuildDate = date("r", filemtime($filename));
$news = simplexml_load_file($filename);
$items = "";
$item_count = count($news->item);

foreach ($news->item as $item) {
	$items .= "<item>";
	$items .= "<title>" . $item['title'] . "</title>";
	// Convert date from ISO 8601 UTC (Zulu) to RFC 2822 local TZ (Lima)
	$date = date("r", strtotime($item['date'] . "+00:00"));
	$items .= "<pubDate>$date</pubDate>";
	// Generate a guid/permalink to the news.php page. We go in reverse order of xml item feed.
	$permalink = "http://" . $_SERVER['HTTP_HOST'] . "/modeling/mdt/papyrus/news.php#permalink${item_count}";
	$link = $item['link'] ? $item['link'] : $permalink;
	$items .= "<link>" .  htmlspecialchars($link) . "</link>";
	$items .= "<guid isPermaLink=\"true\">";
	$items .= $permalink;
	$items .= "</guid>";
	// Get item as xml and replace <item> tags with <div> leaving else untouched.
	$item_xml = $item->asXML();
	$item_xml = preg_replace('/<item.*?>/', '<div>', $item_xml);
	$item_xml = preg_replace('/<\/item>/', '</div>', $item_xml);
	$item_xml .= "<p><a href=\"$permalink\">More news</a></p>";
	$items .= "<description>";
	$items .= htmlspecialchars($item_xml);
	$items .= "</description>";
	$items .= "</item>";
	$item_count--;
}

$xml = <<<EOXML
<?xml version="1.0" encoding="UTF-8"?>
<rss version="2.0">
<channel>
<title>Papyrus Project: News</title>
<link>http://www.eclipse.org/papyrus/</link>
<description>
This RSS feed contains the latest news from the Modeling Papyrus project. Papyrus is a graphical modeler based on UML and UML-based domain specific languages, like SysML and MARTE languages.
</description>
<language>en-us</language>
<copyright>
Copyright (c) 2008 - 2013 CEA LIST and others. All rights
reserved. This program and the accompanying materials are made available
under the terms of the Eclipse Public License v1.0 which accompanies
this distribution, and is available at
http://www.eclipse.org/legal/epl-v10.html Contributors: CEA LIST
- initial API and implementation
</copyright>
<lastBuildDate>$lastBuildDate</lastBuildDate>
$items
</channel>
</rss>
EOXML;

echo $xml;
?>
