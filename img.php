<?php
/**
 *	Script generates black&white image from $_GET['file']
 */
define('WWW_DIR', dirname(__FILE__));
define('LIBS_DIR', WWW_DIR . '/app/lib');
define('TMP_DIR', dirname(__FILE__)."/app/temp/images");

require LIBS_DIR . '/Nette/loader.php';


if(isset($_GET['file']) && file_exists(WWW_DIR."/files/".$_GET['file'])) {

	$file = WWW_DIR.'/files/'.$_GET['file'];
	$file_hash = md5($file);

	$ext = end(explode(".", $file));

	if(!file_exists(TMP_DIR."/$file_hash")) {
		$image = Image::fromFile($file);
		$image->filter(IMG_FILTER_GRAYSCALE);
		$image->save(TMP_DIR."/$file_hash.$ext");
	}

	$hashimg = Image::fromFile(TMP_DIR."/$file_hash.$ext");
	$hashimg->send();
} 
else  {
	header("HTTP/1.0 404 Not Found");
	die('Empty filename!');
}

