<?php
require_once('../config.php');

$json = file_get_contents($CFG->apipath."?tags=core");
$links = (array) json_decode($json);
$alinks = [];
foreach ($links as $link) {
    $alinks[] = $link;
}

$head = $MST->render('head');
$htmllinks = $MST->render('body', ['links' => $alinks]);

echo $head;
echo '<body>';
echo $htmllinks;
echo '</body>';