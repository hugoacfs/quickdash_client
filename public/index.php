<?php
require_once('../config.php');

$json = file_get_contents($CFG->apipath);
$links = (array) json_decode($json);
$alinks = [];
foreach ($links as $link) {
    $alinks[] = $link;
}
echo '<pre>';
print_r($links);
echo '</pre>';

$head = $MST->render('head');
$htmllinks = $MST->render('body', ['links' => $alinks]);

echo $head;
echo '<body>';
echo $htmllinks;
echo '</body>';