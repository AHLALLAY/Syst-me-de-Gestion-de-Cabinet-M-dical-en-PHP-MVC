<?php

require_once '../../models/User.php';

$users = new User();
$doctors = $users->getDoctors();