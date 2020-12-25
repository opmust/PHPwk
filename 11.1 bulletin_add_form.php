<?php

echo "  
<h1>新增佈告</h1>
<form method=post action=bulletin_add.php> 
佈告標題:<input type=text name=title size=200><p>
佈告內容:<p><textarea cols=100 rows=20 name=content></textarea><p>
佈告類型:<input type=radio name=type value=1 checked>系上公告
<input type=radio name=type value=2 >招生訊息
<input type=radio name=type value=3 >企業徵才
<p>
發佈時間:<input type=date name=time><P>
<input type=submit value=發佈公告>
</form>
";
/*
<form method=post action=bulletin_add.php>:使用post格式 並執行bulletin_add.php
佈告標題:<input type=text name=title size=200><p>:型態設定為text 大小設定為200 name設定為title
佈告內容:<p><textarea cols=100 rows=20 name=content></textarea>:型態設定為textarea 寬度設定為100 高設定為20 name設定為content
佈告類型:<input type=radio name=type value=1 checked>系上公告 radio:選項格式 checked:預設選項
<input type=radio name=type value=2 >招生訊息
<input type=radio name=type value=3 >企業徵才
*/
?>
