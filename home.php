<?php

require_once('lib/view.php');

$data['title'] = "Galvicenna Pharmacy";
$data['page'] = "v_home.php";
require_once View::getView('dashboard.php', $data);