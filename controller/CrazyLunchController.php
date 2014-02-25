<?php
	include 'vendor/autoload.php';
	//include 'lunch_autoload.php'; 
	$controller = new CrazyLunchController(); 
	$controller->callAction( $_REQUEST );

	class CrazyLunchController {

		public function callAction($request)
		{
			switch ($request) {
				case 'lt':
					CrazyLunchController::listeTheme();
					break;
				
				default:
					
					break;
			}
		}

		public function listeTheme()
		{
			
		}

	}