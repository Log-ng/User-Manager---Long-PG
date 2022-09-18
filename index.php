<?php
session_start();

if (isset($_SESSION['loggedin'])) {
	header('location: ./controllers/user/list');
	exit;
}
header('location: ./controllers/user/login');
