<?php
unset($CFG);
global $CFG;
$CFG = new stdClass();
$CFG->dbtype    = 'mysqli';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'mysql';  //É o nome do serviço do docker-compose.yml
$CFG->dbname    = 'moodle'; //Nome do banco criado pelo docker-compose.yml
$CFG->dbuser    = 'moodleuser'; //Nome do usuário criado pelo docker-compose.yml
$CFG->dbpass    = 'moodlepassword'; //Senha usada pelo banco criado pelo docker-compose.yml
$CFG->prefix    = 'm_';
$CFG->dboptions = array (
    'dbpersist' => 0,
    'dbport' => '',
    'dbcollation' => 'utf8mb4_0900_ai_ci',
);
$CFG->dataroot  	        = '/var/moodle_shared/moodledata';
$CFG->localcachedir 	    = '/tmp/';
$CFG->dirroot 		        = '/var/www/html/ava';
$CFG->admin     	        = 'admin';
$CFG->wwwroot   	        = 'http://localhost/ava';
$CFG->forcelogin               = true;
$CFG->preventfilelocking    = true;
$CFG->directorypermissions  = 0777;
$CFG->upgradekey 	        = 'develop';
$CFG->session_update_timemodified_frequency = 50;
$CFG->noemaillever = true;

/* -=-=- MODELO ANTIGO DO ANTIGO MOODLE (Ainda pode ser usado no futuro como uma referência)-=-=-=-=-=-=-=-=-
 *
CFG->disablelogintoken = true;
sslproxy = true;
$CFG->dbsessions = false;
// Memcached session handler (requires memcached server and extension):
$CFG->session_handler_class = '\core\session\memcached';
$CFG->session_memcached_save_path = '172.20.100.218:11211';
$CFG->session_memcached_prefix = 'moodledev.localhost.sess.key.';
$CFG->session_memcached_acquire_lock_timeout = 120;
$CFG->session_memcached_lock_expire = 7200;
$CFG->session_memcached_lock_retry_sleep = 150;
// No emails
// Debug
@error_reporting (E_ALL | E_STRICT);
@ini_set ('display_errors', '1');
$CFG-> debug = (E_ALL | E_STRICT);
$CFG-> debugdisplay = 1;
	-=-=-=-=--=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=--==-=-=-=-=-=-=-=-= */

require_once(__DIR__ . '/lib/setup.php');

