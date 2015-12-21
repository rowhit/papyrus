<?php

#*****************************************************************************
#
# newstohtml.php
#
# Author: 		15022010 
# Last updated:	2007-05-29
#
# Description: Function to generate html from news.xml. Borrowed heavily from
# eclipse.org-common/rss.php.
#
#
#****************************************************************************

/*
 * This function returns a String containing the HTML representing
 * the contents of the file provided. Only the name of the file containing
 * the news content and the title are required.
 *
 * $file_name - name of the file containing the news data. This
 *   file is specified in terms the operating system will understand
 *   (i.e. a file name, not a URL)
 *
 * $title - the title that will go on the header
 *
 * $rss_url - If provided, an "RSS" link will be rendered. When clicked
 *   the user will be sent to this URL. Use this to provide the user with
 *   a way to access the RSS file directly (so they can use it in their
 *   favourite news reader. Defaults to false meaning that no "RSS" link
 *   be rendered.
 *
 * $more_url - If provided, a "More" link will be rendered. When clicked
 *   the user will be sent to this URL. This is intended to be used to send
 *   the user to more information about the news feed. If you're displaying
 *   a 'short' format of the news, you might use this to provide a link to
 *   a 'long' format version of the same information. Defaults to "false"
 *   meaning that no "More" link will be rendered.
 *
 *  $add_permalink - If provided, an href is generated. This intended to be a
 *   permanant link to the news item.  Anchors of the form 'permalink<number>'
 *   are always generated in reverse order that the items are encountered.
 *   If $more_url is specified, the href will be of the form
 *   'more_url#permalink<number>' and the more_url is assumed to be the page
 *   with the permanant copy of the same feed.  Otherwise the link will be to
 *   the same page.
 *
 * $format - either 'long' or 'short'. Currently toggles whether
 *   or not the description is shown (shown only if set to 'long'). Defaults
 *   to 'long'.
 *
 * $count - the maximum number of entries displayed. Defaults to 1000.
 *   Note that no sorting is done; items are displayed as they occur in the
 *   file.
 *
 */

function news_to_html($file_name, $title, $rss_url=false, $more_url=false, $add_permalink=true, $format='long', $count=1000) {

	$xml = simplexml_load_file($file_name);

	if (!in_array($format, array ('short', 'long'))) {
		$format = 'short';
	}

	//$html = "<h3>";
	$html = "";

	// Add the RSS image on the right
	if ($rss_url) {
		$html .= "<a href=\"$rss_url\"><img src=\"/images/rss.gif\" align=\"right\" title=\"RSS Feed\" alt=\"[RSS]\" /></a>";
	}

	// Add the title of the channel
	$html .= "$title";
	// If we're displaying short format, provide a link to
	// show news in long format.
	if ($more_url)
	$html .= "&nbsp;<a href=\"$more_url\"><img src=\"/images/more.gif\" title=\"More...\" alt=\"[More]\" /></a>";

	//$html .= "</h3>";

	$html .= "<ul class=\"midlist\">";
	$item_count = count($xml->item);

	foreach ($xml->item as $item) {
		if ($count == 0) break;
		$html .= "<li>";
		// set up anchors and links.  We go in reverse order of xml item feed.
		$anchor = "permalink${item_count}";
		$permalink = "${more_url}#${anchor}";
		$html .= "<a name=\"$anchor\" />";
		if ($item['title']) {
			$link = $item['link'] ? $item['link'] : $permalink;
			$html .= "<a href=\"$link\" target=\"_blank\">" . $item['title'] . "</a>";
			$html .= " ";
		}
		// Get date in UTC.
		$date = date("M d, Y", strtotime($item['date'] . "+00:00"));
		$date = str_replace(" ", "&nbsp;", $date);
		$html .= "Posted&nbsp;$date";
		if ($add_permalink) {
			$html .= " | <a href=\"$permalink\">Permalink</a>";
		}
		if ($format == 'long') {
			// Get item as xml and replace <item> tags with <p> leaving else untouched.
			$item_xml = $item->asXML();
			$item_xml = preg_replace('/<item.*?>/', '<p>', $item_xml);
			$item_xml = preg_replace('/<\/item>/', '</p>', $item_xml);
			$html .= $item_xml;
		}
		$html .= "</li>";
		$count--;
		$item_count--;
	}
	$html .= "</ul>";

	return $html;
}
?>
