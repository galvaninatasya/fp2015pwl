<?php

require_once('lib/view.php');

$data['title'] = "UPDATE PRODUCT";
$data['page'] = "edit/edit_product.php";
require_once View::getView('dashboard.php', $data);