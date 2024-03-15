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

if ($tableName == "all") {
    $sql = "SELECT *, ROW_NUMBER() OVER () AS 順位 FROM ( SELECT * FROM ( 
        SELECT 名前,id,武器,パワー,'chill_2022_エリア' AS 分類 FROM chill_2022_area
        UNION ALL SELECT 名前,id,武器,パワー,'chill_2022_ヤグラ' AS 分類 FROM chill_2022_yagu
        UNION ALL SELECT 名前,id,武器,パワー,'chill_2022_ホコ' AS 分類 FROM chill_2022_hoko
        UNION ALL SELECT 名前,id,武器,パワー,'chill_2022_アサリ' AS 分類 FROM chill_2022_clam
        UNION ALL SELECT 名前,id,武器,パワー,'fresh_2023_エリア' AS 分類 FROM fresh_2023_area
        UNION ALL SELECT 名前,id,武器,パワー,'fresh_2023_ヤグラ' AS 分類 FROM fresh_2023_yagu
        UNION ALL SELECT 名前,id,武器,パワー,'fresh_2023_ホコ' AS 分類 FROM fresh_2023_hoko
        UNION ALL SELECT 名前,id,武器,パワー,'fresh_2023_アサリ' AS 分類 FROM fresh_2023_clam
        UNION ALL SELECT 名前,id,武器,パワー,'sizzle_2023_エリア' AS 分類 FROM sizzle_2023_area
        UNION ALL SELECT 名前,id,武器,パワー,'sizzle_2023_ヤグラ' AS 分類 FROM sizzle_2023_yagu
        UNION ALL SELECT 名前,id,武器,パワー,'sizzle_2023_ホコ' AS 分類 FROM sizzle_2023_hoko
        UNION ALL SELECT 名前,id,武器,パワー,'sizzle_2023_アサリ' AS 分類 FROM sizzle_2023_clam
        UNION ALL SELECT 名前,id,武器,パワー,'drizzle_2023_エリア' AS 分類 FROM drizzle_2023_area
        UNION ALL SELECT 名前,id,武器,パワー,'drizzle_2023_ヤグラ' AS 分類 FROM drizzle_2023_yagu
        UNION ALL SELECT 名前,id,武器,パワー,'drizzle_2023_ホコ' AS 分類 FROM drizzle_2023_hoko
        UNION ALL SELECT 名前,id,武器,パワー,'drizzle_2023_アサリ' AS 分類 FROM drizzle_2023_clam
         ) AS all0 ORDER BY パワー DESC ) AS all2";
}else{
    $sql = "SELECT *, ROW_NUMBER() OVER () AS 順位 FROM ( SELECT * FROM ( 
        SELECT 名前,id,武器,パワー,'chill_2022_エリア' AS 分類 FROM chill_2022_area
        UNION ALL SELECT 名前,id,武器,パワー,'chill_2022_ヤグラ' AS 分類 FROM chill_2022_yagu
        UNION ALL SELECT 名前,id,武器,パワー,'chill_2022_ホコ' AS 分類 FROM chill_2022_hoko
        UNION ALL SELECT 名前,id,武器,パワー,'chill_2022_アサリ' AS 分類 FROM chill_2022_clam
        UNION ALL SELECT 名前,id,武器,パワー,'fresh_2023_エリア' AS 分類 FROM fresh_2023_area
        UNION ALL SELECT 名前,id,武器,パワー,'fresh_2023_ヤグラ' AS 分類 FROM fresh_2023_yagu
        UNION ALL SELECT 名前,id,武器,パワー,'fresh_2023_ホコ' AS 分類 FROM fresh_2023_hoko
        UNION ALL SELECT 名前,id,武器,パワー,'fresh_2023_アサリ' AS 分類 FROM fresh_2023_clam
        UNION ALL SELECT 名前,id,武器,パワー,'sizzle_2023_エリア' AS 分類 FROM sizzle_2023_area
        UNION ALL SELECT 名前,id,武器,パワー,'sizzle_2023_ヤグラ' AS 分類 FROM sizzle_2023_yagu
        UNION ALL SELECT 名前,id,武器,パワー,'sizzle_2023_ホコ' AS 分類 FROM sizzle_2023_hoko
        UNION ALL SELECT 名前,id,武器,パワー,'sizzle_2023_アサリ' AS 分類 FROM sizzle_2023_clam
        UNION ALL SELECT 名前,id,武器,パワー,'drizzle_2023_エリア' AS 分類 FROM drizzle_2023_area
        UNION ALL SELECT 名前,id,武器,パワー,'drizzle_2023_ヤグラ' AS 分類 FROM drizzle_2023_yagu
        UNION ALL SELECT 名前,id,武器,パワー,'drizzle_2023_ホコ' AS 分類 FROM drizzle_2023_hoko
        UNION ALL SELECT 名前,id,武器,パワー,'drizzle_2023_アサリ' AS 分類 FROM drizzle_2023_clam
         ) AS all0 ORDER BY パワー DESC ) AS all2 WHERE 武器 = '" . $tableName . "'";
}

$result = $conn->query($sql);
if ($result->num_rows == 0) {
    // 結果がない場合、エラーメッセージを含む配列を返す
    $response = array("error" => "No data found.");
    echo json_encode($response);
} else {
    $dateArray = array();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $dataArray[] = $row;
    }
    $response = $dataArray;
    echo json_encode($dataArray);
}
}
$conn->close();
?>