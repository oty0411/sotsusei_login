<?php
// session変数を定義して値を入れよう
session_start();

$_SESSION['keyword'] = "G'sACADEMY";
$_SESSION['user'] = ['JS','PHP','SQL']

echo $_SESSION['keyword'];
exit();