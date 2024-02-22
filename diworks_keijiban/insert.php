<?php
mb_internal_encoding("utf8");

// フォームの入力内容が空でないかをチェック
if (!empty($_POST['handlename']) && !empty($_POST['title']) && !empty($_POST['comments'])) {
    $pdo = new PDO("mysql:dbname=lesson01;host=localhost;", "root", "");
    // データベースに挿入
    $stmt = $pdo->prepare("INSERT INTO diworks_keijiban (handlename, title, comments) VALUES (?, ?, ?)");
    $stmt->execute([$_POST['handlename'], $_POST['title'], $_POST['comments']]);
    // 投稿成功時にはindex.phpにリダイレクト
    header("Location: http://localhost/diworks_keijiban/index.php");
    exit(); // 処理終了
} else {
    // フォームの入力内容が空の場合は、リダイレクトせずに、入力フォームのページに戻る
    header("Location: http://localhost/diworks_keijiban/index.php");
    exit();
}
?>
