<?="<?"?>    
    class <?=$this->className?> extends Oxygen_Common_Application {
        public $company, $auth;
<?if(isset($_SESSION['connectivity']['configs']['oracle'])){?>
        public $oracle = null;

        public function oracleRunQuery(){
            if($this->oracle === null){
                $this->oracle = $this->scope->Oxygen_SQL_Connection_Oracle(include('config/oracle_config.php'), false); 
            }
            $func_args = func_get_args();
            array_shift($func_args);
            return call_user_func_array(array($this->oracle, 'runQuery'), $func_args);
        }
<?}?>
        
        public function initDb(){
<?if(isset($_SESSION['connectivity']['configs']['mysql'])){?>
            $this->scope->loader->scope->connection = $this->scope->Oxygen_SQL_Connection_Mysql(include('config/mysql_config.php'), true);
<?}?>
<?if(isset($_SESSION['connectivity']['configs']['oracle'])){?>
            $this->scope->loader->scope->__callable('oracleRunQuery', array($this, 'oracleRunQuery'));
<?}?>
        }
        
        public function initAuthenticator(){
            $this->scope->register('Authenticator','Oxygen_Common_Auth');
            $this->auth = $this->scope->__authenticated();
        }
        
        public function init(){
            //$this->scope->logger = $this->scope->Oxygen_Logger();
            $this->scope->APP = $this;

            //you can extend Oxygen_Language to unifique lang files
            //$this->configureLanguages('<?=$this->className?>_Language');
            $this->configureLanguages('Oxygen_Language');
            $this->initDb();
            $this->initAuthenticator();

            $this->scope->ROOT_URI = $this->go();
        }

        public function __complete() {
            $this->init();
            $this->company = '<?=addslashes($this->appName)?>';
        }

        public function configure($x) {
            $x['scheme-generator']->Oxygen_SchemeGenerator(get_class($this));
            $x['{x:any}']->Oxygen_Common_LogonPage('login');
        }

        public function __toString() {
            return $this->company;
        }
    }
