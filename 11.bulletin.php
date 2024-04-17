
<?php
    // 關閉錯誤報告
    error_reporting(0);

    // 啟動 session
    session_start();

    // 如果未設置用戶 id，表示尚未登入
    if (!$_SESSION["id"]) {
        echo "請先登入";
        // 重新導向至 login.html 頁面
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else{
        // 如果已登入，顯示歡迎訊息以及相關操作連結
        echo "歡迎, ".$_SESSION["id"]."[<a href=12.logout.php>登出</a>] [<a href=18.user.php>管理使用者</a>] [<a href=22.bulletin_add_form.php>新增佈告</a>]<br>";

        // 建立與資料庫的連結
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");

        // 從資料庫中取得佈告資料
        $result=mysqli_query($conn, "select * from bulletin");

        // 顯示佈告資料的表格
        echo "<table border=2><tr><td></td><td>佈告編號</td><td>佈告類別</td><td>標題</td><td>佈告內容</td><td>發佈時間</td></tr>";
        
        // 逐行顯示佈告資料
       while ($row=mysqli_fetch_array($result)){
    // 顯示修改和刪除連結，連結的目標分別是 bulletin_edit_form.php 和 bulletin_delete.php，並傳遞佈告編號 bid
    echo "<tr><td><a href=26.bulletin_edit_form.php?bid={$row["bid"]}>修改</a> 
    <a href=28.bulletin_delete.php?bid={$row["bid"]}>刪除</a></td><td>";

    // 顯示佈告編號
    echo $row["bid"];
    echo "</td><td>";

    // 顯示佈告類別
    echo $row["type"];
    echo "</td><td>"; 

    // 顯示佈告標題
    echo $row["title"];
    echo "</td><td>";

    // 顯示佈告內容
    echo $row["content"]; 
    echo "</td><td>";

    // 顯示發佈時間
    echo $row["time"];
    echo "</td></tr>";
}
echo "</table>";
    }

?>        
