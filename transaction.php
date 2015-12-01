<?php

require_once('lib/view.php');

$data['title'] = "Payment";
$data['page'] = "v_transaction.php";
require_once View::getView('dashboard.php', $data);