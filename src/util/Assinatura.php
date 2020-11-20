<?php
	/**
	 * @Author Charllys Emerenciano
	 * @create 20/11/2020
	 */
	
	namespace Api\util;
	
	
	class Assinatura
	{
		use MetodosGerais;
		
		protected $assinatura;
		
		public function getByCustomer($customer_id)
		{
			return $this->http->get($this->uri . '?customer=' . $customer_id);
		}
		
		public function getByPayment($subscription_id)
		{
			return $this->http->get($this->uri . '/' . $subscription_id . '/payments');
		}
		
		public function criar(array $dadosAssinatura)
		{
			return $this->http->post($this->uri, $dadosAssinatura);
		}
		
		public function editar($id, array $dadosAssinatura){
			
			return $this->http->post('/subscriptions/' . $id, $dadosAssinatura);
		}
		
		public function getNotaFiscal($id, array $parametros){
			$filtro = '';
			if(is_array($parametros) && $parametros) {
				foreach($parametros as $key => $parametro){
					if(!empty($parametro)){
						if($filtro){
							$filtro .= '&';
						}
						$filtro .= $key.'='.$parametro;
					}
				}
				$filtro = '?'.$filtro;
			}
			return $this->http->get('/subscriptions/'.$id.$filtro);
		}
		
		public function criarNotaFiscal($subscription_id, $dadosAssinatura){
			return $this->http->post('/subscriptions/'.$subscription_id.'/invoiceSettings', $dadosAssinatura);
		}
		
		public function editarNotaFiscal($subscription_id, $dadosAssinatura){
			
			return $this->http->post('/subscriptions/'.$subscription_id.'/invoiceSettings', $dadosAssinatura);
		}
		
		public function getConfigNotaFiscal($id){
			return $this->http->get('/subscriptions/'.$id.'/invoiceSettings');
		}
		
		public function apagarConfigNotaFiscal($id){
			return $this->http->get('/subscriptions/'.$id.'/invoiceSettings','','DELETE');
		}
		
	}