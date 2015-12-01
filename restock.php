<?php

require_once('lib/view.php');

$data['title'] = "Restock";
$data['page'] = "v_restock.php";
require_once View::getView('dashboard.php', $data);