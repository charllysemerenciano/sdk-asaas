<?php
	/**
	 * @Author Charllys Emerenciano
	 * @create 20/11/2020
	 */
	
	namespace Api\util;
	
	use Api\exception\GeralException;
	use Exception;
	
	class Cobranca
	{
		use MetodosGerais;
		
		protected $cobranca;
		
		/**
		 * @param $id
		 *
		 * @return mixed
		 */
		public function getById($id)
		{
			return $this->http->get($this->uri . $id);
		}
		
		/**
		 * @param $customer_id
		 *
		 * @return mixed
		 */
		public function getByCustomer($customer_id)
		{
			return $this->http->get($this->uri . '?customer=' . $customer_id);
		}
		
		/**
		 * @param $subscription_id
		 *
		 * @return mixed
		 */
		public function getBySubscription($subscription_id)
		{
			return $this->http->get($this->uri . '?subscription=' . $subscription_id);
		}
		
		public function criar(array $dadosCobranca)
		{
			$dadosCobranca = $this->cobrancaToArray($dadosCobranca);
			if (!empty($dadosCobranca['error'])) {
				return $dadosCobranca;
			}
			
			return $this->http->post('/payments', $dadosCobranca);
		}
		
		public function editar($id, array $dadosCobranca)
		{
			
			return $this->http->post($this->uri . '/' . $id, $dadosCobranca);
		}
		
		private function cobrancaToArray(array $dadosCobranca)
		{
			
			if (!$this->validarCobranca($dadosCobranca)) {
				return GeralException::dadosFaltantes();
			}
			
			try {
				$this->cobranca = [
					'customer'          => '',
					'billingType'       => '',
					'value'             => '',
					'dueDate'           => '',
					'description'       => '',
					'externalReference' => '',
					'installmentCount'  => '',
					'installmentValue'  => '',
					'discount'          => '',
					'interest'          => '',
					'fine'              => '',
				];
				
				$this->cobranca = array_merge($this->cobranca, $dadosCobranca);
				return $this->cobranca;
				
			} catch (Exception $e) {
				return GeralException::outraExcecao($e->getMessage());
			}
			
		}
		
		private function validarCobranca(array $cobranca): bool
		{
			$paramObrigatorios = [
				'customer',
				'billingType',
				'value',
				'dueDate'
			];
			
			foreach ($paramObrigatorios as $param) {
				if (empty($cobranca[$param]) || !isset($cobranca[$param])) {
					return false;
				}
			}
			
			return true;
			
		}
	}