<?php
$name = $_POST['name'];
$tell = $_POST['tell'];
$address = $_POST['address'];
$company = $_POST['company'];

$hosp = $_POST['hosp'];
$item = $_POST['item'];
$sn = $_POST['sn'];
$message = $_POST['message'];

// データを整形する
$data = "「ご依頼者情報」\n";
$data .= "担当者: " . $name . "\n";
$data .= "電話番号: " . $tell . "\n";
$data .= "住所: " . $address . "\n";
$data .= "代理店名: " . $company . "\n\n";

$data .= "「修理内容」\n";
$data .= "From: " . $hosp . "\n";
$data .= "修理項目: " . $item . "\n";
$data .= "シリアル番号: " . $sn . "\n";
$data .= "内容: " . $message . "\n\n";

// データを保存する。
file_put_contents('data/data1.txt', $data, FILE_APPEND);
?>

<html>

<head>
    <meta charset="utf-8">
    <title>File書き込み</title>
    <style>

    body   {
            font-family: "ヒラギノ明朝 ProN", "Hiragino Mincho Pro";
        }
    #title {
            background-color: lightblue;
            letter-spacing: 8px;
            color: white;
            width: 600px;
            height: 210px;
            padding-top:30px;
            margin: 80px auto auto auto;
            display: flex;
            flex-direction: column;
            align-items: center;
            border-radius: 20px;
        }
    ul {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 30px;
            }
    li{
            border: 1px solid #666;
            background-color: #fff;
            display: flex;
            margin:25px;
            width:120px;
            justify-content: center;
            }
            li a {
            text-decoration: none;
        }
    li:hover {
            background: #ffe556;
            }
           

            </style>

</head>

<body>

<div id="title">
    <h1>修理受付を完了しました</h1>
    <ul>
        <li><a href="read1.php">確認</a></li>
        <li><a href="input1.php">戻る</a></li>
    </ul>
</div>
</body>

</html>