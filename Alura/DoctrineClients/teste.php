<?php

use Felipe\Doctrine\Entity\Cliente;
use Felipe\Doctrine\Helper\EntityManagerFactory;

require_once __DIR__ . './vendor/autoload.php';

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();

$cliente = new Cliente();

// $teste = $entityManager->getReference(Cliente::class, $argv[1]);
// $entityManager->remove($teste);
// $entityManager->flush();
