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
        <h2>受講申し込み</h2>
      </div>
    </div>
    <div id="wrapper">
      <div id="main">
        <p><img src="/images/subscription" width="410px" height="306px" /></p>
        <form action="confirm.php">
          <p>
            <label>ご希望の親子ワークショップ</label><br />
            <?= family_workshop_select_field() ?>
          </p>
          <p>
            <label>ご希望の大人ワークショップ</label><br />
            <?= adult_workshop_select_field() ?>
          </p>
          <p>
            <label>ワークショップにご参加のお子さん</label><br />
            <?= text_field('child_num', array('size' => '2')) ?> 人
          </p>
          <p>
            <label>氏名</label><br />
            <?= text_field('name') ?>
          </p>
          <p>
            <label>氏名（カナ）</label><br />
            <?= text_field('name_kana') ?>
          </p>
          <p>
            <label>メールアドレス</label><br />
            <?= text_field('email') ?>
          </p>
          <p><input type="submit" value="送信" /></p>
        </form>
        <div class="section">
          <h2>託児予約</h2>
          <p>６月１日予約開始</p>
        </div>
      </div>
      <div id="sub">
      </div>
    </div>
<? include 'footer.php' ?>
  </body>
</html>
