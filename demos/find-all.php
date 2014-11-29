<?php

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../bootstrap.php';

$repo = $entityManager->getRepository('Symm\Entity\Customer');

$customers = $repo->findAll();

var_dump($customers);
