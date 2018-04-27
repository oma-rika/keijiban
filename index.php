<!doctype html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>4each　blog掲示板</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<body>
  <head>
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
  </head>
  <main>
    <h1>プログラミングに役立つ書籍</h1>
    <div id="main-container">
    <!-- 掲示板ここから -->
    <div class="keijiban">
      <form method="post" action="insert.php">
        <input type="text" name="handlename" />
        <input type="text" name="title" />
        <textarea name="comments"></textarea>
      </form>
    </div>   
    <!-- 掲示板ここまで -->  
    <p>4eachはインターノウスが提供するオンラインでプログラミングが勉強できるイーランニングシステムです。</p>
    <p>記事中身</p>
    <table border="0" cellspadding="5" bgcolor="gray">
      <tr>
        <td>
           <img src="./pic1.jpg" alt="画像1" />
            <p>ドメイン取得方法</p>
        </td>
        <td>
            <img src="./pic2.jpg" alt="画像2" />
            <p>快適な職場環境</p>
        </td>
        <td>
            <img src="./pic3.jpg" alt="画像3" />
            <p>Linuxの基礎</p>
        </td>
        <td>
            <img src="./pic4.jpg" alt="画像4" />
            <p>マーケティング入門</p>
        </td>
      </tr>
      <tr>
        <td>
           <img src="./pic5.jpg" alt="画像5" />
            <p>アクティブラーニング</p>
        </td>
        <td>
            <img src="./pic6.jpg" alt="画像6" />
            <p>cssの効果的な勉強方法</p>
        </td>
        <td>
            <img src="./pic7.jpg" alt="画像7" />
            <p>リーダブルコードとは</p>
        </td>
        <td>
            <img src="./pic8.jpg" alt="画像8" />
            <p>HTML5の可能性</p>
        </td>
      </tr>
    </table>
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
</html>