<?php
include 'simplehtmldom_1_9_1/simple_html_dom.php';
$selTotal = $argv[1];
$selAvailable = $argv[2];
$selTitle = $argv[3];
$url = $argv[4];
$html = file_get_html($url);
$total = $html->find($selTotal)[0]->plaintext;
$available = $html->find($selAvailable)[0]->plaintext;
$title = $html->find($selTitle)[0]->plaintext;
echo $title . ':' . $available . '/' . $total;

// echo file_get_contents('https://onoffmix.com/event/108060');
