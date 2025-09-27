<?php
function formatDate($date) {
    return date('d/m/Y', strtotime($date));
}

function dd($data) {
    echo '<pre>';
    print_r($data);
    echo '</pre>';
    die();
}

function isJson($string) {
    json_decode($string);
    return (json_last_error() === JSON_ERROR_NONE);
}

function slugify($text) {
    $text = iconv('UTF-8', 'ASCII//TRANSLIT//IGNORE', $text);
    $text = strtolower($text);

    $text = preg_replace('/[^a-z0-9]+/i', '-', $text);
    $text = trim($text, '-');

    return $text;
}
