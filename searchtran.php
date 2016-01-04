<?php

require_once('lib/view.php');

$data['title'] = "Search Daily Data Transaction";
$data['page'] = "repjualhari.php";


require_once View::getView('dashboard.php', $data);