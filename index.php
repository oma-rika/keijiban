<!doctype html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>4eachblog 掲示板</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <header>
    <div class="logo"><img src="4eachblog_logo.jpg" alt="4eachblog" /></div>
    <nav>
      <ul>
        <li>トップ</li>
        <li>プロフィール</li>
        <li>4eachについて</li>
        <li>問い合わせ</li>
        <li>その他</li>
      </ul>
    </nav>
  </header>
  <main>
  <div id="main-container">
  <h1>入力フォーム</h1>
  <form method="post" action="./insert.php">
    <div>ハンドルネーム<br><input type="text" class="text" name="handlename" /></div>
    <div>タイトル<br><input type="text" class="text" name="title" /></div>
    <div>コメント<br><textarea name="comments"></textarea></div>
    <div><input type="submit" class="submit" value="投稿する"></div>
  </form>
  <?php
      mb_internal_encoding("utf8");
      $pdo = new PDO("mysql:dbname=lesson02;host=localhost;","root", "mysql");
      $stmt = $pdo->query("select * from 4each_keijiban");
      
      while($row = $stmt->fetch()){
        echo "<div class='kiji'>";
        echo "<h2>".$row['title']."</h2>";
        echo "<div class='contents'>";
        echo $row['comments'];
        echo "</div>";
        echo "<div class='handlename'>posted by ".$row['handlename']."</div>";
        echo "</div>";
      }
  ?>
  </div>
  <aside>
    <h2>人気の記事</h2>
    <ul>
      <li>PHP オススメ本</li>
      <li>PHP MyAdminの使い方</li>
      <li>今人気のエディタ Top5</li>
      <li>HTMLの基礎</li>
    </ul>
    <h2>オススメリンク</h2>
    <ul>
      <li>インターノウス株式会社</li>
      <li>XAMPPのダウンロード</li>
      <li>Eclipsのダウンロード</li>
      <li>Bracketsのダウンロード</li>  
    </ul>
    <h2>カテゴリ</h2>
    <ul>
      <li>HTML</li>
      <li>PHP</li>
      <li>MySQL</li>
      <li>JavaScript</li>
    </ul>
  </aside>
  </main>
  <footer>
    copy&copy;internous | 4each blog is the one which provides A to Z about programing.    
  </footer>
</body>