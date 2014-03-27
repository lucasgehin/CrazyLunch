<?php
	include 'vendor/autoload.php';
	//include 'lunch_autoload.php'; 
	$controller = new CrazyLunchController(); 
	$controller->callAction( $_REQUEST );

	class CrazyLunchController {

		public function callAction($request)
		{
			switch ($request['a']) {
				case 'lt':
					CrazyLunchController::listeTheme();
					break;
				case 'lp':
					if(isset($request['idr'])){
						$idr = $request['idr'];
						CrazyLunchController::listePlat($idr);
					}
					break;
				
				default:
					
					break;
			}
		}

		public function listeTheme()
		{
			
		}

		public function listePlat($idr)
		{
			$m = new \model\PlatModel();
			return $m->findAll().getJson();
		}

		public function returnJson()
		{
			header("Content-Type", "application/json");
		}

		public function addCart($data)
		{
			if(!isset($data["id"])) return;
			$id = $data['id'];
			$m = new \model\PlatModel();

		}

	}