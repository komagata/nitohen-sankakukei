<?php
ini_set('include_path', join(PATH_SEPARATOR, array(
    dirname(__FILE__).'/lib',
    ini_get('include_path'))));

define('MAIL_TO', 'komagata@gmail.com');
define('MAIL_FROM', 'info@nitohen-sankakukei.com');

require_once 'util.php';

function i18n($name) {
    $_TEXT = array(
        'family_workshop' => 'ご希望の親子ワークショップ',
        'adult_workshop'  => '後希望の大人ワークショップ',
        'child_num'       => 'ワークショップにご参加のお子さんの人数',
        'name'            => 'お名前',
        'name_kana'       => 'お名前（カナ）',
        'email'           => 'メールアドレス',
        'body'            => 'お問い合わせ内容',
        'phone_number'    => '電話番号'
    );
    return $_TEXT[$name];
}

function family_workshop_select_field($options = array()) {
    return fools_select_field('family_workshop', array(
        'お絵かきコーチング',
        'お手紙ワークショップ',
        'フラワーワーク',
        'ジュニアマッサージ',
        'キッズキッチン（おやつ編）'
    ), $options);
}

function adult_workshop_select_field($options = array()) {
    return fools_select_field('adult_workshop', array(
        'ワールドカフェ',
        '強み発見ワーク',
        'マインドマップ',
        'プチママ・ロールプレイング',
        'ドリームマップ'
    ), $options);
}
?>
