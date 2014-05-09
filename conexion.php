<?php
$servidor="sql206.260mb.net";
$usuario="n260m_14789385";
$contrasena="QWERTY";
$baseDatos="n260m_14789385_cezy";
$con=mysql_connect($servidor,$usuario,$contrasena)or die("Error de conexión".mysql_error());
mysql_select_db($baseDatos,$con);
?>