<?php

/**
 * Renders some html for dashboard in a simplified way.
 */
function renderdash() {
    global $MST, $CFG;
    $json = file_get_contents($CFG->apipath);
    $links = (array) json_decode($json);

    $arraylinks = [];
    foreach ($links as $link) {
        $link = (array) $link;
        $arraylinks[] = (array) $link;
    }

    $dash = $MST->render('dash', ['links' => $arraylinks]);
    return $dash;
}