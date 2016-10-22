<?php
if( $action == 'postMessages' ) {
    $nameForm = isset($_POST['name']) ? $_POST['name'] : null;
    $emailForm = isset($_POST['email']) ? $_POST['email'] : null;
    $messagesForm = isset($_POST['messages']) ? $_POST['messages'] : null;
    if ($nameForm && $emailForm && $messagesForm) {
        $dataForm = [$nameForm, $emailForm, $messagesForm];
        $isValid = validate($dataForm);
        if ($isValid) {
            save($dataForm, MESSAGE_PATH);
            setcookie('name', $nameForm, time() + 3600);
            setcookie('email', $emailForm, time() + 3600);
            echo "1";
        }
    }
}
