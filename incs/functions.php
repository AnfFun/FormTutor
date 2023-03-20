<?php

function debug($data)
{
    echo '<pre>' . print_r($data, 1) . '</pre>';
}

function load($data)
{
    foreach ($_POST as $key => $item) {
        if (array_key_exists($key, $data)) {
            $data[$key] ['value'] = trim($item);
        }


    }
    return $data;
}

function validate($data)
{
    $errors = '';
    foreach ($data as $k => $v) {
        if ($data[$k]['require'] && empty($data[$k]['value'])) {
            $errors .= '<li>' . "Field is empty - " . $data[$k]['field_name'] . '</li>';
        };
    }
    return $errors;

}

