<?php
require_once '../init.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    validate_presence_of('email');
    validate_email_of('email');
    validate_presence_of('body');
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
      <div class="eye_catch">
        <h1><a href="/">コミュニケーション・ベース</a></h1>
      </div>
    </div>
<? include 'menu.php' ?>
    <div id="wrapper">
      <div id="main">
        <h2>お問い合わせ</h2>
        <p><img src="/images/inquiry.jpg" width="410px" height="322px" /></p>
        <?= error_messages() ?>
        <form action="inquiry.php" method="post">
          <p>
            <label>メールアドレス</label><br />
            <?= text_field('email') ?>
          </p>
          <p>
            <label>お問い合わせ内容</label><br />
            <?= text_area('body', array('cols' => 60, 'rows' => 10)) ?>
          </p>
          <p><input type="submit" value="送信" /></p>
        </form>
      </div>
      <div id="sub">
      </div>
    </div>
<? include 'footer.php' ?>
  </body>
</html>
