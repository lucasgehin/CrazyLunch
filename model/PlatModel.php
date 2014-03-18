<?php

require_once 'vendor/autoload.php';
use Guzzle\Http\Client;
	
	class PlatModel {

		private $guzzleClient;
		private $baseUri;
		private $ressourceName;
		private $arrayData;
		private $rawData;

		public function __construct()
		{
			$this->baseUri = 'https://webetu.iutnc.univ-lorraine.fr/www/canals5/crazylunch/';
			$this->guzzleClient = new Client($this->baseUri);
			$this->ressourceName = 'plats';
			

		}

		public function find($id)
		{
			$request = $this->guzzleClient->get($this->ressourceName.'/'.$id);
			$this->rawData = $request->send();

			return $this;
		}

		public function findAll()
		{
			$request = $this->guzzleClient->get($this->ressourceName.'/');
			$this->rawData = $request->send();	
			return $this;
		}

		public function findRel($id, $relation)
		{
			$request = $this->guzzleClient->get($this->ressourceName.'/'.$id.'/'.$relation);
			$this->rawData = $request->send();
		}

		public function getJson()
		{
			return $this->rawData;
		}

		public function getArray()
		{
			# code...
		}
	}