<?php
include_once '../security.php';
include_once '../conexion.php';


require_once($_SESSION['raiz'] . '/modules/sections/role-access-admin-editor.php');

if (empty($_POST['txtcareer'])) {
	header('Location: /');
	exit();
}

$sql_update = "UPDATE department SET name = '" . $_POST['txtcareername'] . "', description = '" . $_POST['txtcareerdescription'] . "', teacher= '" . $_POST['selectUserTeacher'] . "' WHERE id_department = '" . $_POST['txtcareer'] . "'";

if (mysqli_query($conexion, $sql_update)) {
	$_SESSION['msgbox_error'] = 0;
	$_SESSION['msgbox_info'] = 1;
	$_SESSION['text_msgbox_info'] = 'Departamento actualizado.';
} else {
	$_SESSION['msgbox_info'] = 0;
	$_SESSION['msgbox_error'] = 1;
	$_SESSION['text_msgbox_error'] = 'Error al actualizar.';
}

header('Location: /modules/department');



# ⚠⚠⚠ DO NOT DELETE ⚠⚠⚠

// Todos los derechos reservados © Quito - Ecuador || Estudiantes TIC's en línea || Levantamiento de Información || ESPE 2022-2023

// Ricardo Alejandro  Jaramillo Salgado, Michael Andres Espinosa Carrera, Steven Cardenas, Luis LLumiquinga

# ⚠⚠⚠ DO NOT DELETE ⚠⚠⚠

