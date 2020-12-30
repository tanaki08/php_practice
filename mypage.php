<?php
  error_reporting('E_ALL');//E_STRICTレベル以外のエラーを報告する
  ini_set('display_errors', 'On');//画面にエラーを表示させるか

  session_start();

  //ログインしていなければ、Login画面へ戻す
  if(empty($_SESSION['login'])) header('Location:login.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ホームページのタイトル</title>
    <link rel="stylesheet" href="mypage.css">
  </head>
  <body>
    <?php if(!empty($_SESSION['login'])){ ?>
      <h1>マイページ</h1>
      <section>
        <p>
          あなたのemailは info@gmail.com です　<br>
          あなたのpassは password です
        </p>
        <a href="index.php">ユーザー登録画面へ</a>
      </section>
    <?php }else{ ?>
      <p>ログインしていないと見れません</p>
    <?php } ?>
  </body>
</html>