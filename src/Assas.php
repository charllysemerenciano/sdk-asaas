<?php
	/**
	 * @Author Charllys Emerenciano
	 * @create 20/11/2020
	 */
	
	namespace Api;
	
	use Api\util\Cliente;
	use Api\util\Conexao;
	
	class Assas
	{
		
		private $token;
		private $ambiente;
		protected $cliente;
		
		/**
		 * Assas constructor.
		 *
		 * @param        $token
		 * @param string $ambiente
		 */
		public function __construct($token, $ambiente = 'producao')
		{
			$this->token = $token;
			$this->ambiente = $ambiente;
			
			$conexao = new Conexao($token, $ambiente);
			
			$this->cliente = new Cliente($conexao, '/customers');
			
		}
	}