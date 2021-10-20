<?php
require_once('../config.php');

$json = file_get_contents($CFG->apipath."?tags=core");
$links = (array) json_decode($json);
$alinks = [];
foreach ($links as $link) {
    $alinks[] = $link;
}

$head = $MST->render('head', ['faviconurl' => $CFG->faviconurl]);
$htmllinks = $MST->render('body', [
    'links' => $alinks, 
    'referrer' => $CFG->corereferrer,
    'tags' => $CFG->standardtags,
    'dashjsurl' => $CFG->jspath
]);
echo '<!DOCTYPE html>';
echo '<html lang="en">';
echo $head;
echo $htmllinks;
echo '</html>';