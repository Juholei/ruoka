<?php

class MenuDownloader {
	public $url = null;
	public $restaurants = array();
	public $downloadFolder = '../cache';
	
	public function __construct() {
		if (! file_exists($this->downloadFolder)) {
			mkdir($this->downloadFolder, 0777, true);
		}
	}

	public function clean() {
		$lastMonth = date('Y-m', strtotime('- 1 month'));
		$mask = $this->downloadFolder . $lastMonth . '-*.xml';

		array_map('unlink', glob($mask));
	}
}