<?php

/**
 * Renders some html for dashboard in a simplified way.
 */
function renderdash(string $referrer = '', string $tags = '') {
    $params = [];
    if ($referrer != '') {
        $params[] = "referrer=$referrer";
    }
    if ($tags != '') {
        $params[] = "tags=$tags";
    }
    if (!empty($params)) {
        $params = implode('&', $params);
        $params = "?$params";
    } else {
        $params = '';
    }
    global $MST, $CFG;
    $json = file_get_contents($CFG->apipath . "/index.php$params");
    $links = (array) json_decode($json);

    $arraylinks = [];
    foreach ($links as $link) {
        $link = (array) $link;
        $arraylinks[] = (array) $link;
    }

    $dash = $MST->render('dash', ['links' => $arraylinks]);
    return $dash;
}