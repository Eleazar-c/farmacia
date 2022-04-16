<?php
session_start(['name'=>'FARM']);
if ($_SESSION['us_tipo']==2) {
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tecnico</title>
</head>
<body>
    Hola tecnico
    <a href="../controlador/logout.php">Cerrar Secion</a>
</body>
</html>
<?php
}else{
    header('Location:../index.php');
}
?>