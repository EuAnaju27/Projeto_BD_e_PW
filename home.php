<?php



require_once('conn.php');

session_start();



$error_msg = "";



$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);



if (!$dbc) {
$_SESSION["errorConnect"] = mysqli_connect_error();
}



?>



<html>
<head>
<meta charset="utf-8">
<title>Sistema de gerenciamento de biblioteca</title>
</head>
<body>
    <h1>Seja bem vindo ao nosso sistema!</h1>
</body>
</html>
    