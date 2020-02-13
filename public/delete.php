<?php


require_once '../vendor/autoload.php';
require_once '../config/eloquent.php';

use \App\Model\Category;

$user = App\Model\Category::find(4);


$user->delete();
