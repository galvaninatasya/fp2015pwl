<?php

require_once ('config.php');
require_once('lib/view.php');
$data['title'] = "Login Page";
$data['page'] = "login.php";
require_once View::getView('dashboard.php', null);