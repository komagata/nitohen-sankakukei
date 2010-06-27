<?php
require_once '../init.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' and params('submit') !== '戻る') {
    validate_presence_of('name');
    validate_presence_of('name_kana');
    validate_presence_of('email');
    validate_email_of('email');
    validate_presence_of('payment_method');

    $kindergarten_child = array('年少', '年中', '年長');
    $workshops_for_family = workshops_for_family();
    $individual_entriable = array('親子お絵かきワークショップ', 'ものがたりをつくろう');

    // キッズ受講者１、２について
    foreach (array(1, 2) as $i) {
        // 幼稚園児は
        if (in_array(params("kids_{$i}_class"), $kindergarten_child)) {
            // 午前ワークショップの選択禁止
            if (params("kids_{$i}_workshop_am")) {
                $_ERROR[] = "年少・年中・年長のキッズ受講者{$i}は午前のワークショップを受けることができません。";
            }

            // 親と同じ午後のワークショップ以外禁止
            if (params("kids_{$i}_workshop_pm") and params("kids_{$i}_workshop_pm") != params('workshop')) {
                $_ERROR[] = "キッズ受講者{$i}は親御様とご一緒のワークショップ以外に参加できません。";
            }

        // 小学生は
        } else {
            // 単独参加可能ワークショップ以外の場合は
            if (!in_array(params("kids_{$i}_workshop_pm"), $individual_entriable)) {
                // 親と同じ午後のワークショップ以外禁止
                if (params("kids_{$i}_workshop_pm") and params("kids_{$i}_workshop_pm") != params('workshop')) {
                    $_ERROR[] = "キッズ受講者{$i}は該当のワークショップでは親御様とご一緒でなければ参加できません。";
                }
            }
        }
    } 

    if (!(count($_ERROR) > 0)) {
        if (!isset($_POST['daycare'])) $_POST['daycare'] = '申し込み無し';
        include 'application_confirm.html.php';
        exit(0);
    }
}

include 'application.html.php';
?>
