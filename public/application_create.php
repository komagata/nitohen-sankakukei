<?php
require_once '../init.php';
require_once 'qdmail.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $params = array(
        'name',
        'name_kana',
        'email',
        'workshop_am',
        'workshop_pm',
        'daycare',
        'kids_1_class',
        'kids_2_class',
        'payment_method',
        'work',
        'generation',
        'known_by'
    );
    $fields = array();
    foreach ($params as $p) $fields[$p] = params($p);
    $res = $CON->autoExecute('applications', $fields, DB_AUTOQUERY_INSERT);

    // workshop_am increment
    if (isset($_REQUEST['workshop_am'])) {
        $CON->query(
            "UPDATE workshops SET num = num + 1 WHERE name = ?",
            array($_REQUEST['workshop_am'])
        ); 
    }

    // workshop_pm increment
    if (isset($_REQUEST['workshop_pm'])) {
        $CON->query(
            "UPDATE workshops SET num = num + 1 WHERE name = ?",
            array($_REQUEST['workshop_pm'])
        ); 
    }

    // application mail
    $app_body = fetch('application.txt.php');
    $app_mail = new Qdmail();
    $app_mail->to(APP_MAIL_TO);
    $app_mail->bcc(APP_MAIL_BCC);
    $app_mail->subject(APP_MAIL_SUBJECT);
    $app_mail->text($app_body);
    $app_mail->from(APP_MAIL_FROM);
    $app_mail->send();

    // application auto reply mail
    $reply_body = fetch('application_auto_reply.txt.php');
    $reply_mail = new Qdmail();
    $reply_mail->to(params('email'));
    $reply_mail->bcc(APP_REPLY_MAIL_BCC);
    $reply_mail->subject(APP_REPLY_MAIL_SUBJECT);
    $reply_mail->text($reply_body);
    $reply_mail->from(APP_REPLY_MAIL_FROM);
    $reply_mail->send();

    redirect('application_created.php');
}
?>
