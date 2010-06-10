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
<? if (is_capacity_over()): ?>
          <p>申し訳ございません。申し込みは定員に達しました。</p>
<? else: ?>
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
            <h4>託児予約の申し込み</h4>
            <p>
              <?= radio_button('daycare', '申し込み有り', array('id' => 'daycare_true')) ?> 
              <label for="daycare_true">申し込み有り</label>
              <?= radio_button('daycare', '申し込み無し', array('id' => 'daycare_false')) ?> 
              <label for="daycare_false">申し込み無し</label><br />
              ※託児予約は別途お申し込みメールをお送りください（託児申し込み詳細はお申し込みページ下部にございます）
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
            <h4>支払い方法</h4>
            <table class="payment">
              <tr>
                <td class="label">
                  <?= radio_button('payment_method', '銀行振込', array('id' => 'bank')) ?> 
                  <label for="bank">銀行振込</label>
                </td>
                <td>
                  銀行：三菱UFJ銀行　支店：大倉山支店<br />種目：普通預金　口座番号：0110206　口座名：チーム二等辺三角形
                </td>
              </tr>
              <tr>
                <td class="label">
                  <?= radio_button('payment_method', '郵便振替', array('id' => 'mail')) ?> 
                  <label for="mail">郵便振替</label>
                </td>
                <td>
                  ゆうちょ銀行から：<br />
                  銀行：ゆうちょ銀行　記号：10290<br />
                  番号：86685441　口座名：チーム二等辺三角形<br />
                  他金融機関から：<br />
                  銀行名：ゆうちょ銀行　店名：〇二八　店番：028<br />
                  種目：普通預金　口座名：チーム二等辺三角形
                </td>
              </tr>
              <tr>
                <td class="label">
                  <?= radio_button('payment_method', 'クレジットカード払い（Paypal払い）', array('id' => 'paypal')) ?> 
                  <label for="paypal">クレジットカード払い（Paypal払い）</label>
                </td>
                <td>
                  Paypalのアカウントをお持ちでない方でも、ご利用いただけます。
                </td>
              </tr>
            </table>
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
              <label>このイベントをどうやって知りましたか？</label><br />
              <?= known_by_select_field() ?> 
            </p>
            <p><input type="submit" value="確認" /></p>
          </form>
<? endif ?>
        </div>
        <div class="section">
          <h3>託児予約</h3>
          <p>受講中お子様を同施設内でお預かりする保育をご用意しております。</p>
          <p>料金：お子様お1人当たり（全年齢一律）</p>
          <p>午前（9:30~12:30）2000円</p>
          <p>午後（13:00~16:00）2000円</p>
          <p>保育受託：株式会社　Think education</p>
          <p>
            保育をご希望の方は<br />
            お子様のお名前（ふりがな付）と9/5時点での年齢（月齢）・アレルギー有無、保育希望時間帯（午前のみ/終日）を記入の上、<br />
件名を「9/5保育」として<a href="mailto:hoiku@nitohen-sankakukei.com">hoiku@nitohen-sankakukei.com</a>のアドレスまでお送りください。
          </p>
        </div>
      </div>
    </div>
<? include 'footer.php' ?>
  </body>
</html>
