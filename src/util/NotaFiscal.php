<?php
	/**
	 * @Author Charllys Emerenciano
	 * @create 20/11/2020
	 */
	
	namespace Api\util;
	
	
	class NotaFiscal
	{
		use MetodosGerais;
		
		protected $notaFiscal;
		
		public function criar($dados)
		{
			$dadosNotaFiscal = $this->notaFiscalToArray($dados);
			
			return $this->http->post('/invoices', $dadosNotaFiscal);
		}
		
		private function notaFiscalToArray($dados): array
		{
			$this->notaFiscal = [
				'payment'              => '',
				'installment'          => '',
				'customer'             => '',
				'serviceDescription'   => '',
				'observations'         => '',
				'externalReference'    => '',
				'value'                => '',
				'deductions'           => '',
				'effectiveDate'        => '',
				'municipalServiceId'   => '',
				'municipalServiceCode' => '',
				'municipalServiceName' => '',
				'taxes'                => [
					'iss' => 0
				]
			];
			
			$this->notaFiscal = array_merge($this->notaFiscal, $dados);
			
			return $this->notaFiscal;
		}
	}