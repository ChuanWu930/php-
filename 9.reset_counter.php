
<?php
    // 啟動 session
    session_start();

    // 移除 session 變數 "counter"，即重置計數器
    unset($_SESSION["counter"]);

    // 顯示計數器重置成功的訊息
    echo "counter重置成功....";

    // 重新導向至 8.counter.php 頁面，延遲 2 秒後跳轉
    echo "<meta http-equiv=REFRESH content='2; url=8.counter.php'>";
?>
