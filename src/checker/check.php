<?php
include 'simplehtmldom_1_9_1/simple_html_dom.php';
$url = 'https://onoffmix.com/event/206727';
$html = file_get_html($url);
$total = $html->find('.attend_wrap .total .number_txt')[0]->plaintext;
$current = $html->find('.attend_wrap .available .number_txt')[0]->plaintext;
echo $current . '/' . $total;

// echo file_get_contents('https://onoffmix.com/event/108060');
