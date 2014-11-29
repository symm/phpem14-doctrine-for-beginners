<?php

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../bootstrap.php';

$repo = $entityManager->getRepository('Symm\Entity\Customer');

$customer = $repo->findOneBy([
    'id' => 7
]);

if (!$customer) {
    throw new \Exception('Customer does not exist');
}

$entityManager->remove($customer);
$entityManager->flush();