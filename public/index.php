<?php
require_once('../config.php');

$json = file_get_contents($CFG->apipath);
$links = json_decode($json);

$head = $MST->render('head');
$links = $MST->render('body', ['links' => $links]);

echo $head;
echo '<body>';
echo $links;
echo '</body>';