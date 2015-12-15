<?php

require_once('lib/view.php');

$data['title'] = "UPDATE SUPPLIER";
$data['page'] = "edit/edit_supplier.php";
require_once View::getView('dashboard.php', $data);