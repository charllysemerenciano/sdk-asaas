<?php
	
	
	/**
	 * @Author Charllys Emerenciano
	 * @create 20/11/2020
	 */
	
	namespace Api\util;
	
	class Geral
	{
		protected $http;
		protected $uri;
		
		
		public function __construct(Conexao $conexao, string $uri)
		{
			$this->http = $conexao;
			$this->uri = $uri;
		}
		
		public function getAll($filters = false)
		{
			$filter = '';
			if ($filters) {
				foreach ($filters as $key => $f) {
					if (!empty($f)) {
						if ($filter) {
							$filter .= '&';
						}
						
						$filter .= $key . '=' . $f;
					}
				}
				$filter = '?' . $filter;
			}
			return $this->http->get($this->uri . $filter);
		}
		
		/**
		 * @param string $id
		 *
		 * @return mixed
		 */
		public function getById(string $id)
		{
			return $this->http->get($this->uri . '/' . $id);
		}
		
		
		/**
		 * @param string $id
		 *
		 * @return mixed
		 */
		public function apagar(string $id)
		{
			return $this->http->get($this->uri . $id, '', 'DELETE');
		}
		
	}