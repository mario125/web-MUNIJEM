<?php


if ($_SESSION['nombre'] != '') {

	if ($_POST) {

		require('core/models/class.Acceso.php');
		$acceso = new Acceso();
		$acceso->Login();
		exit;

		# code...
	} else {
		$template = new Smarty();
		$template->display('public/admin.tpl');
		# code...
	}
} else {

	header('location:?view=index');
}
