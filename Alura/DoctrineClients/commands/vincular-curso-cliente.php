<?php

use Felipe\Doctrine\Entity\Cliente;
use Felipe\Doctrine\Entity\Cursos;
use Felipe\Doctrine\Helper\EntityManagerFactory;

require_once __DIR__ . './../vendor/autoload.php';

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();

$idCliente = $argv[1];
$idCurso = $argv[2];

$cliente = $entityManager->find(Cliente::class, $idCliente);
$curso = $entityManager->find(Cursos::class, $idCurso);

$curso->addCliente($cliente);

$entityManager->flush();
