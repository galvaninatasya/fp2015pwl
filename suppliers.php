<?php

require_once('lib/view.php');

$data['title'] = "Suppliers";
$data['page'] = "v_suppliers.php";
require_once View::getView('dashboard.php', $data);