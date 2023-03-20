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

function validate($data){}

