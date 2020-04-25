<?php

require_once ('Model/queryBuilder.php');
require_once ('Model/example.class.php');

$qb = new QueryBuilder();
$example = $qb->insert(new Example('propertyName', 'myException'));
var_dump($example);
