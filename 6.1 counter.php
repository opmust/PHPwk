<?php
error_reporting(0); //錯誤報告的設定
session_start(); 
if(!isset($_SESSION["counter"])){ //$_SESSION["counter"]:登入網頁人數的總計
    $_SESSION["counter"]=1; 
}
else{
    $_SESSION["counter"]++;
}
echo "登入{$_SESSION["counter"]}人數";
?>
