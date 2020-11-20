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
				return ['error' => ['code' => 400, 'description' => $e->getMessage()]];
			}
			
		}
		
	}