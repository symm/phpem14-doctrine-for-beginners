<?php

use Symm\Entity\Customer;

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../bootstrap.php';

$customer = new Customer();
$customer->setName('Gareth');

$entityManager->persist($customer);
$entityManager->flush();