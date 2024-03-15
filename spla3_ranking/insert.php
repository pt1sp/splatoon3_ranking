<?php
$servername = "localhost";
$username = "pt0sp";
$password = "qazWSXedc1";
$dbname = "splatoon3_ranking";

// MySQLデータベースへの接続
$conn = new mysqli($servername, $username, $password, $dbname);

// 接続の確認
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// クエリの実行
$value1 = "κöu";
$value2 = "2646";
$value3 = "スクリュースロッシャー";
$value4 = "3446.5";

// INSERT文の作成と実行
$sql = "INSERT INTO chill_2022_hoko VALUES ('$value1', '$value2', '$value3', '$value4')";
// fresh_area,chill_area以外は1行だけ追加した 2/7 19:30
if ($conn->query($sql) === TRUE) {
    echo "新しいレコードが追加されました";
} else {
    echo "エラー: " . $sql . "<br>" . $conn->error;
}

// データベース接続の終了
$conn->close();

?>