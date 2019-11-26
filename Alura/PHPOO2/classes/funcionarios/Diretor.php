<?php 

namespace classes\funcionarios;

use classes\abstratas\Funcionario;
use classes\abstratas\FuncionarioAutenticavel;

class Diretor extends FuncionarioAutenticavel
{

    public function getBonificacao()
    {
    	$this->salario *= 0.5;
    	return $this->salario;
    }

}

?>