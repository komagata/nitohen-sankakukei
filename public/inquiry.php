<?= '<?xml version="1.0" encoding="UTF-8"?>' ?>
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
  </div>
  <div id="wrapper">
    <div id="main">
      <h2>お問い合わせ</h2>
      <p><img src="/images/inquiry.jpg" width="50%" height="50%" /></p>
      <form action="confirm.php">
        <p>
          <label>メールアドレス</label><br />
          <input type="text" name="email" value="" />
        </p>
        <p>
          <label>お問い合わせ内容</label><br />
          <textarea name="body" cols="80" rows="12"></textarea>
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
