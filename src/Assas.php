<?php
	/**
	 * @Author Charllys Emerenciano
	 * @create 20/11/2020
	 */
	
	namespace Api;
	
	use Api\util\Assinatura;
	use Api\util\Cliente;
	use Api\util\Cobranca;
	use Api\util\Conexao;
	use Api\util\NotaFiscal;
	
	class Assas
	{
		
		public $cliente;
		public $cobranca;
		public $assinatura;
		public $notaFiscal;
		
		
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
			$this->cobranca = new Cobranca($conexao, '/payments');
			$this->assinatura = new Assinatura($conexao, '/subscriptions');
			$this->notaFiscal = new NotaFiscal($conexao, '/invoices');
			
		}
	}