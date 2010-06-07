<?php
require_once '../init.php';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="application/xhtml+xml; charset=UTF-8" />
    <meta http-equiv="Content-Style-Type" content="text/css" />
    <meta http-equiv="Content-Script-Type" content="text/javascript" />
    <title>受講申し込み | コミュニケーション・ベース</title>
    <link rel="stylesheet" href="stylesheets/reset.css" type="text/css" />
    <link rel="stylesheet" href="stylesheets/base.css" type="text/css" />
    <script type="text/javascript" src="js/script.js"></script>
  </head>
  <body>
    <div id="header">
      <h1><a href="/">コミュニケーション・ベース</a></h1>
<? include 'menu.php' ?>
      <div class="eye_catch">
        <h2>受講申し込み（確認）</h2>
      </div>
    </div>
    <div id="wrapper">
      <div id="main">
        <div class="section">
          <h4>ワークショプ</h4>
          <p>
            <label>ワークショップ（午前）</label><br />
            <?= $_POST['workshop_am'] ?> 
          </p>
          <p>
            <label>ワークショップ（午後）</label><br />
            <?= $_POST['workshop_pm'] ?> 
          </p>
          <h4>受講者</h4>
          <p>
            <label>氏名</label><br />
            <?= $_POST['name'] ?> 
          </p>
          <p>
            <label>氏名（カナ）</label><br />
            <?= $_POST['name_kana'] ?> 
          </p>
          <p>
            <label>メールアドレス</label><br />
            <?= $_POST['email'] ?> 
          </p>
          <h4>キッズ受講者１（キッズ受講者が１人いる場合）</h4>
          <p>
            <label>学年</label><br />
            <?= $_POST['kids_1_class'] ?> 
          </p>
          <h4>キッズ受講者２（キッズ受講者が２人いる場合）</h4>
          <p>
            <label>学年</label><br />
            <?= $_POST['kids_2_class'] ?> 
          </p>
          <h4>アンケート（任意）</h4>
          <p>
            <label>職業</label><br />
            <?= $_POST['work'] ?> 
          </p>
          <p>
            <label>親の年齢層</label><br />
            <?= $_POST['generation'] ?> 
          </p>
          <p>
            <label>このイベンをどうやって知りましたか？</label><br />
            <?= $_POST['known_by'] ?> 
          </p>
          <p>
            <form action="created.php">
<? foreach ($_POST as $name => $value): ?>
              <?= hidden_field($name, array('value' => $value)) ?> 
<? endforeach ?>
              <input type="submit" value="申込む" /></p>
            </form>
            <form action="application.php">
<? foreach ($_POST as $name => $value): ?>
              <?= hidden_field($name, array('value' => $value)) ?> 
<? endforeach ?>
              <input type="submit" value="戻る" />
            </form>
          </p>
        </div>
      </div>
      <div id="sub">
      </div>
    </div>
<? include 'footer.php' ?>
  </body>
</html>
