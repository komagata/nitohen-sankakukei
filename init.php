<?php
ini_set('include_path', join(PATH_SEPARATOR, array(
    dirname(__FILE__).'/lib',
    ini_get('include_path'))));

define('MAIL_TO',   'sankakukei@fjord.jp');
//define('MAIL_TO',   'komagata@gmail.com');
define('MAIL_FROM', 'info@nitohen-sankakukei.com');
//define('APP_REPLY_MAIL_BCC', 'mamatchy@mamaiki.net');
define('APP_REPLY_MAIL_BCC', 'komagata@gmail.com');
define('APP_REPLY_MAIL_SUBJECT', '【コミュニケーション・ベース】受講確認メール');
define('APP_REPLY_MAIL_FROM', 'info@nitohen-sankakukei.com');
//define('APP_MAIL_TO', 'mamatchy@mamaiki.net');
define('APP_MAIL_TO', 'komagata@fjord.jp');
define('APP_MAIL_BCC', 'komagata@fjord.jp');
define('APP_MAIL_SUBJECT', 'コミュニケーション・ベースに申し込みがありました');
define('APP_MAIL_FROM', 'info@nitohen-sankakukei.com');
define('CAPACITY', 260);

if ($DSN = @file_get_contents(dirname(__FILE__).'/production.txt')) {
    $DSN = trim($DSN);
    $APP_ENV = 'production';
} else {
    $APP_ENV = 'development';
    $DSN = 'mysql://root:@localhost/nitohensankakukei';
}

require_once 'util.php';
require_once 'DB.php';

$CON = DB::connect($DSN);
$CON->setFetchMode(DB_FETCHMODE_ASSOC);
if (PEAR::isError($CON)) {
    trigger_error($CON->getMessage());
}
$CON->query("SET NAMES utf8");

function i18n($name) {
    $_TEXT = array(
        'workshop_am'    => 'ワークショップ（午前）',
        'workshop_pm'    => 'ワークショップ（午後）',
        'name'           => 'お名前',
        'name_kana'      => 'お名前（カナ）',
        'email'          => 'メールアドレス',
        'body'           => 'お問い合わせ内容',
        'phone_number'   => '電話番号',
        'kids_class_1'   => 'キッズ受講者１',
        'kids_class_2'   => 'キッズ受講者２',
        'payment_method' => '支払い方法',
        'work'           => '職業',
        'generation'     => '親の年齢層',
        'known_by'       => 'このイベントをどうやって知りましたか？'
    );
    return $_TEXT[$name];
}

function is_capacity_over() {
    global $CON;
    $ret = (int)$CON->getOne("SELECT COUNT(id) FROM applications");
    return $ret >= CAPACITY ? true : false;
}

function workshop_select_field($options = array()) {
    global $CON;
    $res = $CON->getAll("SELECT name FROM workshops WHERE target IN ('adult', 'family') AND num < max");
    $names = array();
    foreach ($res as $r) $names[] = $r['name'];
    return fools_select_field('workshop', $names, $options);
}

function kids_1_workshop_select_field($options = array()) {
    return kids_workshop_select_field('kids_1_workshop', $options);
}

function kids_2_workshop_select_field($options = array()) {
    return kids_workshop_select_field('kids_2_workshop', $options);
}

// private
function kids_workshop_select_field($name, $options = array()) {
    global $CON;
    $res = $CON->getAll("SELECT name FROM workshops WHERE target IN ('kids', 'family') AND num < max");
    $names = array();
    foreach ($res as $r) $names[] = $r['name'];
    return fools_select_field($name, $names, $options);
}

function kids_class_select_field($name, $options = array()) {
    return fools_select_field($name, array(
        '年少',
        '年中',
        '年長',
        '小学校１年生',
        '小学校２年生',
        '小学校３年生',
        '小学校４年生',
        '小学校５年生',
        '小学校６年生'
    ), $options);
}

function work_select_field($options = array()) {
    return fools_select_field('work', array(
        '専業主婦',
        'ワーキングマザー（フルタイム）',
        'ワーキングマザー（パートタイム）'
    ), $options);
}

function generation_select_field($options = array()) {
    return fools_select_field('generation', array(
        '２０代前半',
        '２０代後半',
        '３０代前半',
        '３０代後半',
        '４０代前半',
        '４０代後半',
        '５０代以上'
    ), $options);
}

function known_by_select_field($options = array()) {
    return fools_select_field('known_by', array(
        'イベントホームページ',
        'ブログ',
        'Twitter',
        '知人の紹介（Mixiやブログ含む）',
        'チラシ'
    ), $options);
}
?>
