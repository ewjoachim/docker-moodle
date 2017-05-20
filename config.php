<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

foreach (glob("/etc/moodle.d/*.php") as $filename) {
    require_once $filename;
}
