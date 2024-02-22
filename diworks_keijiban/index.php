<?php
mb_internal_encoding("utf8");
$pdo = new PDO("mysql:dbname=lesson01;host=localhost;", "root", "");
$stmt = $pdo->query("select * from diworks_keijiban");

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>diworksblog 掲示板</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

    <div class="logo"><img src="diblog_logo.jpg"></div>

    <header class="header">
        <div class="left-header">
            <ul>
                <li>トップ</li>
                <li>プロフィール</li>
                <li>D.I.Blog について</li>
                <li>登録フォーム</li>
                <li>問い合わせ</li>
                <li>その他</li>
            </ul>
        </div>
    </header>

    <main>
        <div class="left">
            <h1>プログラミングに役立つ掲示板</h1>
            <form method="post" action="insert.php">
                <h2 class="form1">入力フォーム</h2>
                <div>
                    <label>ハンドルネーム</label><br>
                    <input type="text" class="text" size="35" name="handlename">
                </div>

                <div>
                    <label>タイトル</label><br>
                    <input type="text" class="text" size="35" name="title">
                </div>

                <div>
                    <label>コメント</label><br>
                    <textarea cols="65" rows="7" name="comments" class="textarea"></textarea>
                </div>

                <div>
                    <input type="submit" class="submit" value="投稿する">
                </div>

            </form>

            <?php
            while ($row = $stmt->fetch()) {
                if (!empty($row['title']) && !empty($row['comments']) && !empty($row['handlename'])) {
                    echo '<div class="titles">';
                    echo '<h3>' . $row['title'] . '</h3>';
                    echo '<div class="naiyou">';
                    echo $row['comments'];
                    echo '<div class="by">posted by ' . $row['handlename'] . '</div>';
                    echo '</div>';
                    echo '</div>';
                }
            }
            ?>
        </div>

        <div class="right">
            <div class="a">
                <h3 class="b">人気の記事</h3>
                <h4 class="kiji">
                    <li>PHPオススメ本</li>
                    <li>PHP MyAdminの使い方</li>
                    <li>いま人気のエディタTops</li>
                    <li>HTMLの基礎</li>
                </h4>

                <h3 class="b">オススメリンク</h3>
                <h4 class="link">
                    <li>ディーアイワークス株式会社</li>
                    <li>XAMPPのダウンロード</li>
                    <li>Eclipseのダウンロード</li>
                    <li>Braketsのダウンロード</li>
                </h4>

                <h3 class="b">カテゴリー</h3>
                <h4 class="kateg">
                    <li>HTML</li>
                    <li>PHP</li>
                    <li>MySQL</li>
                    <li>JavaScript</li>
                </h4>

            </div>
        </div>
    </main>

    <footer>
        Copyright D.I.workslD.I.blog is the one which provides A to Z about programming
    </footer>

</body>

</html>
