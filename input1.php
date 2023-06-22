<html>

<head>
    <meta charset="utf-8">
    <title>修理受付フォーム</title>
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>


    <style>
        /* 全体 */
        body {
            margin: 0;
            padding: 0;
            text-align: left;
            font-family: "ヒラギノ明朝 ProN", "Hiragino Mincho Pro";
            }
        /* ヘッダー */
        header {
            background-color: #3aacad;
            letter-spacing: 10px;
            color: white;
            border-bottom: 1px solid #ccc;
            text-align: center;
            letter-spacing: 8px;
            text-align: center;
            width: 650px;
            margin: auto;
        }
        .title {
            padding-top: 20px;
            font-size: 25px;
        }
        /* メインフォーム　全体　*/
        #main {
            display: flex;
            flex-direction: column;
            align-items: center;
            position: relative;
            padding-top: 30px;
        }
        #mainTable,
        #subTable {
            padding-bottom: 0;
            border-bottom: 1px solid #ccc;
        }
        h3 {
            letter-spacing: 5px;
            border-bottom:2px solid black;
            margin-right:410px;
            }
        td {
            border-top: 1px solid #bfbfbf;
            border-left: 1px solid #bfbfbf;
        }
        /* メインフォーム　左側　*/
            .yourname,
            .company,
            .tell,
            .address,
            .hosp,
            .item,
            .sn{
            padding-top: 20px;
            padding-bottom: 20px;
            padding-left: 30px;
            border-top: 1px solid #bfbfbf;
            border-left: none;
            border-right: none;
            font-size: 16px;
            width: 240px;
            }
            .reson {
            text-align: left;
            vertical-align: top;
            padding-left: 30px;
            padding-top: 30px;
            padding-bottom: auto;
            border-top: 1px solid #bfbfbf;
            border-left: none;
            border-right: none;
            font-size: 16px;
            }
        /* メインフォーム　右側　*/
            #textBoxName,
            #textBoxTell,
            #textBoxCompany,
            #textBoxAddress,
            #textBoxhosp,
            #textBoxitem,
            #textBoxsn {
            justify-content: center;
            font-size: 16px;
            height: 25px;
            width: 280px;
            margin-top: 10px;
            margin-left: 10px;
            }
            #message {
            justify-content: center;
            height: 150px;
            width: 280px;
            border-left: 1px solid #bfbfbf;
            }
            /* 内容入力ボックス　*/
            #textarea {
            font-size: 16px;
            box-shadow: 1px 1px 1px 1px #555;
            height:100px;
            margin-left: 10px;
            width: 280px;
            }
            /* 登録、クリアボタン　*/
            #button {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 10px;
            }
            #save,
            #remove {
            border: 1px solid #666;
            background-color: #fff;
            display: flex;
            margin:20px;
            width:120px;
            justify-content: center;
            }
            #save:hover {
            background: #ffe556;
            }
            #remove:hover {
            background: #ffe556;
            }
    </style>
</head>

<body>

    <header>
      <h2 class="title">修理受付フォーム</h2>
    </header>

    <form id="main" action="write1.php" method="post">
        
        <!-- 出身: <input type="text" name="birthPlace"> -->
        <table id="mainTable">
        <h3>1.ご依頼者</h3>
            <tr>
              <td class="yourname">担当者</td>
              <td><input id="textBoxName" type="text" name="name"/></td>
            </tr>

            <tr>
              <td class="company">代理店名</td>
              <td><input id="textBoxCompany" type="text" name="company"/></td>
            </tr>

            <tr>
              <td class="tell">電話番号</td>
              <td><input id="textBoxTell" type="text" name="tell"/></td>
            </tr>

            <tr>
              <td class="address">住所</td>
              <td><input id="textBoxAddress" type="text" name="address"/></td>
            </tr>
        </table><br>

        <table id="subTable">
        <h3>2.修理内容</h3>
            <tr>
              <td class="hosp">病院</td>
              <td><input id="textBoxhosp" type="text" name="hosp"/></td>
            </tr>
            <tr>
              <td class="item">製品名</td>
              <td><input id="textBoxitem" type="text" name="item"/></td>
            </tr>
            <tr>
              <td class="sn">シリアル</td>
              <td><input id="textBoxsn" type="text" name="sn"/></td>
            </tr>
            <tr>
              <td class="reson">修理内容</td>
              <td id="message">
                <textarea id="textarea" name="message"></textarea>
              </td>
            </tr>
            </table>

            <div id="button">
                    <input type="submit" value="送信" id="save">
                    <input id="remove" type="button" value="クリア">
                    </div>
    </form>

    <script>
        $(document).ready(function() {
            $('#remove').click(function() {
                $('#main')[0].reset();
            });
        });
    </script>


</body>

</html>