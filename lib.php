<?php

/**
 * Renders some html for dashboard in a simplified way.
 */
function renderdash() {
    global $MST, $CFG;
    $json = file_get_contents($CFG->apipath);
    $links = json_decode($json);
    $dash = $MST->render('dash', ['links' => $links]);
    return $dash;
}