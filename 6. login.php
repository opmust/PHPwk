<?php
    error_reporting(0); //錯誤報告設定
    
    $conn = mysqli_connect("localhost","root","", "mydb"); //連結資料庫的變數
    if (mysqli_connect_error($conn))
        die("資料庫連線錯誤");

    mysqli_set_charset($conn, "utf8");
    $result=mysqli_query($conn, "select * from user"); //從連接的資料庫中找尋資料的變數
    $login=False; //登入是否成功的判斷布林數
    while ($row=mysqli_fetch_array($result)) { //$row=mysqli_fetch_array($result):將$row的值設定成資料庫擷取出的資料
        if($_POST["id"]==$row[id] && $_POST["pwd"]==$row[pwd]) //判斷使用者輸入的帳密是否和資料庫的相同
            $login=True;
    }
    if($login==True){
        //echo "歡迎登入";
        session_start(); //可以用來保護網頁安全的方式
        $_SESSION["id"] = $_POST["id"]; 
        echo "<meta http-equiv='refresh' content= '0; url=bulletin.php'>"; //將使用者跳轉至url所設定之網頁 content:跳轉所需時間
    }
    else
    {
        echo "帳號或密碼錯誤";
        echo "<meta http-equiv='refresh' content= '1; url=login.html'>";
    }
    
?>
