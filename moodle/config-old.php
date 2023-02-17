<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'mariadb';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'dh169718-001.privatesql';
$CFG->dbname    = 'cehmoodle';
$CFG->dbuser    = 'cehmoodle';
$CFG->dbpass    = 'M0nProjet2021';
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => '35926',
  'dbsocket' => '',
  'dbcollation' => 'utf8mb4_general_ci',
);

$CFG->wwwroot   = 'https://elearning.ceh-uemoa.org';
$CFG->dataroot  = '/homez.1013/cehuems/www/public_html/ceh-elearning/moodledata';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
