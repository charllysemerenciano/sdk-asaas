<?php
	/**
	 * @Author Charllys Emerenciano
	 * @create 20/11/2020
	 */
	
	namespace Api\util;
	
	use Api\exception\ClienteException;
	use Api\model\ClienteModel;
	use Exception;
	
	class Cliente extends Geral
	{
		protected $cliente;
		
		
		/**
		 * @param string $mail
		 *
		 * @return mixed
		 */
		public function getByMail(string $mail)
		{
			$option = "?limit=1&email=$mail";
			return $this->http->get($this->uri, $option);
		}
		
		/**
		 * @param array $dataClient
		 *
		 * @return array|mixed|null
		 */
		public function criar(array $dataClient)
		{
			$dataClient = $this->clienteToArray($dataClient);
			
			if (!empty($dataClient['error'])) {
				return $dataClient;
			}
			
			return $this->http->post($this->uri, $dataClient);
		}
		
		/**
		 * @param string $id
		 * @param array  $dadosCliente
		 *
		 * @return array|array[]|mixed
		 */
		public function editar(string $id, array $dadosCliente)
		{
			$dadosCliente = $this->clienteToArray($dadosCliente);
			
			if (!empty($dadosCliente['error'])) {
				return $dadosCliente;
			}
			
			return $this->http->post($this->uri . $id, $dadosCliente);
		}
		
		/**
		 * @param array $dadosCliente
		 *
		 * @return array|array[]
		 */
		private function clienteToArray(array $dadosCliente)
		{
			try {
				if (!$this->validarCliente($dadosCliente)) {
					return ClienteException::invalidClient();
				}
				
				$this->cliente = [
					'name'                 => '',
					'cpfCnpj'              => '',
					'email'                => '',
					'phone'                => '',
					'mobilePhone'          => '',
					'address'              => '',
					'addressNumber'        => '',
					'complement'           => '',
					'province'             => '',
					'postalCode'           => '',
					'externalReference'    => '',
					'notificationDisabled' => '',
					'additionalEmails'     => '',
					'municipalInscription' => '',
					'stateInscription'     => '',
					'observations'         => '',
					'groupName'            => '',
				];
				
				$this->cliente = array_merge($this->cliente, $dadosCliente);
				
				return $this->cliente;
				
			} catch (Exception $e) {
				return ClienteException::otherException($e->getMessage());
			}
		}
		
		/**
		 * @param $cliente
		 *
		 * @return bool
		 */
		private function validarCliente($cliente): bool
		{
			$paramObrigatorios = [
				'name',
				'cpfCnpj'
			];
			
			foreach ($paramObrigatorios as $param) {
				if (empty($cliente[$param]) || !isset($cliente[$param])) {
					return false;
				}
			}
			return true;
		}
	}