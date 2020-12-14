<?php
include 'inc/conexion.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$user = $_POST['usuario_nombre'];
$password = $_POST['usuario_password'];
$sel = $con->prepare("SELECT *from usuarios where usuarios_nombre=? and usuarios_pass=?");
$parametro = 50;
$sel->bind_param('ss', $user, $password);
$sel->execute();
$res = $sel->get_result();
$row = mysqli_num_rows($res);
if ($row != 0) {
while ($f = $res->fetch_assoc()) {
if ($f['usuarios_tipo'] == "empleado") {
session_start();
$_SESSION['usuario_tipo'] = "empleado";
$_SESSION['usuario_nombre'] = $f['usuarios_nombre'];
header("Location: operaciones_empleado.php");
} else {
session_start();
$_SESSION['usuario_tipo'] = "director";
$_SESSION['usuario_nombre'] = $f['usuarios_nombre'];
header("Location: inc/incluye_menu.php");
}
}
} else {
echo "NOMBRE O PASSWORD INCORRECTO";
}
}
?>