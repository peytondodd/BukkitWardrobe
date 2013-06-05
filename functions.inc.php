<?php

function safeQ($worse) {
	// Stripslashes
	$okay = htmlspecialchars(stripslashes($worse));
	$better = str_ireplace("script", "blocked", $okay);
	$good = mysql_escape_string($better);

	return $good;
}

function cache_skin($image_url){
	//replace with your cache directory
	$image_path = '';
	//get the name of the file
	$exploded_image_url = explode("/",$image_url);
	$image_filename = end($exploded_image_url);
	$exploded_image_filename = explode(".",$image_filename);
	$extension = end($exploded_image_filename);
	//make sure its an image
	if($extension=="gif"||$extension=="jpg"||$extension=="png"){
		//get the remote image
		$image_to_fetch = file_get_contents($image_url);
		//save it
		$local_image_file  = fopen($image_path."tmp.png", 'w+');
		chmod($image_path."tmp.png",0755);
		fwrite($local_image_file, $image_to_fetch);
		fclose($local_image_file);	
	}
}

function skin($username, $clothing, $download){
	if (empty($username)) {
		echo "No username given";
		exit;
	}

	cache_skin('http://skins.minecraft.net/MinecraftSkins/'.$username.'.png');

	$tmpskin = imagecreatefrompng('tmp.png');
	$clothing = imagecreatefrompng("clothes/".$clothing.".png");

	if(!isset($clothing)){
		$clothing = imagecreatefrompng("assets/img/1x1.png");
	}

	imagealphablending($tmpskin, true);
	imagesavealpha($tmpskin, true);
	imagecopy($tmpskin, $clothing, 0, 0, 0, 0, 64, 32);

	header('Content-Type: image/png');
	if($download){
    	header('Content-Disposition: attachment; filename="'.$username.'"');
	}
	
	imagepng($tmpskin);
}

?>