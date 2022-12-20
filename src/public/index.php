<?php
declare(strict_types=1);
require 'vendor/autoload.php';

$test = new UserModel();
$test->create('test639', 'Ty', 'Tester', 'test3390@server.com', 'csjhqldkuçoqmpkkdsqqkdmq');
var_dump($test->find('test639'));