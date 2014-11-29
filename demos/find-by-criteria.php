<?php

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../bootstrap.php';

$repo = $entityManager->getRepository('Symm\Entity\Customer');

$customer = $repo->findOneBy([
    'id' => 8
]);

var_dump($customer);
