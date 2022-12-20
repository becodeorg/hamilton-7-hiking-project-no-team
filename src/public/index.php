<?php
declare(strict_types=1);
require 'vendor/autoload.php';

$test = new UserModel();
$test->create('test6399', 'Ty', 'Tester', 'test566@server.com', 'cszzjhqldkuçojjsjssqqkdmq');
var_dump($test->find('test6399'));