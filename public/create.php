<?php

require_once '../vendor/autoload.php';
require_once '../config/eloquent.php';

use \App\Model\Category;

$user = new Category();
$user->name = 'SSD';
$user->save();
