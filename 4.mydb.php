
<?php
    // 使用 mysqli_connect() 函式建立與資料庫的連結
    $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");

    // 使用 mysqli_query() 函式從資料庫中查詢資料
    $result = mysqli_query($conn, "select * from user");

    // 使用 mysqli_fetch_array() 函式從查詢結果中抓取一筆資料
    $row = mysqli_fetch_array($result);

    // 顯示第一筆用戶資料的帳號和密碼
    echo $row["id"] . " " . $row["pwd"] . "<br>"; 

    // 再次使用 mysqli_fetch_array() 函式從查詢結果中抓取下一筆資料
    $row = mysqli_fetch_array($result);

    // 顯示第二筆用戶資料的帳號和密碼
    echo $row["id"] . " " . $row["pwd"];
?>
