<?php
require_once '../init.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' and params('submit') !== '戻る') {
    validate_presence_of('name');
    validate_presence_of('name_kana');
    validate_presence_of('email');
    validate_email_of('email');
    validate_presence_of('payment_method');

    if (!(count($_ERROR) > 0)) {
        include 'application_confirm.html.php';
        exit(0);
    }
}

include 'application.html.php';
?>
