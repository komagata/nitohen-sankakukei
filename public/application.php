<?php
require_once '../init.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    validate_presence_of('name');
    validate_presence_of('name_kana');
    validate_presence_of('email');
    validate_email_of('email');

    if (!(count($_ERROR) > 0)) {
        include 'application_confirm.php';
        exit(0);
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
      <div class="bread_crambs">
        <ol>
          <li><a href="/">トップページ</a></li>
          <li>受講申し込み</li>
        </ol>
      </div>
    </div>
    <div id="wrapper">
      <div id="main">
        <div class="section">
          <h3>コミュニケーションベース参加の流れ</h3>
          <p class="float_right"><img src="/images/subscription.jpg" width="300px" height="209px" alt="申し込み" /></p>
          <p>コミュニケーションベースへの参加は以下のような流れになります。</p>
          <p>
            コミュニケーションベースにご参加いただくためには、受講パスポートをお申し込みください。<br />
            パスポート一枚で、講演会（午前）とワークショップ（午後・選択制）の両方にご参加いただけます。<br />
            パスポートをお持ちの大人お一人につき、お子さん二人までワークショップにご参加いただけます。（ワークショップにより年齢制限あり）
          </p>
          <p>お申し込み確認後、こちらより申し込み確認ならびに入金方法をご案内いたします。</p>
          <p>＜お支払い方法＞<br />銀行振込、郵便振替、PayPal</p>
          <p>入金確認後、受講パスポートのpdfファイルをメールにて送付いたします。当日は、お送りしたpdf ファイルを印刷してお持ちください。</p>
          <p>託児サービスのご利用は事前に予約が必要です。</p>
<!--
        </p>（図）</p>
-->
          <p>
            ※ネットプリントサービス：コンビニの店頭のコピー機からパソコンのファイルのプリントアウトができるサービス。
            いずれも、白黒２０円／枚、カラー８０円／枚
          </p>
          <ul>
            <li>セブンイレブン：<a href="http://www.printing.ne.jp/index.html" target="_blank">http://www.printing.ne.jp/index.html</a></li>
            <li>ローソン：<a href="http://www.lawson.co.jp/service/counter/copy.html" target="_blank">http://www.lawson.co.jp/service/counter/copy.html</a></li>
          </ul>
          <p>※USBメモリやSDカード等のメディアが必要です。</p>
        </div>
        <div class="section">
          <h3>お申し込みフォーム</h3>
          <?= error_messages() ?>
          <form action="application.php" method="post">
            <h4>ワークショップ</h4>
            <p>※キッズ受講者がいない場合は[キッズ]、[親子]のワークショップに申込むことは出来ません。</p>
            <p>
              <label>ワークショップ（午前）</label><br />
              <?= workshop_am_select_field() ?>
            </p>
            <p>
              <label>ワークショップ（午後）</label><br />
              <?= workshop_pm_select_field() ?>
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
            <h4>キッズ受講者１（キッズ受講者が１人いる場合）</h4>
            <p>
              <label>学年</label><br />
              <?= kids_class_select_field('kids_1_class') ?>
            </p>
            <h4>キッズ受講者２（キッズ受講者が２人いる場合）</h4>
            <p>
              <label>学年</label><br />
              <?= kids_class_select_field('kids_2_class') ?>
            </p>
            <p>
              <label>支払い方法</label><br />
              <?= text_field('email') ?>
            </p>
            <h4>アンケート（任意）</h4>
            <p>
              <label>職業</label><br />
              <?= work_select_field() ?>
            </p>
            <p>
              <label>親の年齢層</label><br />
              <?= generation_select_field() ?>
            </p>
            <p>
              <label>このイベンをどうやって知りましたか？</label><br />
              <?= known_by_select_field() ?>
            </p>
            <p><input type="submit" value="送信" /></p>
          </form>
        </div>
        <div class="section">
          <h3>託児予約</h3>
          <p>6月11日予約開始</p>
        </div>
      </div>
    </div>
<? include 'footer.php' ?>
  </body>
</html>
