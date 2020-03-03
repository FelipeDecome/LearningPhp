<?php

use Felipe\Doctrine\Entity\Cursos;
use Felipe\Doctrine\Helper\EntityManagerFactory;

require_once __DIR__ . './../vendor/autoload.php';

$curso = new Cursos();

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();

$curso->setName($argv[1]);
$entityManager->persist($curso);

$entityManager->flush();
