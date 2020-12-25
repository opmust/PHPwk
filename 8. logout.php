<?php
error_reporting(0);
session_start(); //啟動session

//session清空
unset($_SESSION["id"]);
echo "登出中....";
echo "<meta http-equiv=refresh content='2; url=login.html'>"; //將頁面跳轉至指定網頁
?>
