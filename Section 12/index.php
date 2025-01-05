<?php

require 'src/Model/Customer.php';
use Store\Model\Customer;

$customer =  new Customer('Bob');
echo $customer->getName();