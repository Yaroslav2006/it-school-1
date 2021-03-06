<?php

ini_set('display_errors', 1);

foreach ($_POST as $key => $value) {
    echo $key . ' : ' . $value . '<br>';
}

$login = trim($_POST['login']);
$email = $_POST['email'];
$pass = $_POST['pass'];
$pass_confirm = $_POST['pass_confirm'];

if (isset($_POST['agreement'])) {
    $agreement = $_POST['agreement'];
} else {
    $agreement = 0;
}

if (strlen($login) < 1) {
    echo 'Error to short login name<br>';
}

if (strlen($email) < 5) {
    echo 'Error not valid email<br>';
}

if ($pass != $pass_confirm) {
    echo 'Pass & Pass Confirm not equal<br>';
}

if (!$agreement) {
    echo 'Error: You should check User Agreement<br>';
}