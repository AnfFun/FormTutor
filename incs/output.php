<?php
require_once __DIR__ . '/functions.php';
require_once __DIR__ . '/data.php';
if (!empty($_POST)) {
    debug($_POST);
    $fields= load($field);
    debug($fields);
    if ($errors = validate($fields)){
        debug($errors);
    }else{
        echo 'OK';
        //mail
    }
}
