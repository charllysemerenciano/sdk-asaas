<?php
	/**
	 * @Author Charllys Emerenciano
	 * @create 20/11/2020
	 */
	
	namespace Api\exception;
	
	
	class GeralException
	{
		public static function outraExcecao(string $getMessage): array
		{
			return ['error' => ['code' => 400, 'description' => $getMessage]];
		}
		
		public static function dadosFaltantes(): array
		{
			return ['error' => ['code' => 412, 'description' => 'Dados obrigatórios inválidos']];
		}
	}