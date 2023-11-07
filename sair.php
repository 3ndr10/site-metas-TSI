<?php
session_start();
session_destroy();

$user = "";
header('Location: login.php?sucesso=OFF LOGIN');
?>