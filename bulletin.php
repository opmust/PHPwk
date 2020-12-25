<?php
error_reporting(0); //錯誤報告設定
session_start(); //啟動session
if(!isset($_SESSION["id"])){   //判斷 $_SESSION["id"]內是否有帳號資料
echo "請登入系統";
echo "<meta http-equiv='refresh' content='1; url=login.html'>";
}
else{
    echo "歡迎{$_SESSION['id']}登入 [<a href=logout.php>登出</a>] <p> [<a href=bulletin_add_form.php>新增佈告</a>] <p>"; //[<a href=logout.php>登出</a>]:登出的連結
    $conn = mysqli_connect("localhost", "root", "", "mydb");//連結指定資料庫的變數                                       //[<a href=bulletin_add_form.php>新增佈告</a>]:新增佈告的連結
      if (mysqli_connect_error($conn))//判斷$conn連結資料庫是否發生錯誤
         die("連線資料庫錯誤");
      mysqli_set_charset($conn, "utf8"); //中文格式設定 
      $result=mysqli_query($conn, "select * from bulletin"); //從連接的資料庫中尋找bulletin中的資料
      echo "<table border=1><tr><td>佈告操作</td><td>bid</td><td>佈告型態</td><td>佈告標題</td><td>佈告內容</td><td>發布時間</td></tr>"; //佈告欄的設定
      while ($row=mysqli_fetch_array($result)) {
           echo "<tr><td>";
           echo "<a href=bulletin_edit_form.php?bid={$row[bid]}>修改</a> ";//bid={$row[bid]}:透過找出的bid值連接要修改的佈告欄, href=bulletin_edit_form.php:修該佈告欄的php程式
           echo "<a href=delete.php?bid={$row[bid]}>刪除</a>"; //href=delete.php:刪除佈告欄的php程式, bid={$row[bid]:透過找出的bid值連接要刪除的佈告欄
           echo "</td><td>";
           echo $row[bid];
           echo "</td><td>";
           echo $row[type];
           echo "</td><td>";
           echo $row[title];
           echo "</td><td>";
           echo $row[content];
           echo "</td><td>";
           echo $row[time];
           echo "</td></tr>";
      }
      echo "</table>" ; 
} 
?>
