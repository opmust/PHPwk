<?php
error_reporting(0); //錯誤報告設定
$conn=mysqli_connect("localhost","root","","mydb"); //$conn:連結指定資料庫的變數
$sql="delete from bulletin where bid={$_GET[bid]}"; //透過擷取出的bid值來刪除指定的佈告欄
//echo $sql
if(!mysqli_query($conn, $sql)) //判斷資料庫連結是否成功和刪除佈告欄所需的bid值是否正確
    echo "刪除錯誤";
else{
    echo "刪除成功....返回佈告中....";
    echo "<meta http-equiv=refresh content='3;url=bulletin.php'>";
}
?>
