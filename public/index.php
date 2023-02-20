<?php

require_once ('../vendor/autoload.php');

$worker = new \App\Worker();
$worker->work();
