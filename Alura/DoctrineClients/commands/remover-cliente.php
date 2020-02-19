<?php

use Felipe\Doctrine\Entity\Cliente;
use Felipe\Doctrine\Helper\EntityManagerFactory;

require_once __DIR__ . './../vendor/autoload.php';

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();

$clienteId = $argv[1];

$aluno = $entityManager->getReference(Cliente::class, $clienteId);

$entityManager->remove($aluno);

$entityManager->flush();
