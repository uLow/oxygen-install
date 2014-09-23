<?="<?"?>    

    class TPRO extends Oxygen_Common_Application {
        public $company, $auth;
        public $oracle = null;

        public function oracleRunQuery(){
            if($this->oracle === null){
                $this->oracle = $this->scope->Oxygen_SQL_Connection_Oracle(include('config/oracle_config.php'), false); 
            }
            $func_args = func_get_args();
            array_shift($func_args);
            return call_user_func_array(array($this->oracle, 'runQuery'), $func_args);
        }
        
        public function initDb(){
            $this->scope->loader->scope->__callable('oracleRunQuery', array($this, 'oracleRunQuery'));
            $this->scope->loader->scope->connection = $this->scope->Oxygen_SQL_Connection_Mysql(include('config/mysql_config.php'), true);
            $this->scope->loader->scope->user_acs = $this->scope->Oxygen_SQL_Connection_Mysql(include('config/user_acs_config.php'), false);
            $this->scope->CONST_3d_key = '61543B3526682F31216E426825302B2A2D3736283D79475A';
            $this->scope->CONST_3d_prefix = 'MDE0201';
        }
        
        public function initAuthenticator(){
            $this->scope->register('Authenticator','TPRO_Admin_Auth');
            $this->auth = $this->scope->__authenticated();
        }
        
        public function init(){
            //$this->scope->logger = $this->scope->Oxygen_Logger();
            $this->scope->TPRO = $this;
            //you can extend Oxygen_Language to unifique lang files
            //$this->configureLanguages('TPRO_Online_Language');
            $this->initDb();
            $this->initAuthenticator();
            $this->scope->EncDec = $this->scope->TPRO_Online_EncDec(
                $this->scope->CONST_3d_key, 
                $this->scope->CONST_3d_prefix
                );
            
            $this->scope->register('iws','TPRO_Online_IWS');
            $this->scope->ROOT_URI = $this->go();
        }

        public function __complete() {
            $this->init();
            $this->company = 'Transact PRO';
        }

        public function configure($x) {
            if ($this->auth->role) {            
                //if (count(array_intersect(array('admin'), $this->auth->roles))) $x['ams']->TPRO_AMS();
                //if (count(array_intersect(array('admin'), $this->auth->roles))) $x['admin']->TPRO_Admin();
                //if (count(array_intersect(array('admin'), $this->auth->roles))) $x['online']->TPRO_Online();
            }
            $x['{x:any}']->Oxygen_Common_LogonPage('login');
        }

        public function __toString() {
            return 'Back office prototype';
        }
    }

?>