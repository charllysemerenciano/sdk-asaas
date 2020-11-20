<?php
	/**
	 * @Author Charllys Emerenciano
	 * @create 20/11/2020
	 */
	
	namespace Api\enum;
	
	
	use MyCLabs\Enum\Enum;
	
	class StatusCobranca extends Enum
	{
		const PENDENTE            = 'PENDING';
		const RECEBIDO            = 'RECEIVED';
		const CONFIRMADO          = 'CONFIRMED';
		const VENCIDO             = 'OVERDUE';
		const ESTORNADO           = 'REFUNDED';
		const RECEBIDO_DINHEIRO   = 'RECEIVED_IN_CASH';
		const SOLICITACAO_ESTORNO = 'REFUND_REQUESTED';
		const RECEBIDO_ESTORNO    = 'CHARGEBACK_REQUESTED';
		const DISPUTA_ESTORNO     = 'CHARGEBACK_DISPUTE';
		const DISPUTA_VENCIDA     = 'AWAITING_CHARGEBACK_REVERSAL';
		const RECUPERACAO         = 'DUNNING_REQUESTED';
		const RECUPERADA          = 'DUNNING_RECEIVED';
		const ANALISE             = 'AWAITING_RISK_ANALYSIS';
	}