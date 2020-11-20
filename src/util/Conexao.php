<?php
	/**
	 * @Author Charllys Emerenciano
	 * @create 20/11/2020
	 */
	namespace Api\util;
	
	class Conexao
	{
		public $token;
		public $ambiente;
		public $uri;
		
		/**
		 * Conexao constructor.
		 *
		 * @param $token
		 * @param $ambiente
		 */
		public function __construct($token, $ambiente)
		{
			
			if ($ambiente === 'producao') {
				$this->ambiente = false;
			} else if ($ambiente === 'sandbox') {
				$this->ambiente = 1;
			} else {
				die('ambiente inválido');
			}
			
			$this->token = $token;
			$this->ambiente = $ambiente;
			$this->uri = "https://" . (($this->ambiente) ? 'sandbox' : 'www');
			
		}
		
		public function get($url, $option = false, $custom = false)
		{
			
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $this->uri . '.asaas.com/api/v3' . $url . $option);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_HEADER, false);
			
			if (!empty($custom)) {
				curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $custom);
			}
			
			curl_setopt($ch, CURLOPT_HTTPHEADER, [
				"Content-Type: application/json",
				"access_token: " . $this->token
			]);
			
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
			
			$response = curl_exec($ch);
			curl_close($ch);
			$response = json_decode($response, false);
			
			return $response;
		}
		
		public function post($url, $params)
		{
			$params = json_encode($params);
			$ch = curl_init();
			
			curl_setopt($ch, CURLOPT_URL, $this->uri . '.asaas.com/api/v3' . $url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_HEADER, false);
			
			curl_setopt($ch, CURLOPT_POST, true);
			
			curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
			
			curl_setopt($ch, CURLOPT_HTTPHEADER, [
				"Content-Type: application/json",
				"access_token: " . $this->token
			]);
			
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
			
			$response = curl_exec($ch);
			curl_close($ch);
			$response = json_decode($response, false);
			
			return $response;
			
		}
		
		
	}