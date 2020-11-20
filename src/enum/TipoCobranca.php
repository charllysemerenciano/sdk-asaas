<?php
	/**
	 * @Author Charllys Emerenciano
	 * @create 20/11/2020
	 */
	
	namespace Api\enum;
	
	
	use MyCLabs\Enum\Enum;
	
	class TipoCobranca extends Enum
	{
		const BOLETO = 'BOLETO';
		const CREDIT_CARD = 'CREDIT_CARD';
		const INDEFINIDO = 'UNDEFINED';
	}