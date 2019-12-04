<?php 

use Felipe\Doctrine\Entity\Aluno;
use Felipe\Doctrine\Helper\EntityManagerFactory;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();

$alunoRepository = $entityManager->getRepository(Aluno::class);

/** @var Aluno[] $alunoList */
$alunoList = $alunoRepository->findAll();

/* foreach ($alunoList as $aluno) {
    echo "ID: {$aluno->getId()} > Nome: {$aluno->getNome()} \n\n";
} */

if (isset($argv)) {
   foreach ($argv as $consults) {
        if (is_numeric($consults)) {
            $aluno = $alunoRepository->find($consults);
            echo $aluno->getNome() . "\n\n";
        }
   } 
}

// foreach ($argv as $consults) {
//     echo $consults . 'ola';
// }

//$nico = $alunoRepository->find($argv[1]);
//echo $nico->getNome();

/* $felipe = $alunoRepository->findOneBy([
    'id' => $argv[1]
]);

var_dump($felipe); 
*/
