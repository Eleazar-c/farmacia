<?php

session_start(['name'=>'FARM']);
session_destroy();

header('Location:../vista/login.php');