<?php
	/**
	 * @Author Charllys Emerenciano
	 * @create 20/11/2020
	 */
	
	class Assas
	{
		
		private $token;
		private $ambiente;
		
		
		/**
		 * Assas constructor.
		 */
		public function __construct($token, $ambiente = 'producao')
		{
			$this->token = $token;
			$this->ambiente = $ambiente;
			
		}
	}