<?php

use App\Controllers\ProductController;

require_once __DIR__.'/vendor/autoload.php';

$page = (isset($_GET['p'])) ? $_GET['p'] : 1;
echo (new ProductController())->index($page);
