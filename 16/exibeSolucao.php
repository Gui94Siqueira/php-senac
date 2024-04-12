<?php
require_once 'solucao.php';
$repository = new DatabaseRepository();

print_r($repository->getAllItems());
?>