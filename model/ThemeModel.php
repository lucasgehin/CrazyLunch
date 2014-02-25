<?php

	class ThemeModel {

		private $guzzleClient;
		private $baseUri;
		private $ressourceName;
		private $arrayData;
		private $rawData;

		public function __construct()
		{
			# code...
		}

		public function find($id)
		{
			# code...
		}

		public function findAll()
		{
			# code...
		}

		public function findRel($id, $relation)
		{
			# code...
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