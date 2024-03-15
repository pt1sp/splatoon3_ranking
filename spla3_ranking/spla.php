<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-Control" content="no-store">
    <title>splatoon3 ranking</title>
    <link rel="stylesheet" href="spla3_ranking/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&family=Open+Sans&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
    <header>
        <h1>スプラトゥーン３ ランキング</h1>
    </header>
    <div id="page1">
        <button onclick="display_xmatch()" id="xmatch">Xマッチ</button>
        <button onclick="display_fes()" id="fes">フェス</button>

        <div id="x_select" style="display: none;">
            <h3>シーズン</h3>
            <select id="seasonDropdown">
                <option disabled selected>シーズンを選択</option>
                <option value="chill_2022_">chill season 2022</option>
                <option value="fresh_2023_">fresh season 2023</option>
                <option value="sizzle_2023_">sizzle season 2023</option>
                <option value="drizzle_2023_">drizzle season 2023</option>
                <option value="all-season_">全シーズン</option>
            </select>

            <h3>ルール</h3>
            <select id="ruleDropdown">
                <option disabled selected>ルールを選択</option>
                <option value="area">エリア</option>
                <option value="yagu">ヤグラ</option>
                <option value="hoko">ホコ</option>
                <option value="clam">アサリ</option>
                <option value="all-rule">全ルール</option>
            </select>
            <h3>武器</h3>
            <select id="weaponDropdown">
                <option value="all">指定しない</option>
                <option value="ボールドマーカー">ボールドマーカー</option>
                <option value="ボールドマーカーネオ">ボールマーカーネオ</option>
                <option value="わかばシューター">わかばシューター</option>
                <option value="もみじシューター">もみじシューター</option>
                <option value="シャープマーカー">シャープマーカー</option>
                <option value="シャープマーカーネオ">シャープマーカーネオ</option>
                <option value="プロモデラーMG">プロモデラーMG</option>
                <option value="プロモデラーRG">プロモデラーRG</option>
                <option value="スプラシューター">スプラシューター</option>
                <option value="スプラシューターコラボ">スプラシューターコラボ</option>
                <option value="ヒーローシューターレプリカ">ヒーローシューターレプリカ</option>
                <option value="52ガロン">５２ガロン</option>
                <option value="N-ZAP85">N-ZAP85</option>
                <option value="N-ZAP89">N-ZAP89</option>
                <option value="プライムシューター">プライムシューター</option>
                <option value="プライムシューターコラボ">プライムシューターコラボ</option>
                <option value="96ガロン">９６ガロン</option>
                <option value="96ガロンデコ">９６ガロンデコ</option>
                <option value="ジェットスイーパー">ジェットスイーパー</option>
                <option value="ジェットスイーパーカスタム">ジェットスイーパーカスタム</option>
                <option value="スペースシューター">スペースシューター</option>
                <option value="スペースシューターコラボ">スペースシューターコラボ</option>
                <option value="L3リールガン">L3リールガン</option>
                <option value="L3リールガンD">L3リールガンD</option>
                <option value="H3リールガン">H3リールガン</option>
                <option value="H3リールガンD">H3リールガンD</option>
                <option value="ボトルガイザー">ボトルガイザー</option>
                <option value="ボトルガイザーフォイル">ボトルガイザーフォイル</option>
                <option value="カーボンローラー">カーボンローラー</option>
                <option value="カーボンローラーデコ">カーボンローラーデコ</option>
                <option value="スプラローラー">スプラローラー</option>
                <option value="スプラローラーコラボ">スプラローラーコラボ</option>
                <option value="ダイナモローラー">ダイナモローラー</option>
                <option value="ダイナモローラーテスラ">ダイナモローラーテスラ</option>
                <option value="ヴァリアブルローラー">ヴァリアブルローラー</option>
                <option value="ワイドローラー">ワイドローラー</option>
                <option value="ワイドローラーコラボ">ワイドローラーコラボ</option>
                <option value="スクイックリンα">スクイックリンα</option>
                <option value="スプラチャージャー">スプラチャージャー</option>
                <option value="スプラチャージャーコラボ">スプラチャージャーコラボ</option>
                <option value="スプラスコープ">スプラスコープ</option>
                <option value="スプラスコープコラボ">スプラスコープコラボ</option>
                <option value="リッター4K">リッター4K</option>
                <option value="4Kスコープ">4Kスコープ</option>
                <option value="14式竹筒銃・甲">１４式竹筒銃・甲</option>
                <option value="ソイチューバー">ソイチューバー</option>
                <option value="ソイチューバーカスタム">ソイチューバーカスタム</option>
                <option value="R-PEN/5H">R-PEN/5H</option>
                <option value="R-PEN/5B">R-PEN/5B</option>
                <option value="バケットスロッシャー">バケットスロッシャー</option>
                <option value="バケットスロッシャーデコ">バケットスロッシャーデコ</option>
                <option value="ヒッセン">ヒッセン</option>
                <option value="ヒッセン・ヒュー">ヒッセン・ヒュー</option>
                <option value="スクリュースロッシャー">スクリュースロッシャー</option>
                <option value="スクリュースロッシャーネオ">スクリュースロッシャーネオ</option>
                <option value="オーバーフロッシャー">オーバーフロッシャー</option>
                <option value="オーバーフロッシャーデコ">オーバーフロッシャーデコ</option>
                <option value="エクスプロッシャー">エクスプロッシャー</option>
                <option value="モップリン">モップリン</option>
                <option value="スプラスピナー">スプラスピナー</option>
                <option value="スプラスピナーコラボ">スプラスピナーコラボ</option>
                <option value="バレルスピナー">バレルスピナー</option>
                <option value="バレルスピナーデコ">バレルスピナーデコ</option>
                <option value="ハイドラント">ハイドラント</option>
                <option value="クーゲルシュライバー">クーゲルシュライバー</option>
                <option value="クーゲルシュライバー・ヒュー">クーゲルシュライバー・ヒュー</option>
                <option value="ノーチラス47">ノーチラス４７</option>
                <option value="イグザミナー">イグザミナー</option>
                <option value="スパッタリー">スパッタリー</option>
                <option value="スパッタリー・ヒュー">スパッタリー・ヒュー</option>
                <option value="スプラマニューバー">スプラマニューバー</option>
                <option value="スプラマニューバーコラボ">スプラマニューバーコラボ</option>
                <option value="ケルビン525">ケルビン５２５</option>
                <option value="デュアルスイーパー">デュアルスイーパー</option>
                <option value="デュアルスイーパーカスタム">デュアルスイーパーカスタム</option>
                <option value="クアッドホッパーブラック">クアッドホッパーブラック</option>
                <option value="クアッドホッパーホワイト">クアッドホッパーホワイト</option>
                <option value="パラシェルター">パラシェルター</option>
                <option value="パラシェルターソレーラ">パラシェルターソレーラ</option>
                <option value="キャンピングシェルター">キャンピングシェルター</option>
                <option value="キャンピングシェルターソレーラ">キャンピングシェルターソレーラ</option>
                <option value="スパイガジェット">スパイガジェット</option>
                <option value="スパイガジェットソレーラ">スパイガジェットソレーラ</option>
                <option value="ノヴァブラスター">ノヴァブラスター</option>
                <option value="ノヴァブラスターネオ">ノヴァブラスターネオ</option>
                <option value="ホットブラスター">ホットブラスター</option>
                <option value="ホットブラスターカスタム">ホットブラスターカスタム</option>
                <option value="ロングブラスター">ロングブラスター</option>
                <option value="クラッシュブラスター">クラッシュブラスター</option>
                <option value="クラッシュブラスターネオ">クラッシュブラスターネオ</option>
                <option value="ラピッドブラスター">ラピッドブラスター</option>
                <option value="ラピッドブラスターデコ">ラピッドブラスターデコ</option>
                <option value="Rブラスターエリート">Rブラスターエリート</option>
                <option value="Rブラスターエリートデコ">Rブラスターエリートデコ</option>
                <option value="S-BLAST92">S-BLAST92</option>
                <option value="S-BLAST91">S-BLAST91</option>
                <option value="パブロ">パブロ</option>
                <option value="パブロ・ヒュー">パブロ・ヒュー</option>
                <option value="ホクサイ">ホクサイ</option>
                <option value="ホクサイ・ヒュー">ホクサイ・ヒュー</option>
                <option value="フィンセント">フィンセント</option>
                <option value="フィンセント・ヒュー">フィンセント・ヒュー</option>
                <option value="トライストリンガー">トライストリンガー</option>
                <option value="トライストリンガーコラボ">トライストリンガーコラボ</option>
                <option value="LACT-450">LACT-450</option>
                <option value="LACT-450デコ">LACT-450デコ</option>
                <option value="ジムワイパー">ジムワイパー</option>
                <option value="ジムワイパー・ヒュー">ジムワイパー・ヒュー</option>
                <option value="ドライブワイパー">ドライブワイパー</option>
                <option value="ドライブワイパーデコ">ドライブワイパーデコ</option>
            </select>
            <br><button onclick="x_search()" id="x_decision">決定</button>

        </div>

        <div id="fes_select" style="display: none;">
            <h3>お題</h3>
            <select id="fesDropdown">
                <option disabled selected>フェスを選択</option>
                <option value="mujin_01_">第１回：無人島に持っていくなら？</option>
                <option value="partner_02_">第２回：パートナーに選ぶならどのタイプ？</option>
                <option value="taste_03_">第３回：好みの味は？</option>
                <option value="choco_04_">第４回：チョコレートはやっぱりコレ！</option>
                <option value="uma_05_">第５回：実在するのは？</option>
                <option value="zelda_06_">第６回：汝、何を求める？</option>
                <option value="ice_07_">第７回：アイスといえば？</option>
                <option value="life_08_">第８回：人生で大事なものは？</option>
                <option value="reader_09_">第９回：リーダーにふさわしいのは？</option>
                <option value="friend_10_">第１０回：友だちにするなら？</option>
                <option value="name_11_">第１１回：コレなんて呼ぶ？</option>
                <option value="holiday_12_">第１２回：休みの日は？</option>
                <option value="all-fes">すべて</option>
            </select>
            <h3>派</h3>
            <select id="campDropdown">
            </select>
            <h3>武器</h3>
            <select id="weaponDropdown2">
                <option value="all">指定しない</option>
                <option value="ボールドマーカ―">ボールドマーカ―</option>
                <option value="ボールドマーカーネオ">ボールマーカーネオ</option>
                <option value="わかばシューター">わかばシューター</option>
                <option value="もみじシューター">もみじシューター</option>
                <option value="シャープマーカー">シャープマーカー</option>
                <option value="シャープマーカーネオ">シャープマーカーネオ</option>
                <option value="プロモデラーMG">プロモデラーMG</option>
                <option value="プロモデラーRG">プロモデラーRG</option>
                <option value="スプラシューター">スプラシューター</option>
                <option value="スプラシューターコラボ">スプラシューターコラボ</option>
                <option value="ヒーローシューターレプリカ">ヒーローシューターレプリカ</option>
                <option value="52ガロン">５２ガロン</option>
                <option value="N-ZAP85">N-ZAP85</option>
                <option value="N-ZAP89">N-ZAP89</option>
                <option value="プライムシューター">プライムシューター</option>
                <option value="プライムシューターコラボ">プライムシューターコラボ</option>
                <option value="96ガロン">９６ガロン</option>
                <option value="96ガロンデコ">９６ガロンデコ</option>
                <option value="ジェットスイーパー">ジェットスイーパー</option>
                <option value="ジェットスイーパーカスタム">ジェットスイーパーカスタム</option>
                <option value="スペースシューター">スペースシューター</option>
                <option value="スペースシューターコラボ">スペースシューターコラボ</option>
                <option value="L3リールガン">L3リールガン</option>
                <option value="L3リールガンD">L3リールガンD</option>
                <option value="H3リールガン">H3リールガン</option>
                <option value="H3リールガンD">H3リールガンD</option>
                <option value="ボトルガイザー">ボトルガイザー</option>
                <option value="ボトルガイザーフォイル">ボトルガイザーフォイル</option>
                <option value="カーボンローラー">カーボンローラー</option>
                <option value="カーボンローラーデコ">カーボンローラーデコ</option>
                <option value="スプラローラー">スプラローラー</option>
                <option value="スプラローラーコラボ">スプラローラーコラボ</option>
                <option value="ダイナモローラー">ダイナモローラー</option>
                <option value="ダイナモローラーテスラ">ダイナモローラーテスラ</option>
                <option value="ヴァリアブルローラー">ヴァリアブルローラー</option>
                <option value="ワイドローラー">ワイドローラー</option>
                <option value="ワイドローラーコラボ">ワイドローラーコラボ</option>
                <option value="スクイックリンα">スクイックリンα</option>
                <option value="スプラチャージャー">スプラチャージャー</option>
                <option value="スプラチャージャーコラボ">スプラチャージャーコラボ</option>
                <option value="スプラスコープ">スプラスコープ</option>
                <option value="スプラスコープコラボ">スプラスコープコラボ</option>
                <option value="リッター4K">リッター4K</option>
                <option value="4Kスコープ">4Kスコープ</option>
                <option value="14式竹筒銃・甲">１４式竹筒銃・甲</option>
                <option value="ソイチューバー">ソイチューバー</option>
                <option value="ソイチューバーカスタム">ソイチューバーカスタム</option>
                <option value="R-PEN/5H">R-PEN/5H</option>
                <option value="R-PEN/5B">R-PEN/5B</option>
                <option value="バケットスロッシャー">バケットスロッシャー</option>
                <option value="バケットスロッシャーデコ">バケットスロッシャーデコ</option>
                <option value="ヒッセン">ヒッセン</option>
                <option value="ヒッセン・ヒュー">ヒッセン・ヒュー</option>
                <option value="スクリュースロッシャー">スクリュースロッシャー</option>
                <option value="スクリュースロッシャーネオ">スクリュースロッシャーネオ</option>
                <option value="オーバーフロッシャー">オーバーフロッシャー</option>
                <option value="オーバーフロッシャーデコ">オーバーフロッシャーデコ</option>
                <option value="エクスプロッシャー">エクスプロッシャー</option>
                <option value="モップリン">モップリン</option>
                <option value="スプラスピナー">スプラスピナー</option>
                <option value="スプラスピナーコラボ">スプラスピナーコラボ</option>
                <option value="バレルスピナー">バレルスピナー</option>
                <option value="バレルスピナーデコ">バレルスピナーデコ</option>
                <option value="ハイドラント">ハイドラント</option>
                <option value="クーゲルシュライバー">クーゲルシュライバー</option>
                <option value="クーゲルシュライバー・ヒュー">クーゲルシュライバー・ヒュー</option>
                <option value="ノーチラス47">ノーチラス４７</option>
                <option value="イグザミナー">イグザミナー</option>
                <option value="スパッタリー">スパッタリー</option>
                <option value="スパッタリー・ヒュー">スパッタリー・ヒュー</option>
                <option value="スプラマニューバー">スプラマニューバー</option>
                <option value="スプラマニューバーコラボ">スプラマニューバーコラボ</option>
                <option value="ケルビン525">ケルビン５２５</option>
                <option value="デュアルスイーパー">デュアルスイーパー</option>
                <option value="デュアルスイーパーカスタム">デュアルスイーパーカスタム</option>
                <option value="クアッドホッパーブラック">クアッドホッパーブラック</option>
                <option value="クアッドホッパーホワイト">クアッドホッパーホワイト</option>
                <option value="パラシェルター">パラシェルター</option>
                <option value="パラシェルターソレーラ">パラシェルターソレーラ</option>
                <option value="キャンピングシェルター">キャンピングシェルター</option>
                <option value="キャンピングシェルターソレーラ">キャンピングシェルターソレーラ</option>
                <option value="スパイガジェット">スパイガジェット</option>
                <option value="スパイガジェットソレーラ">スパイガジェットソレーラ</option>
                <option value="ノヴァブラスター">ノヴァブラスター</option>
                <option value="ノヴァブラスターネオ">ノヴァブラスターネオ</option>
                <option value="ホットブラスター">ホットブラスター</option>
                <option value="ホットブラスターカスタム">ホットブラスターカスタム</option>
                <option value="ロングブラスター">ロングブラスター</option>
                <option value="クラッシュブラスター">クラッシュブラスター</option>
                <option value="クラッシュブラスターネオ">クラッシュブラスターネオ</option>
                <option value="ラピッドブラスター">ラピッドブラスター</option>
                <option value="ラピッドブラスターデコ">ラピッドブラスターデコ</option>
                <option value="Rブラスターエリート">Rブラスターエリート</option>
                <option value="Rブラスターエリートデコ">Rブラスターエリートデコ</option>
                <option value="S-BLAST92">S-BLAST92</option>
                <option value="S-BLAST91">S-BLAST91</option>
                <option value="パブロ">パブロ</option>
                <option value="パブロ・ヒュー">パブロ・ヒュー</option>
                <option value="ホクサイ">ホクサイ</option>
                <option value="ホクサイ・ヒュー">ホクサイ・ヒュー</option>
                <option value="フィンセント">フィンセント</option>
                <option value="フィンセント・ヒュー">フィンセント・ヒュー</option>
                <option value="トライストリンガー">トライストリンガー</option>
                <option value="トライストリンガーコラボ">トライストリンガーコラボ</option>
                <option value="LACT-450">LACT-450</option>
                <option value="LACT-450デコ">LACT-450デコ</option>
                <option value="ジムワイパー">ジムワイパー</option>
                <option value="ジムワイパー・ヒュー">ジムワイパー・ヒュー</option>
                <option value="ドライブワイパー">ドライブワイパー</option>
                <option value="ドライブワイパーデコ">ドライブワイパーデコ</option>
            </select>
            <br><button onclick="search_fes()" id="fes_decision">決定</button>
        </div>
    </div>

    <div id="result">条件を指定してください</div>
    <div id="page2" style="display: none;">
    </div>
    <script>
        let flg = true;

        function display_xmatch() {
            if (flg) {
                // flag が true の場合の操作
                document.getElementById('x_select').style.display = 'block';
                document.getElementById('fes_select').style.display = 'none';

            } else {
                // flag が false の場合の操作
                document.getElementById('x_select').style.display = 'none';

            }
            // フラグをトグルする
            flg = !flg;
        }
        let flg_fes = true;

        function display_fes() {
            if (flg_fes) {
                document.getElementById('fes_select').style.display = 'block';
                document.getElementById('x_select').style.display = 'none';

            } else {
                document.getElementById('fes_select').style.display = 'none';
            }
            flg_fes = !flg_fes;
        }

        function x_search() {
            var season = document.getElementById('seasonDropdown').value;
            var rule = document.getElementById('ruleDropdown').value;
            var buki = document.getElementById('weaponDropdown').value;
            var preposition = 'branch/';
            var postposition = '.php';
            var address = season + rule;
            var apiUrl = preposition + address + postposition;
            console.log({
                apiUrl
            });
            fetch(apiUrl, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify(buki),
                })
                .then(response => response.json())
                .then(res => {
                    console.log({
                        res
                    });
                    if (res && res.length > 0) {
                        displayData(res);
                    } else {
                        document.getElementById('result').innerText = 'この条件ではデータがありません';
                    }
                })
                .catch(error => {
                    console.log({
                        error
                    });
                });
        }

        function search_fes() {
            var value_fes = document.getElementById('fesDropdown').value;
            // 陣営のvalue要素はcamp
            var value_weapon_fes = document.getElementById('weaponDropdown2').value;
            var preposition = 'branch/';
            var postposition = '.php';
            var address_fes = value_fes + value_camp;
            var apiUrl2 = preposition + address_fes + postposition;
            console.log({
                apiUrl2
            });
            if (value_fes === 'all-fes') {
                fetch('branch/all-fes.php', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json'
                        },
                        body: JSON.stringify(value_weapon_fes),
                    })
                    .then(response => response.json())
                    .then(res => {
                        console.log({
                            res
                        });
                        if (res && res.length > 0) {
                            displayData(res);
                        } else {
                            document.getElementById('result').innerText = 'この条件ではデータがありません';
                        }
                    })
                    .catch(error => {
                        console.log({
                            error
                        });
                    });
            } else {
                fetch(apiUrl2, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json'
                        },
                        body: JSON.stringify(value_weapon_fes),
                    })
                    .then(response => response.json())
                    .then(res => {
                        console.log({
                            res
                        });
                        if (res && res.length > 0) {
                            displayData(res);
                        } else {
                            document.getElementById('result').innerText = 'この条件ではデータがありません';
                        }
                    })
                    .catch(error => {
                        console.log({
                            error
                        });
                    });
            }
        }

        campDropdown.innerHTML = '';

        function addOptionsToFactionDropdown(options) {
            campDropdown.innerHTML = ''; // factionDropdownをクリア
            options.forEach(function(value) {
                var option = document.createElement('option');
                option.textContent = value;
                option.value = value;
                if (value === '陣営を選択') {
                    option.disabled = true;
                    option.selected = true;
                }
                campDropdown.appendChild(option);
            });
        }

        document.getElementById('fesDropdown').addEventListener('change', function() {
            var fesDropdownValue = this.value;
            switch (fesDropdownValue) {
                case 'mujin_01_':
                    addOptionsToFactionDropdown(['陣営を選択', '道具派', '食料派', 'ヒマつぶし派', 'すべて']);
                    break;
                case 'partner_02_':
                    addOptionsToFactionDropdown(['陣営を選択', 'くさ派', 'ほのお派', 'みず派', 'すべて']);
                    break;
                case 'taste_03_':
                    addOptionsToFactionDropdown(['陣営を選択', '辛い派', '甘い派', 'すっぱい派', 'すべて']);
                    break;
                case 'choco_04_':
                    addOptionsToFactionDropdown(['陣営を選択', 'ビター派', 'ミルク派', 'ホワイト派', 'すべて']);
                    break;
                case 'uma_05_':
                    addOptionsToFactionDropdown(['陣営を選択', 'ネッシー派', '宇宙人派', '雪男派', 'すべて']);
                    break;
                case 'zelda_06_':
                    addOptionsToFactionDropdown(['陣営を選択', '力派', '知恵派', '勇者派', 'すべて']);
                    break;
                case 'ice_07_':
                    addOptionsToFactionDropdown(['陣営を選択', 'バニラ派', 'ストロベリー派', 'チョコミント派', 'すべて']);
                    break;
                case 'life_08_':
                    addOptionsToFactionDropdown(['陣営を選択', '富派', '名声派', '愛派', 'すべて']);
                    break;
                case 'reader_09_':
                    addOptionsToFactionDropdown(['陣営を選択', 'フウカ派', 'ウツホ派', 'マンタロー派', 'すべて']);
                    break;
                case 'friend_10_':
                    addOptionsToFactionDropdown(['陣営を選択', 'ゾンビ派', 'ガイコツ派', 'ゴースト派', 'すべて']);
                    break;
                case 'name_11_':
                    addOptionsToFactionDropdown(['陣営を選択', '回転焼き派', '大判焼き派', '今川焼き派', 'すべて']);
                    break;
                case 'holiday_12_':
                    addOptionsToFactionDropdown(['陣営を選択', '仲間とわいわい派', '家族でほっこり派', 'ひとりでのんびり派', 'すべて']);
                    break;
                case 'all-fes':
                    addOptionsToFactionDropdown(['']);
            }
        });
        var value_camp
        document.getElementById('campDropdown').addEventListener('change', function() {
            value_camp = this.value;
            console.log(value_camp);
        })

        function displayData(data) {
            let table = document.createElement('table');
            let headerRow = table.insertRow();
            let keys = Object.keys(data[0]);
            let lastKey = keys.pop();
            keys.forEach(key => {
                let headerCell = document.createElement('th');
                headerCell.textContent = key;
                headerRow.appendChild(headerCell);
            });
            let lastHeaderCell = document.createElement('th');
            lastHeaderCell.textContent = lastKey;
            headerRow.insertBefore(lastHeaderCell, headerRow.firstChild);
            data.forEach(item => {
                let row = table.insertRow();
                let values = Object.values(item);
                let lastValue = values.pop();
                values.forEach(value => {
                    let cell = row.insertCell();
                    cell.textContent = value;
                });
                let lastCell = row.insertCell();
                lastCell.textContent = lastValue;
                row.insertBefore(lastCell, row.firstChild);
            });
            document.getElementById('result').innerHTML = '';
            document.getElementById('result').appendChild(table);
        }
    </script>
    </script>
</body>

</html>