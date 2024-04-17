
<?php
   // 使用 mysqli_connect() 函式建立與資料庫的連結
   $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");

   // 使用 mysqli_query() 函式從資料庫中查詢資料
   $result=mysqli_query($conn, "select * from user");

   // 使用 mysqli_fetch_array() 函式從查詢結果中逐行抓取資料
   $login=FALSE;
   while ($row=mysqli_fetch_array($result)) {
     // 檢查用戶輸入的帳號和密碼是否與資料庫中的一致
     if (($_POST["id"]==$row["id"]) && ($_POST["pwd"]==$row["pwd"])) {
       $login=TRUE;
     }
   } 

   // 如果登入成功
   if ($login==TRUE) {
    // 啟動 session
    session_start();
    $_SESSION["id"]=$_POST["id"];
    echo "登入成功";
    // 重新導向至 bulletin.php 頁面
    echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";
   }

   // 如果登入失敗
  else{
    echo "帳號/密碼 錯誤";
    // 重新導向至 login.html 頁面
    echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
  }
?>       
