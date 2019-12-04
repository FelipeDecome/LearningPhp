<?php 

use Felipe\Doctrine\Entity\Aluno;
use Felipe\Doctrine\Helper\EntityManagerFactory;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();

$alunoRepository = $entityManager->getRepository(Aluno::class);

/** @var Aluno[] $alunoList */
$alunoList = $alunoRepository->findAll();

foreach ($alunoList as $aluno) {
    echo "ID: {$aluno->getId()} > Nome: {$aluno->getNome()} <br/>";
}

$nico = $alunoRepository->find(4);
echo $nico->getNome();

$felipe = $alunoRepository->findBy([
    'nome' => 'Felipe Decome'
]);

var_dump($felipe);