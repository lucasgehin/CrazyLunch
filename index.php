<?php
		include 'vendor/autoload.php';

	include_once 'controller/CrazyLunchController.php';


	//controller
	$c = new CrazyLunchController();
	$c->callAction($_GET);

