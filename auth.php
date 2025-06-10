<?php
// Пример простейшей авторизации
session_start();
if ($_POST['username'] === 'test' && $_POST['password'] === '123') {
  $_SESSION['user'] = $_POST['username'];
  echo 'Авторизация прошла успешно';
} else {
  echo 'Неверные данные';
}
?>
