<?php
ini_set('include_path', join(PATH_SEPARATOR, array(
    dirname(__FILE__).'/lib',
    ini_get('include_path'))));

//define('MAIL_TO',   'info@nitohen-sankakukei.com');
//define('MAIL_FROM', 'info@nitohen-sankakukei.com');
define('MAIL_TO',   'sankakukei@fjord.jp');
//define('MAIL_TO',   'komagata@gmail.com');
define('MAIL_FROM', 'info@nitohen-sankakukei.com');

$DSN = 'sqlite3:///development.sqlite3';

require_once 'util.php';

function i18n($name) {
    $_TEXT = array(
        'workshop_am' => 'ワークショップ（午前）',
        'workshop_pm'  => 'ワークショップ（午後）',
        'name'            => 'お名前',
        'name_kana'       => 'お名前（カナ）',
        'email'           => 'メールアドレス',
        'body'            => 'お問い合わせ内容',
        'phone_number'    => '電話番号',
        'kids_class_1'    => 'キッズ受講者１',
        'kids_class_2'    => 'キッズ受講者２',
    );
    return $_TEXT[$name];
}
function workshop_am_select_field($options = array()) {
    return fools_select_field('workshop_am', array(
        '[キッズ] キッズワークショップ',
        '[キッズ] キッズキッチン（ランチ編）'
    ), $options);
}

function workshop_pm_select_field($options = array()) {
    return fools_select_field('workshop_pm', array(
        '[大人] ハッピー♪マインドマッピング',
        '[大人] ワールドカフェ',
        '[大人] 強み発見ワーク',
        '[大人] 「ママのイキイキ応援プログラム（通称ママイキ）」実践講座',
        '[親子] 親子フラワーアレンジ',
        '[親子] 親子お絵かきワークショップ',
        '[親子] 親子キッチン（おやつ編）',
        '[親子] ファミリー・マッサージ',
        '[親子] ものがたりをつくろう'
    ), $options);
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
