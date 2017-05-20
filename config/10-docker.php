<?php

$CFG->dbtype    = 'pgsql';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'postgres';
$CFG->dbname    = 'moodle';
$CFG->dbuser    = 'moodle';
$CFG->dbpass    = 'moodle';
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => '',
  'dbsocket' => '',
);

$CFG->wwwroot   = getenv('MOODLE_SERVER_URL') || 'http://localhost:8080';
$CFG->dataroot  = '/var/moodle_data';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
