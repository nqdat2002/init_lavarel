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
