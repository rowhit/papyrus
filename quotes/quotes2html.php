<?php

function random($min, $max, $quantity) {
    $numbers = range($min, $max);
    shuffle($numbers);
    return array_slice($numbers, 0, $quantity);
}

function quote_to_html($file_name, $limit=100) {
            
	$xml = simplexml_load_file($file_name);
   
	$html = "";

	$quote_count = count($xml->quote);
    
    if($limit>$quote_count){
		$limit = $quote_count;	
	}
    
    $randValues = random(0, $quote_count-1, $limit);

    for ($i = 0; $i < $limit; $i++) {
        
         $quote=$xml->quote[$randValues[$i]];
        
        if($i!=0) {
			$html .="<hr class=\"custom-divider\">";
		} 
        
        $html .="<div class=\"row\">";
        $html .="<div class=\"col-md-9\">";
        
        $html .="<p class=\"text-justify\"><img class=\"openquote\" src=\"img/openquote.png\" alt=\"Open quote\">";
        $item_xml = $quote->asXML();
        $item_xml = preg_replace('/<quote.*?>/', '', $item_xml);
        $item_xml = preg_replace('/<\/quote>/', ' ', $item_xml);
        $html .= $item_xml;

        $html .="<img class=\"closequote\" src=\"img/closequote.png\" alt=\"Close quote\"></p>";
        
        $html .="</div>";
        $html .="<div class=\"col-md-3\">";
        if ($quote['logo']) {
            $html .= "<p class=\"text-right\"><img class=\"quote-logo\" src=\"".$quote['logo']."\" alt=\"Quote logo\"></p>";
        }
		$html .= "<p class=\"text-right\"><b><em>" . $quote['author'] . "</em></b></p>";
        $html .="</div>";
        $html .="</div>";


	}
    
	return $html;
}

function quoteshort_to_html($file_name, $quantity=5) {
            
	$xml = simplexml_load_file($file_name);
   
	$html = "";

	$quote_count = count($xml->quote);
    
    if($quantity>$quote_count){
		$quantity = $quote_count;	
	}

	
	$html .="<!-- Carousel indicators -->";
	$html .="<ol class=\"carousel-indicators\">";
	for ($i = 0; $i < $quantity; $i++) {
		if($i==0) {
			$html .="<li data-target=\"#fade-quote-carousel\" data-slide-to=\"".$i."\" class=\"active\"></li>";
		} else {
			$html .="<li data-target=\"#fade-quote-carousel\" data-slide-to=\"".$i."\"></li>";
		}
	}
    $html .="</ol>";
	
	$html .="<!-- Carousel items -->";
    $html .="<div class=\"carousel-inner\" role=\"listbox\">";

    
    $randValues = random(0, $quote_count-1, $quantity);
    
    for ($i = 0; $i < $quantity; $i++) {
		
        $quote=$xml->quote[$randValues[$i]];

		if($i==0) {
			$html .="<div class=\"active item\">";
		} else {
			$html .="<div class=\"item\">";
		}
		$html .="<blockquote>";
		$html .="<p class=\"text-justify quote-content\"><img class=\"openquote\" src=\"img/openquote.png\" alt=\"Open quote\">";
        $html .= $quote['short'];
		/*$item_xml = $quote->asXML();
		$item_xml = preg_replace('/<quote.*?>/', '', $item_xml);
		$item_xml = preg_replace('/<\/quote>/', ' ', $item_xml);
		$html .= $item_xml;*/
		
        $html .="<img class=\"closequote\" src=\"img/closequote.png\" alt=\"Close quote\"></p>";
        if ($quote['logo']) {
			$html .= "<p class=\"text-right\"><img class=\"quote-logo\" src=\"".$quote['logo']."\" alt=\"Quote logo\"></p>";
		}
		$html .= "<p class=\"text-right\"><b><em>" . $quote['author'] . "</em></b></p>";
        
		$html .="</blockquote>";
		$html .="</div>";
	}
    
    $html .="</div>";


	return $html;
}
?>
