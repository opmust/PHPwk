<?php
error_reporting(0); //錯誤報告設定
session_start(); //session啟動
if(!isset($_SESSION[id])){ //判斷使用者是否有登入
    echo "請輸入帳號密碼";
    echo "<meta http-equiv='refresh' content='2;url=login.html'>";
}
else{
    $conn=mysqli_connect("localhost","root","","mydb"); //設定要連接之資料庫
    $sql="insert into bulletin(title, content, type, time) values('{$_POST[title]}','{$_POST[content]}',{$_POST[type]},'{$_POST[time]}')";
    //新增的佈告欄欄位和內容的設定

    // echo $sql;
    if(!mysqli_query($conn, $sql)) //判斷是否成功連結指定的資料庫和判斷新增佈告欄的變數設定是否正確
        echo "新增佈告失敗";
    else
        echo "新增佈告成功";
    
    echo "<meta http-equiv='refresh' content='2;url=bulletin.php'>"; //將頁面跳轉至佈告欄
}

?>
