<?php

use Felipe\Doctrine\Entity\Cliente;
use Felipe\Doctrine\Entity\Telefone;
use Felipe\Doctrine\Helper\EntityManagerFactory;

require_once __DIR__ . './../vendor/autoload.php';

$cliente = new Cliente();

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();

$cliente->setName($argv[1]);

for ($i = 2; $i < $argc; $i++) {
    $number = $argv[$i];
    $telefone = new Telefone();
    $telefone->setNumber($number);

    $cliente->addTelefone($telefone);
}

$entityManager->persist($cliente);

$entityManager->flush();
