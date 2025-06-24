<?php
require_once 'styles.php';
require_once 'constans.php';
require_once 'userClass.php';
require_once 'functions.php';

$users = User::get_users_with_data(API_URL);
//var_dump($users);
render_template('table', ['users' => $users]);
//casting $users array into a associative array, to make ir extract()