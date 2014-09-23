<?
	class Install_Prepare extends Oxygen_Controller {
		public $databases = array();

		public function __toString(){
			return 'Prepare';
		}

		public function __complete(){
			$this->databases = array(
				'mysql' => array(
					'name' => 'MySQL',
					'fields' => array(
						'host' => 'Host',
						'user' => 'Username',
						'pass' => 'Password',
						'uses' => 'Tables to use'
					)
				),
				'oracle' => array(
					'name' => 'Oracle',
					'fields' => array(
						'host' => 'Host',
						'host-schema' => 'Schema to use',
						'user' => 'Username',
						'pass' => 'Password',
						'uses' => 'Tables to use'
					)
				),
			);
		}

		public function rpc_prepare($args){
			$_SESSION['prepare'] = array(
				'app' => $args->app,
				'databases' => $args->databases
			);
			return $this->scope->APP['_connectivity']->embed_view();
		}
	}