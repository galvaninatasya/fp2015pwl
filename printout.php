<?php

require_once('lib/view.php');

$data['title'] = "Print Out";
$data['page'] = "cetakfaktur.php";
require_once View::getView('cetakfaktur.php', $data);