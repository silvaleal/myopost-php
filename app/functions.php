<?php

function validate($fields) {
    $validates = [];
    foreach ($fields as $field => $value) {
        switch ($value) {
            case 's':
                $validates[$field] = filter_var($_POST[$field], FILTER_SANITIZE_SPECIAL_CHARS);
                break;
            case 'e':
                $validates[$field] = filter_var($_POST[$field], FILTER_VALIDATE_EMAIL);
                break;
        } 
    }
    return $validates;
}

function isEmpty($dates) {
    foreach ($dates as $date) {
        if (empty($date)) {
            return true;
        }
    }
}

function setFlashMsg($key, $message, $style="danger") {
    if (!isset($_SESSION['flash'][$key])) {
        $_SESSION['flash'][$key] = "<div class='alert alert-{$style}' role='alert'>{$message}</div>";
    }
}

function getFlashMsg($key) {
    if (isset($_SESSION['flash'][$key])) {
        $message = $_SESSION['flash'][$key];
        unset($_SESSION['flash']);
        return $message;
    }
}

function getLogged() {
    if (isset($_SESSION['perfil'])) return $_SESSION['perfil'];
}