<?php
include 'simplehtmldom_1_9_1/simple_html_dom.php';
$url = $argv[1];
$html = file_get_html($url);
$output = '';
for($i=2; $i<count($argv); $i++){
  var_dump($argv[$i]);
  // 만약 첫 두글자가 -t라면
  if(substr($argv[$i], 0, 2) === '-t') {
    // $output에 -t 다음에 따라오는 문자를 추가한다.
    $output .= substr($argv[$i], 2);
  } else {
  // 아니라면
    // $html->find의 인자로 값을 대입해서 그 결과를 $output에 추가한다.
    $output .= trim($html->find($argv[$i])[0]->plaintext);
  }
}
echo $output;

//$selTotal = $argv[1];
//$selAvailable = $argv[2];
//$selTitle = $argv[3];
//$total = $html->find($selTotal)[0]->plaintext;
//$available = $html->find($selAvailable)[0]->plaintext;
//$title = $html->find($selTitle)[0]->plaintext;
//echo $title . ':' . $available . '/' . $total;

// echo file_get_contents('https://onoffmix.com/event/108060');
