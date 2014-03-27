
<?php
	require "vendor/autoload.php";
	


	include_once 'PatModel.php';

	$p = new PlatModel();
	$json = $p->getJson();
	var_dump($json);

