<?php
	/**
	 * @Author Charllys Emerenciano
	 * @create 20/11/2020
	 */
	
	namespace Api\exception;
	
	
	class ClienteException
	{
		
		public static function invalidClient(): array
		{
			return ['error' => ['code' => 412, 'description' => 'Dados obrigatórios inválidos']];
		}
		
		public static function otherException(string $getMessage): array
		{
			return ['error' => ['code' => 400, 'description' => $getMessage]];
		}
	}