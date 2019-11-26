<?php

use exception\SaldoInsuficienteException;
use exception\OperacaoNaoRealizadaException;


class ContaCorrente {

	private $titular;

	private $agencia;

	private $conta;

	private $saldo;

	public static $totalDeContas;

	public static $taxaOperacao;

	public $totalSaquesNaoPermitidos;

	public static $operacaoNaoRealizada;

	public function __construct($titular, $agencia, $conta, $saldo) 
	{
		$this->titular = $titular;
		$this->agencia = $agencia;
		$this->conta = $conta;
		$this->saldo = $saldo;
		
		self::$totalDeContas ++;
		self::calculaTaxa();

	}

	public static function calculaTaxa()
	{
		try{

			if(self::$totalDeContas < 1) {

				throw new \Exception("Valor inferior a zero!");

			} else {
			
				self::$taxaOperacao = (30 / self::$totalDeContas);

			}

		} catch(\Exception $error){

			echo $error->getMessage(). "<br>";
			exit;

		}
	}	

	public function sacar(float $valor)
	{

			Validacao::isNumber($valor);
			Validacao::isNegative($valor);

			if($this->saldo < $valor){

				$this->totalSaquesNaoPermitidos++;

				throw new SaldoInsuficienteException("Valor à ser sacado excede o saldo disponivel.", $valor, $this->saldo);

				return $this;

			} else {

				$this->saldo -= $valor;
				return $this;
			}

	}

	public function depositar(float $valor)
	{

		Validacao::isNumber($valor);
		Validacao::isNegative($valor);

		$this->saldo += $valor;
		return $this;

	}

	public function transferir(float $valor, ContaCorrente $conta)
	{
		try {	
		
			$arquivo = new LeitorArquivo("LogTransferencia.txt");

			$arquivo->abrirArquivo();
			$arquivo->escreverArquivo();

			$this->sacar($valor);

			$conta->depositar($valor);

			return $this;

		} catch (\Exception $error) {

			ContaCorrente::$operacaoNaoRealizada++;

			throw new OperacaoNaoRealizadaException("Operação não realizada", 55, $error);		

		}finally {

			$arquivo->fecharArquivo();

		}
	}

	public function __get($atributo)
	{
		try{

			Validacao::protegeAtributo($atributo);

		} catch (Exception $error) {

			echo $error->getMessage() . "<br>";

		}	

		return $this->$atributo;
	}

	public function __set($atributo, $value)
	{		
		Validacao::protegeAtributo($atributo);
		$this->$atributo = $value;
	}

	public function getSaldo()
	{
		return "R$ " . $this->formataSaldo();
	}

	private function formataSaldo()
	{
		return number_format($this->saldo, 2, ",",'.');
	}

	public function __toString()
	{
		return "$this->titular: {$this->getSaldo()} <br/>";
	}
}