<?php

use Felipe\Doctrine\Entity\Cliente;
use Felipe\Doctrine\Entity\Telefone;
use Felipe\Doctrine\Helper\EntityManagerFactory;

require_once __DIR__ . './../vendor/autoload.php';

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();

$clienteRepository = $entityManager->getRepository(Cliente::class);

/** @var Aluno[] $clientes */
$clientes = $clienteRepository->findAll();

foreach ($clientes as $cliente) {
    $telefones = $cliente
        ->getTelefones()
        ->map(function (Telefone $telefone) {
            return $telefone->getNumber();
        })
        ->toArray();

    echo "{$cliente->getId()} - Nome: {$cliente->getName()}\n\n";
    echo "Telefones:\n" . implode(', ', $telefones) . "\n\n";
}
