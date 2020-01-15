<?php

use Felipe\Doctrine\Entity\Aluno;
use Felipe\Doctrine\Entity\Telefone;
use Felipe\Doctrine\Helper\EntityManagerFactory;

require_once __DIR__ . '/../vendor/autoload.php';

$aluno = new Aluno();
$aluno->setNome($argv[1]);

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();

for ($i = 2; $i < $argc; $i++) {
    $numeroTelefone = $argv[$i];
    $telefone = new Telefone();
    $telefone->setNumero($numeroTelefone);

    $aluno->addTelefone($telefone);
}

$entityManager->persist($aluno);

$entityManager->flush();
