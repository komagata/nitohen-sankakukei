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
        'kids_class_1',
        'kids_class_2',
        'payment_method'
    );
    $fields = array();
    foreach ($params as $p) $fields[$p] = params($p);
    $res = $CON->autoExecute('applications' $fields, DB_AUTOQUERY_INSERT);

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

    $body = fetch('application.txt.php');
    $mail = new Qdmail();
    $mail->to(params('email'));
    $mail->bcc(APPLICATION_MAIL_BCC);
    $mail->subject(APPLICATION_MAIL_SUBJECT);
    $mail->text($body);
    $mail->from(APPLICATION_MAIL_FROM);
    $mail->send();

    redirect('application_created.php');
}
?>
