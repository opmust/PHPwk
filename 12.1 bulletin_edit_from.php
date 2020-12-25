<?php
error_reporting(0); //錯誤報告設定
$conn=mysqli_connect("localhost","root","","mydb"); //設定要連接的資料庫
$sql="select * from bulletin where bid={$_GET[bid]}"; //從擷取的bid值找尋指定的資料表
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);

echo"
<h1>修改佈告</h1>
<form method=post action=bulletin_edit.php>
<input type=hidden name=bid value={$row[bid]}>
佈告標題:<input type=text name=title size=200 value={$row[title]}><p>
佈告內容:<p><textarea cols=100 rows=20 name=content>{$row[content]}</textarea><p>
佈告類型:
<input type=radio name=type value=1";
if($row[type]=="1") echo " checked";
echo ">系上公告
<input type=radio name=type value=2";
if($row[type]=="2") echo " checked";
echo ">招生訊息
<input type=radio name=type value=3";
if($row[type]=="3") echo " checked";
echo ">企業徵才
<p>
發佈時間:<input type=date name=time value={$row[time]}><P>
<input type=submit value=發佈公告>
</form>
";
/*
<form method=post action=bulletin_edit.php> //使用post格式 並執行bulletin_edit.php
<input type=hidden name=bid value={$row[bid]}> hidden:隱藏格式
佈告類型:
<input type=radio name=type value=1";
if($row[type]=="1") echo " checked";  if($row[type]=="1") echo " checked":如果擷取的資料型態為1 預設選項設定為1
echo ">系上公告
<input type=radio name=type value=2";
if($row[type]=="2") echo " checked";  if($row[type]=="2") echo " checked":如果擷取的資料型態為2 預設選項設定為2
echo ">招生訊息
<input type=radio name=type value=3";
if($row[type]=="3") echo " checked";  if($row[type]=="3") echo " checked":如果擷取的資料型態為3 預設選項設定為3
echo ">企業徵才
*/
?>
