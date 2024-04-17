
<?php
   // 使用 mysqli_connect() 函式建立與資料庫的連結
   $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
   
   // 使用 mysqli_query() 函式從資料庫中查詢資料
   $result = mysqli_query($conn, "select * from user");
   
   // 使用 mysqli_fetch_array() 函式從查詢結果中抓取一筆資料，並逐一比對用戶輸入的帳號和密碼是否與資料庫中的一致
   $login = FALSE;
   while ($row = mysqli_fetch_array($result)) {
     if (($_POST["id"] == $row["id"]) && ($_POST["pwd"] == $row["pwd"])) {
       $login = TRUE;
     }
   } 

   // 如果登入成功，顯示登入成功訊息；否則顯示帳號/密碼錯誤訊息
   if ($login == TRUE)
     echo "登入成功";
  else
     echo "帳號/密碼 錯誤";
?>        
