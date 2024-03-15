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
    $sql = "SELECT *, ROW_NUMBER() OVER () AS 順位 FROM ( SELECT 名前,id,武器,パワー,'道具派' AS 陣営 FROM mujin_01_01
    UNION ALL SELECT 名前,id,武器,パワー,'食料派' AS 陣営 FROM mujin_01_02
    UNION ALL SELECT 名前,id,武器,パワー,'ヒマつぶし派' AS 陣営 FROM mujin_01_03
    UNION ALL SELECT 名前,id,武器,パワー,'くさ派' AS 陣営 FROM partner_02_01
    UNION ALL SELECT 名前,id,武器,パワー,'ほのお派' AS 陣営 FROM partner_02_02 
    UNION ALL SELECT 名前,id,武器,パワー,'みず派' AS 陣営 FROM partner_02_03
    UNION ALL SELECT 名前,id,武器,パワー,'辛い派' AS 陣営 FROM taste_03_01
    UNION ALL SELECT 名前,id,武器,パワー,'甘い派' AS 陣営 FROM taste_03_02 
    UNION ALL SELECT 名前,id,武器,パワー,'すっぱい派' AS 陣営 FROM taste_03_03
    UNION ALL SELECT 名前,id,武器,パワー,'ビター派' AS 陣営 FROM choco_04_01
    UNION ALL SELECT 名前,id,武器,パワー,'ミルク派' AS 陣営 FROM choco_04_02
    UNION ALL SELECT 名前,id,武器,パワー,'ホワイト派' AS 陣営 FROM choco_04_03
    UNION ALL SELECT 名前,id,武器,パワー,'ネッシー派' AS 陣営 FROM uma_05_01
    UNION ALL SELECT 名前,id,武器,パワー,'宇宙人派' AS 陣営 FROM uma_05_02
    UNION ALL SELECT 名前,id,武器,パワー,'雪男派' AS 陣営 FROM uma_05_03
    UNION ALL SELECT 名前,id,武器,パワー,'力派' AS 陣営 FROM zelda_06_01
    UNION ALL SELECT 名前,id,武器,パワー,'知恵派' AS 陣営 FROM zelda_06_02
    UNION ALL SELECT 名前,id,武器,パワー,'勇気派' AS 陣営 FROM zelda_06_03
    UNION ALL SELECT 名前,id,武器,パワー,'バニラ派' AS 陣営 FROM ice_07_01
    UNION ALL SELECT 名前,id,武器,パワー,'ストロベリー派' AS 陣営 FROM ice_07_02
    UNION ALL SELECT 名前,id,武器,パワー,'チョコミント派' AS 陣営 FROM ice_07_03
    UNION ALL SELECT 名前,id,武器,パワー,'富派' AS 陣営 FROM life_08_01
    UNION ALL SELECT 名前,id,武器,パワー,'名声派' AS 陣営 FROM life_08_02
    UNION ALL SELECT 名前,id,武器,パワー,'愛派' AS 陣営 FROM life_08_03
    UNION ALL SELECT 名前,id,武器,パワー,'フウカ派' AS 陣営 FROM reader_09_01
    UNION ALL SELECT 名前,id,武器,パワー,'ウツホ派' AS 陣営 FROM reader_09_02
    UNION ALL SELECT 名前,id,武器,パワー,'マンタロー派' AS 陣営 FROM reader_09_03
    UNION ALL SELECT 名前,id,武器,パワー,'ゾンビ派' AS 陣営 FROM friend_10_01
    UNION ALL SELECT 名前,id,武器,パワー,'ガイコツ派' AS 陣営 FROM friend_10_02
    UNION ALL SELECT 名前,id,武器,パワー,'ゴースト派' AS 陣営 FROM friend_10_03
    UNION ALL SELECT 名前,id,武器,パワー,'回転焼き派' AS 陣営 FROM name_11_01
    UNION ALL SELECT 名前,id,武器,パワー,'大判焼き派' AS 陣営 FROM name_11_02
    UNION ALL SELECT 名前,id,武器,パワー,'今川焼き派' AS 陣営 FROM name_11_03
    UNION ALL SELECT 名前,id,武器,パワー,'仲間とわいわい派' AS 陣営 FROM holiday_12_01
    UNION ALL SELECT 名前,id,武器,パワー,'家族でほっこり派' AS 陣営 FROM holiday_12_02
    UNION ALL SELECT 名前,id,武器,パワー,'ひとりでのんびり派' AS 陣営 FROM holiday_12_03
    ORDER BY パワー DESC ) AS aaa";
} else {
    $sql = "SELECT *, ROW_NUMBER() OVER () AS 順位 FROM ( SELECT * FROM ( SELECT 名前,id,武器,パワー,'道具派' AS 陣営 FROM mujin_01_01
    UNION ALL SELECT 名前,id,武器,パワー,'食料派' AS 陣営 FROM mujin_01_02
    UNION ALL SELECT 名前,id,武器,パワー,'ヒマつぶし派' AS 陣営 FROM mujin_01_03
    UNION ALL SELECT 名前,id,武器,パワー,'くさ派' AS 陣営 FROM partner_02_01
    UNION ALL SELECT 名前,id,武器,パワー,'ほのお派' AS 陣営 FROM partner_02_02 
    UNION ALL SELECT 名前,id,武器,パワー,'みず派' AS 陣営 FROM partner_02_03
    UNION ALL SELECT 名前,id,武器,パワー,'辛い派' AS 陣営 FROM taste_03_01
    UNION ALL SELECT 名前,id,武器,パワー,'甘い派' AS 陣営 FROM taste_03_02 
    UNION ALL SELECT 名前,id,武器,パワー,'すっぱい派' AS 陣営 FROM taste_03_03
    UNION ALL SELECT 名前,id,武器,パワー,'ビター派' AS 陣営 FROM choco_04_01
    UNION ALL SELECT 名前,id,武器,パワー,'ミルク派' AS 陣営 FROM choco_04_02
    UNION ALL SELECT 名前,id,武器,パワー,'ホワイト派' AS 陣営 FROM choco_04_03
    UNION ALL SELECT 名前,id,武器,パワー,'ネッシー派' AS 陣営 FROM uma_05_01
    UNION ALL SELECT 名前,id,武器,パワー,'宇宙人派' AS 陣営 FROM uma_05_02
    UNION ALL SELECT 名前,id,武器,パワー,'雪男派' AS 陣営 FROM uma_05_03
    UNION ALL SELECT 名前,id,武器,パワー,'力派' AS 陣営 FROM zelda_06_01
    UNION ALL SELECT 名前,id,武器,パワー,'知恵派' AS 陣営 FROM zelda_06_02
    UNION ALL SELECT 名前,id,武器,パワー,'勇気派' AS 陣営 FROM zelda_06_03
    UNION ALL SELECT 名前,id,武器,パワー,'バニラ派' AS 陣営 FROM ice_07_01
    UNION ALL SELECT 名前,id,武器,パワー,'ストロベリー派' AS 陣営 FROM ice_07_02
    UNION ALL SELECT 名前,id,武器,パワー,'チョコミント派' AS 陣営 FROM ice_07_03
    UNION ALL SELECT 名前,id,武器,パワー,'富派' AS 陣営 FROM life_08_01
    UNION ALL SELECT 名前,id,武器,パワー,'名声派' AS 陣営 FROM life_08_02
    UNION ALL SELECT 名前,id,武器,パワー,'愛派' AS 陣営 FROM life_08_03
    UNION ALL SELECT 名前,id,武器,パワー,'フウカ派' AS 陣営 FROM reader_09_01
    UNION ALL SELECT 名前,id,武器,パワー,'ウツホ派' AS 陣営 FROM reader_09_02
    UNION ALL SELECT 名前,id,武器,パワー,'マンタロー派' AS 陣営 FROM reader_09_03
    UNION ALL SELECT 名前,id,武器,パワー,'ゾンビ派' AS 陣営 FROM friend_10_01
    UNION ALL SELECT 名前,id,武器,パワー,'ガイコツ派' AS 陣営 FROM friend_10_02
    UNION ALL SELECT 名前,id,武器,パワー,'ゴースト派' AS 陣営 FROM friend_10_03
    UNION ALL SELECT 名前,id,武器,パワー,'回転焼き派' AS 陣営 FROM name_11_01
    UNION ALL SELECT 名前,id,武器,パワー,'大判焼き派' AS 陣営 FROM name_11_02
    UNION ALL SELECT 名前,id,武器,パワー,'今川焼き派' AS 陣営 FROM name_11_03
    UNION ALL SELECT 名前,id,武器,パワー,'仲間とわいわい派' AS 陣営 FROM holiday_12_01
    UNION ALL SELECT 名前,id,武器,パワー,'家族でほっこり派' AS 陣営 FROM holiday_12_02
    UNION ALL SELECT 名前,id,武器,パワー,'ひとりでのんびり派' AS 陣営 FROM holiday_12_03 ) AS aaa 
    ORDER BY パワー DESC ) as aaa WHERE 武器 = '" . $tableName . "'";
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