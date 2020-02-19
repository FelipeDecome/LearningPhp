<?php

use Felipe\Doctrine\Entity\Cliente;
use Felipe\Doctrine\Helper\EntityManagerFactory;

require_once __DIR__ . './../vendor/autoload.php';

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();

$clienteId = $argv[1];
$newClienteName = $argv[2];

$cliente = $entityManager->find(Cliente::class, $clienteId);
$cliente->setName($newClienteName);

/** Não precisa do persist pq já está sendo observada pelo doctrine */

$entityManager->flush();
