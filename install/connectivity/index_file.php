<?='<?'?>

$debug = false;

try{
    date_default_timezone_set('<?=(in_array($this->timezone, DateTimeZone::listIdentifiers()))?$this->timezone:'Europe/Riga'?>');
	define('APC_CACHE_PREFIX', '<?=$this->className?>::');

    define('CURRENT_ROOT_PATH', dirname(__FILE__));
    
    $scope = include 'oxygen/itself.php'; 
    session_start();
    $scope->strictMode();
    if(isset($_GET['generate']) && $_GET['generate'] == 1){
        $scope->Oxygen_Common_Module()->generateClasses('<?=$this->className?>');
    }else{
        handleHttpRequest($scope, '<?=$this->className?>', false, $debug);
    }
}catch(Exception $e){
	echo $e->getMessage();
}