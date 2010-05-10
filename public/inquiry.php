<?php
require_once '../init.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    validate_presence_of('email');
    validate_email_of('email');
    validate_presence_of('body');

    if (!(count($_ERROR) > 0)) {
        $body = fetch('inquiry.txt.php');
        nice_send_mail(MAIL_TO, MAIL_FROM, $body, array('From:'.MAIL_FROM));
        $_NOTICE = 'お問い合わせを承りました。';
    }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="application/xhtml+xml; charset=UTF-8" />
    <meta http-equiv="Content-Style-Type" content="text/css" />
    <meta http-equiv="Content-Script-Type" content="text/javascript" />
    <title>お問い合わせ | コミュニケーション・ベース</title>
    <link rel="stylesheet" href="stylesheets/reset.css" type="text/css" />
    <link rel="stylesheet" href="stylesheets/base.css" type="text/css" />
    <script type="text/javascript" src="js/script.js"></script>
  </head>
  <body>
    <div id="header">
      <h1><a href="/">コミュニケーション・ベース</a></h1>
<? include 'menu.php' ?>
      <div class="eye_catch">
        <h2>お問い合わせ</h2>
      </div>
<div class="bread_crambs">
<ol>
<li><a href="/">トップページ</a></li>
<li>お問い合わせ</li>
</ol>
</div>
    </div>
    <div id="wrapper">
      <div id="main">
        <?= notice_message() ?> 
        <?= error_messages() ?> 
        <form action="inquiry.php" method="post">
<div class="section">
         <h3>お問い合わせフォーム</h3>
        <p class="float_right"><img src="/images/inquiry.jpg" width="200px" height="210px" /></p>
         <p>
            <label>メールアドレス</label><br />
            <?= text_field('email') ?>
          </p>
          <p>
            <label>お問い合わせ内容</label><br />
            <?= text_area('body', array('cols' => 50, 'rows' => 10)) ?>
          </p>
          <p><input type="submit" value="送信" /></p>
        </form>
      </div>
      </div>
    </div>
<? include 'footer.php' ?>
  </body>
</html>
