<?php
// Config global.
$CFG = new stdClass;

// Directory vars.
$CFG->dirroot = __DIR__;
$CFG->dirsept = DIRECTORY_SEPARATOR;
$CFG->apipath = '';
$CFG->jspath = 'http://|https://';
$CFG->corereferrer = 'core';
$CFG->standardtags = 'comma,delimited';

// Add configuration items here.

$CFG->debug = false;
if ($CFG->debug) {
    ini_set('error_logs', 1);
    ini_set('display_error', 1);
    error_log("[QUICKDASH] DEBUG ON!");
}
// Loading external libs.
$CFG->composerok = false;
$CFG->vendordir = $CFG->dirroot .
                $CFG->dirsept .
                'vendor' .
                $CFG->dirsept .
                'autoload.php';
if (require_once($CFG->vendordir)) {
    $CFG->composerok = true;
    try {
        // Loading Mustache.
        Mustache_Autoloader::register();
        $MST = new Mustache_Engine([
            'loader' => new Mustache_Loader_FilesystemLoader(
                $CFG->dirroot .
                $CFG->dirsept .
                'public'.
                $CFG->dirsept .
                'templates')
            ]
        );
    } catch (Exception $ex) {
        $MST = false;
        error_log("[QUICKDASH] Cannot load Mustache.");
    }
}
// Loading lib.
$CFG->libok = false;
$CFG->libdir = $CFG->dirroot .
                $CFG->dirsept .
                'lib.php';
if (require_once($CFG->libdir)) {
    $CFG->libok = true;
}

// This shows config is okay.
$CFG->configok = true;