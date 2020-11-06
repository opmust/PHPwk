<?php
#錯誤報告去除
error_reporting(0);

#php跟mysql資料庫連結3步驟

#1.mysqli_connect,必須要設定ip ("localhost","root","","mydb")"localhost"為本地端 "mydb"為要連結之資料庫 ("root",""):"root"為mysql默認之帳號 ""為密碼
$conn=mysqli_connect("localhost","root","","mydb");

#2.mysqli_query從表格找出資料
$result=mysqli_query($conn,"select * from user");

#3.mysqli_fetch_array從$result擷取每筆資料
$row=mysqli_fetch_array($result);
echo $row[id]." ".$row[pwd];

echo "<br>";

$row=mysqli_fetch_array($result);
echo $row[id]." ".$row[pwd];
?>
