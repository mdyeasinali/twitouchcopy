<?php 
	require_once('core/init.php');
	$admin = new Admin();
	$users= new Users();
	$admin->check_admin_login();
	
?>