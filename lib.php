<?php

/**
 * Renders some html for dashboard in a simplified way.
 */
function renderdash() {
    global $MST, $CFG;
    $json = file_get_contents($CFG->apipath);
    $links = (array) json_decode($json);

    $positionedlinks = [];
    $arraylinks = [];
    foreach ($links as $link) {
        $link = (array) $link;
        if (isset($link['position'])) {
            $positionedlinks[] = $link;
            continue;
        }
        $arraylinks[] = (array) $link;
    }

    // $positionedlinks

    $dash = $MST->render('dash', ['links' => $arraylinks]);
    return $dash;
}