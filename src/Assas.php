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
		
		protected $cliente;
		protected $cobranca;
		protected $assinatura;
		protected $notaFiscal;
		
		
		/**
		 * Assas constructor.
		 *
		 * @param        $token
		 * @param string $ambiente
		 */
		public function __construct($token, $ambiente = 'producao')
		{
			
			$conexao = new Conexao($token, $ambiente);
			
			$this->cliente = new Cliente($conexao, '/customers');
			$this->cobranca = new Cliente($conexao, '/payments');
			$this->assinatura = new Cliente($conexao, '/subscriptions');
			$this->notaFiscal = new Cliente($conexao, '/invoices');
			
		}
	}