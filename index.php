<?
set_time_limit(0);

$debug = false;

try{
    date_default_timezone_set('Europe/Riga');
	define('APC_CACHE_PREFIX', 'Install::');

    define('CURRENT_ROOT_PATH', dirname(__FILE__));
    
    $scope = include 'oxygen/itself.php'; 
    session_start();
    $scope->strictMode();
    handleHttpRequest($scope,'Install', false, $debug);
}catch(Exception $e){
	echo $e->getMessage();
}