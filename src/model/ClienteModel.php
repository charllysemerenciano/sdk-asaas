<?php
	/**
	 * @Author Charllys Emerenciano
	 * @create 20/11/2020
	 */
	
	namespace Api\model;
	
	
	class ClienteModel
	{
		private $id;
		private $name;
		private $cpfCnpj;
		private $email;
		private $telefone;
		private $telefoneCelular;
		private $logradouro;
		private $numero;
		private $complemento;
		private $bairro;
		private $cep;
		private $referenciaExterna;
		private $desativarNotificacao;
		private $emailsAdicionais;
		private $inscricaoMunicipal;
		private $stateInscription;
		private $observacoes;
		private $grupo;
		private $dataCriacao;
		
		/**
		 * Cliente constructor.
		 *
		 * @param $name
		 * @param $cpfCnpj
		 */
		public function __construct($name, $cpfCnpj)
		{
			$this->name = $name;
			$this->cpfCnpj = $cpfCnpj;
		}
		
		/**
		 * @return mixed
		 */
		final public function getId()
		{
			return $this->id;
		}
		
		/**
		 * @param mixed $id
		 */
		final public function setId($id)
		{
			$this->id = $id;
		}
		
		/**
		 * @return mixed
		 */
		final public function getName()
		{
			return $this->name;
		}
		
		/**
		 * @param mixed $name
		 */
		final public function setName($name)
		{
			$this->name = $name;
		}
		
		/**
		 * @return mixed
		 */
		final public function getCpfCnpj()
		{
			return $this->cpfCnpj;
		}
		
		/**
		 * @param mixed $cpfCnpj
		 */
		final public function setCpfCnpj($cpfCnpj)
		{
			$this->cpfCnpj = $cpfCnpj;
		}
		
		/**
		 * @return mixed
		 */
		final public function getEmail()
		{
			return $this->email;
		}
		
		/**
		 * @param mixed $email
		 */
		final public function setEmail($email)
		{
			$this->email = $email;
		}
		
		/**
		 * @return mixed
		 */
		final public function getTelefone()
		{
			return $this->telefone;
		}
		
		/**
		 * @param mixed $telefone
		 */
		final public function setTelefone($telefone)
		{
			$this->telefone = $telefone;
		}
		
		/**
		 * @return mixed
		 */
		final public function getTelefoneCelular()
		{
			return $this->telefoneCelular;
		}
		
		/**
		 * @param mixed $telefoneCelular
		 */
		final public function setTelefoneCelular($telefoneCelular)
		{
			$this->telefoneCelular = $telefoneCelular;
		}
		
		/**
		 * @return mixed
		 */
		final public function getLogradouro()
		{
			return $this->logradouro;
		}
		
		/**
		 * @param mixed $logradouro
		 */
		final public function setLogradouro($logradouro)
		{
			$this->logradouro = $logradouro;
		}
		
		/**
		 * @return mixed
		 */
		final public function getNumero()
		{
			return $this->numero;
		}
		
		/**
		 * @param mixed $numero
		 */
		final public function setNumero($numero)
		{
			$this->numero = $numero;
		}
		
		/**
		 * @return mixed
		 */
		final public function getComplemento()
		{
			return $this->complemento;
		}
		
		/**
		 * @param mixed $complemento
		 */
		final public function setComplemento($complemento)
		{
			$this->complemento = $complemento;
		}
		
		/**
		 * @return mixed
		 */
		final public function getBairro()
		{
			return $this->bairro;
		}
		
		/**
		 * @param mixed $bairro
		 */
		final public function setBairro($bairro)
		{
			$this->bairro = $bairro;
		}
		
		/**
		 * @return mixed
		 */
		final public function getCep()
		{
			return $this->cep;
		}
		
		/**
		 * @param mixed $cep
		 */
		final public function setCep($cep)
		{
			$this->cep = $cep;
		}
		
		/**
		 * @return mixed
		 */
		final public function getReferenciaExterna()
		{
			return $this->referenciaExterna;
		}
		
		/**
		 * @param mixed $referenciaExterna
		 */
		final public function setReferenciaExterna($referenciaExterna)
		{
			$this->referenciaExterna = $referenciaExterna;
		}
		
		/**
		 * @return mixed
		 */
		final public function getDesativarNotificacao()
		{
			return $this->desativarNotificacao;
		}
		
		/**
		 * @param mixed $desativarNotificacao
		 */
		final public function setDesativarNotificacao($desativarNotificacao)
		{
			$this->desativarNotificacao = $desativarNotificacao;
		}
		
		/**
		 * @return mixed
		 */
		final public function getEmailsAdicionais()
		{
			return $this->emailsAdicionais;
		}
		
		/**
		 * @param mixed $emailsAdicionais
		 */
		final public function setEmailsAdicionais($emailsAdicionais)
		{
			$this->emailsAdicionais = $emailsAdicionais;
		}
		
		/**
		 * @return mixed
		 */
		final public function getInscricaoMunicipal()
		{
			return $this->inscricaoMunicipal;
		}
		
		/**
		 * @param mixed $inscricaoMunicipal
		 */
		final public function setInscricaoMunicipal($inscricaoMunicipal)
		{
			$this->inscricaoMunicipal = $inscricaoMunicipal;
		}
		
		/**
		 * @return mixed
		 */
		final public function getStateInscription()
		{
			return $this->stateInscription;
		}
		
		/**
		 * @param mixed $stateInscription
		 */
		final public function setStateInscription($stateInscription)
		{
			$this->stateInscription = $stateInscription;
		}
		
		/**
		 * @return mixed
		 */
		final public function getObservacoes()
		{
			return $this->observacoes;
		}
		
		/**
		 * @param mixed $observacoes
		 */
		final public function setObservacoes($observacoes)
		{
			$this->observacoes = $observacoes;
		}
		
		/**
		 * @return mixed
		 */
		final public function getGrupo()
		{
			return $this->grupo;
		}
		
		/**
		 * @param mixed $grupo
		 */
		final public function setGrupo($grupo)
		{
			$this->grupo = $grupo;
		}
		
		/**
		 * @return mixed
		 */
		final public function getDataCriacao()
		{
			return $this->dataCriacao;
		}
		
		/**
		 * @param mixed $dataCriacao
		 */
		final public function setDataCriacao($dataCriacao)
		{
			$this->dataCriacao = $dataCriacao;
		}
		
		
	}