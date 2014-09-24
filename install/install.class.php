<?       

    class Install extends Oxygen_Common_Application {
        public $company, $auth;
        public $oracle = null;

        public function getIcon(){
        	return 'wrench';
        }
        
        public function init(){
            $this->scope->APP = $this;
            $this->scope->ROOT_URI = $this->go();
            $this->auth = $this->scope->__authenticated();
        }

        public function __complete() {
            if(!isset($_SESSION['current_install_step'])){
                $_SESSION['current_install_step'] = '_prepare';
            }
            $this->init();
            $this->company = 'Oxygen Install';
        }

        public function configure($x) {
            $x['_prepare']->Install_Prepare();
            $x['_connectivity']->Install_Connectivity();
            $x['{x:any}']->Install_Prepare();
        }

        public function __toString() {
            return $this->company;
        }
    }