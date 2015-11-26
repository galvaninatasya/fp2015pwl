<?php

require_once('lib/view.php');

$data['title'] = "Consumers";
$data['page'] = "v_consumers.php";
require_once View::getView('dashboard.php', $data);