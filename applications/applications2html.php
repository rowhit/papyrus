<?php

function applications_to_html($file_name, $quantity=2) {
            
	$xml = simplexml_load_file($file_name);
   
	$html = "";

	$application_count = count($xml->application);
    
    if($quantity>$application_count){
		$quantity = $application_count;	
	}

	

    
    $randValues = random(0, $application_count-1, $quantity);
    
    for ($i = 0; $i < $quantity; $i++) {
		
        $application=$xml->application[$randValues[$i]];

		$item_xml = $application->asXML();
		$item_xml = preg_replace('/<application.*?>/', '', $item_xml);
		$item_xml = preg_replace('/<\/application>/', ' ', $item_xml);
		
		$html .="<div class=\"col-sm-4\">";
			$html .="<a href=\"".$application['resource']."\" target=\"_blank\">";
			$html .="<img class=\"img-responsive center-block application-img\" src=\"".$application['logo']."\" alt=\"".$application['author']." Use Case Story\">";
			$html .="</a>";
			$html .="\"<b>".$item_xml."</b>\"<br>".$application['author'];
		$html .="</div>";
		

	}
    


	return $html;
}
?>
