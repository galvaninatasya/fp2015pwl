<?php

require_once('lib/view.php');

$data['title'] = "Products";
$data['page'] = "v_products.php";
require_once View::getView('dashboard.php', $data);