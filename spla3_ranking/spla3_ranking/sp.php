<?php
// データベース接続情報
$servername = "localhost";
$username = "pt0sp";
$password = "qazWSXedc1";
$dbname = "splatoon3_ranking";

// MySQLデータベースに接続
$conn = new mysqli($servername, $username, $password, $dbname);

// 接続確認
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// テーブル名のリスト
$tables = array(

);

// テーブルごとにクエリを生成して実行
foreach ($tables as $table) {
    // クエリを生成
    $sql = "ALTER TABLE $table
            MODIFY COLUMN  パワー FLOAT(5,1)";

    // クエリを実行
    if ($conn->query($sql) === TRUE) {
        echo "テーブル $table のカラム名を変更しました。<br>";
    } else {
        echo "エラー: " . $conn->error;
    }
}

// データベース接続を閉じる
$conn->close();
?>