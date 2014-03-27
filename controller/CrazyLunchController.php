<?php
	include_once 'model/PlatModel.php';
	include_once 'model/ThemeModel.php';
	include_once 'vue.php';
	//include 'lunch_autoload.php'; 

	

	class CrazyLunchController {

		public function callAction($request)
		{
			if(!isset($request['a'])){
				$request['a'] = 'default';
			}
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
					CrazyLunchController::defaultAction();
					break;
			}
		}

		public function listeTheme()
		{
			$r = new ThemeModel();
			$json = $r->findAll()->getJson();
			$this->returnJson();
			echo $json;
			
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

		public function defaultAction()
		{
			vue::affichage();
		}

	}