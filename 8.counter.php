
<?php
    // 啟動 session
    session_start();

    // 檢查是否已設置 session 變數 "counter"，如果未設置則初始化為 1
    if (!isset($_SESSION["counter"]))
        $_SESSION["counter"] = 1;
    else
        // 如果已設置，則將計數器加 1
        $_SESSION["counter"]++;

    // 輸出目前的訪問次數
    echo "counter=" . $_SESSION["counter"];

    // 提供連結，用戶可以點擊以重置計數器
    echo "<br><a href=9.reset_counter.php>重置counter</a>";
?>
