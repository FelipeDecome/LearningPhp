<?php
use Doctrine\ORM\Tools\Console\ConsoleRunner;
use Felipe\Doctrine\Helper\EntityManagerFactory;

// replace with file to your own project bootstrap
require_once __DIR__ . '/vendor/autoload.php';

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->GetEntityManager();

return ConsoleRunner::createHelperSet($entityManager);
