
<?php
    // 關閉錯誤報告
    error_reporting(0);
    
    // 建立與資料庫的連結
    $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
    
    // 從資料庫中查詢佈告資料
    $result = mysqli_query($conn, "select * from bulletin");
    
    // 輸出 HTML 表格的開始標記，設定邊框為2
    echo "<table border=2><tr><td>佈告編號</td><td>佈告類別</td><td>標題</td><td>佈告內容</td><td>發佈時間</td></tr>";
    
    // 使用 while 迴圈逐行處理查詢結果
    while ($row = mysqli_fetch_array($result)){
        // 輸出表格中的每一行
        echo "<tr><td>";
        echo $row["bid"];
        echo "</td><td>";
        echo $row["type"];
        echo "</td><td>"; 
        echo $row["title"];
        echo "</td><td>";
        echo $row["content"]; 
        echo "</td><td>";
        echo $row["time"];
        echo "</td></tr>";
    }
    
    // 輸出 HTML 表格的結束標記
    echo "</table>"
?>   
