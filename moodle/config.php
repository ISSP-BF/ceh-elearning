<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'mariadb';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'localhost';
$CFG->dbname    = 'moodle';
$CFG->dbuser    = 'moodle';
$CFG->dbpass    = 'M0nProjet2021';
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => '',
  'dbsocket' => '',
  'dbcollation' => 'utf8mb4_general_ci',
);

$CFG->wwwroot   = 'https://elearning.ceh-uemoa.org';
//$CFG->wwwroot   = 'http://elearning.ceh-uemoa.org';
//$CFG->wwwroot   = 'http://51.178.18.128:9001';
//http://51.178.18.128:9000/
$CFG->dataroot  = '/homez.1013/cehuems/www/public_html/ceh-elearning/moodledata';
$CFG->dataroot  = '/home/elearning/elearning/moodledata';


$CFG->admin     = 'admin';
//$CFG->admin     = 'debian';

$CFG->directorypermissions = 0777;

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!

