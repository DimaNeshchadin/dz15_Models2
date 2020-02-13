<?php


require_once '../vendor/autoload.php';
require_once '../config/eloquent.php';

use \App\Model\Category;

$user = App\Model\Category::withTrashed();
$user->where('id', 4);
$user->restore();
