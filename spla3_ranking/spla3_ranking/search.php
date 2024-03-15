<?php
$servername = "localhost";
$username = "pt0sp";
$password = "qazWSXedc1";
$dbname = "splatoon3_ranking";

$request_raw_date = file_get_contents('php://input');
$selected = json_decode($request_raw_date);
$tableName = $selected;

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$tables = array(
    'chill_2022_area',
    'chill_2022_clam',
    'chill_2022_hoko',
    'chill_2022_yagu',
    'choco_04_01','choco_04_02','choco_04_03','drizzle_2023_area','drizzle_2023_clam','drizzle_2023_hoko','drizzle_2023_yagu','fresh_2023_area','fresh_2023_clam','fresh_2023_hoko','fresh_2023_yagu','friend_10_01','friend_10_02','friend_10_03','holiday_12_01','holiday_12_02','holiday_12_03','ice_07_01','ice_07_02','ice_07_03','life_08_01','life_08_02','life_08_03','mujin_01_01','mujin_01_02','mujin_01_03','name_11_01','name_11_02','name_11_03','partner_02_01','partner_02_02','partner_02_03','reader_09_01','reader_09_02','reader_09_03','sizzle_2023_area','sizzle_2023_clam','sizzle_2023_hoko','sizzle_2023_yagu','taste_03_01','taste_03_02','taste_03_03','uma_05_01','uma_05_02','uma_05_03','zelda_06_01','zelda_06_02','zelda_06_03'




);

// テーブルごとにクエリを生成して実行
foreach ($tables as $table) {
    // クエリを生成
    $sql = "ALTER TABLE $table
            MODIFY COLUMN id VARCHAR(255)";

    // クエリを実行
    if ($conn->query($sql) === TRUE) {
        echo "テーブル $table のカラム名を変更しました。<br>";
    } else {
        echo "エラー: " . $conn->error;
    }
}

$conn->close();
?>