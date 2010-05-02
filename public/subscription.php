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
  </div>
  <div id="wrapper">
    <div id="main">
      <h2>お申し込み</h2>
      </p><img src="/images/subscription" width="50%" height="50%" /></p>
      <form action="confirm.php">
        <p>
          <label>氏名</label><br />
          <input type="text" name="name" value="" />
        <p>
          <label>メールアドレス</label><br />
          <input type="text" name="email" value="" />
        </p>
        <p>
          <label>希望のワークショップ</label><br />
          <input type="text" name="workshop" value="" />
        </p>
        <p>
          <label>お子さんの名前</label><br />
          <input type="text" name="child_name" value="" />
        </p>
        <p>
          <label>お子さんの年齢</label><br />
          <input type="text" name="child_age" value="" />
        </p>
        <p><input type="submit" value="送信" /></p>
      </form>
      <h2>託児予約</h2>
      <form action="confirm.php">
      </form>
    </div>
    <div id="sub">
    </div>
  </div>
  <? include 'footer.php' ?>
</body>
</html>