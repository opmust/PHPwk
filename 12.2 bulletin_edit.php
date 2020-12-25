<?php
error_reporting(0); //錯誤報告設定
session_start(); //啟動session
if(!isset($_SESSION[id])){ ////判斷使用者是否有登入
    echo "請輸入帳號密碼";
    echo "<meta http-equiv='refresh' content='2;url=login.html'>";
}
else{
    $conn=mysqli_connect("localhost","root","","mydb"); //設定要連接之資料庫的變數
    $sql= "update bulletin set title='{$_POST[title]}',content='{$_POST[content]}',type={$_POST[type]},time='{$_POST[time]}' where bid={$_POST[bid]}";
    //將佈告欄的資料更新為使用者更改後的資料

    // echo $sql;
    if(!mysqli_query($conn, $sql)) ////判斷是否成功連結指定的資料庫和判斷修改佈告欄的變數是否設定正確
        echo "新增佈告失敗";
    else
        echo "新增佈告成功";
    
    echo "<meta http-equiv='refresh' content='2;url=bulletin.php'>"; //將頁面跳轉至佈告欄
}

?>
