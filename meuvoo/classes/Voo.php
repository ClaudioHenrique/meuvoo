<?php
class Voo{
	
	private $url = 'http://www.infraero.gov.br/voos/index.aspx';
	
	public function __construct(){
		
	}
	
	
	private function getInformacoes($aeroporto,$numeroVoo){
		$ch = curl_init($this->url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$resultado = curl_exec($ch);
		curl_close($ch);	
	}
}