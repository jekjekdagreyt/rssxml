<?php
	
	$object = new DOMDocument();
	$object->load("https://rssxaaa.herokuapp.com/");
	
	
	$content = $object->getElementsByTagName("item");
	
	foreach($content as $data){
			$name = $data->getElementsByTagName("name")->item(0)->nodeValue;
			$address = $data->getElementsByTagName("address")->item(0)->nodeValue;
			$contact = $data->getElementsByTagName("contact")->item(0)->nodeValue;
			$status = $data->getElementsByTagName("status")->item(0)->nodeValue;
	
		echo "$name - $address - $contact - $status <br>";
	}

	
	
?>