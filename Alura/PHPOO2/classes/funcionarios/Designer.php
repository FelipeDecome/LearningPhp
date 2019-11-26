<?php 

namespace classes\funcionarios;

use classes\abstratas\Funcionario;

class Designer extends Funcionario
{

	public function getBonificacao()
    {
    	$this->salario *= 0.3;
    	return $this->salario;
    }    

}

 ?>