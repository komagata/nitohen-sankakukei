<?php
require_once '../init.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    validate_presence_of('family_workshop');
    validate_presence_of('adult_workshop');
    validate_numericality_of('child_num', array('less_than_or_equal_to' => 2));
    validate_presence_of('name');
    validate_presence_of('name_kana');
    validate_presence_of('email');
    validate_email_of('email');
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="application/xhtml+xml; charset=UTF-8" />
    <meta http-equiv="Content-Style-Type" content="text/css" />
    <meta http-equiv="Content-Script-Type" content="text/javascript" />
    <title>お申し込み | コミュニケーション・ベース</title>
    <link rel="stylesheet" href="stylesheets/reset.css" type="text/css" />
    <link rel="stylesheet" href="stylesheets/base.css" type="text/css" />
    <script type="text/javascript" src="js/script.js"></script>
  </head>
  <body>
    <div id="header">
      <h1><a href="/">コミュニケーション・ベース</a></h1>
<? include 'menu.php' ?>
      <div class="eye_catch">
        <h2>お申し込み</h2>
      </div>
<div class="bread_crambs">
<ol>
<li><a href="/">トップページ</a></li>
<li>お申し込み</li>
</ol>
</div>
    </div>
    <div id="wrapper">
      <div id="main">
        <?= error_messages() ?>
        <div class="section">
        <h3>お申し込みフォーム</h3>
        <form action="application.php" method="post">
        <p class="float_right"><img src="/images/subscription.jpg" width="300px" height="209px" /></p>
          <p>
            <label>ご希望の親子ワークショップ</label><br />
            <?= family_workshop_select_field() ?>
          </p>
          <p>
            <label>ご希望の大人ワークショップ</label><br />
            <?= adult_workshop_select_field() ?>
          </p>
          <p>
            <label>ワークショップにご参加のお子さんの人数</label><br />
            <?= text_field('child_num', array('size' => '2')) ?> 人
          </p>
          <p>
            <label>お名前</label><br />
            <?= text_field('name') ?>
          </p>
          <p>
            <label>お名前（カナ）</label><br />
            <?= text_field('name_kana') ?>
          </p>
          <p>
            <label>メールアドレス</label><br />
            <?= text_field('email') ?>
          </p>
          <p><input type="submit" value="送信" /></p>
        </form>
        </div>
        <div class="section">
          <h3>託児予約</h3>
          <p>６月１日予約開始</p>
        </div>
      </div>
    </div>
<? include 'footer.php' ?>
  </body>
</html>
