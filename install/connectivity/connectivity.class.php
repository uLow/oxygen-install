<?
	class Install_Connectivity extends Oxygen_Controller {
		public $error = array();
		public function __toString(){
			return 'Check connectivity';
		}

		public function __complete(){
			$this->appName = isset($_SESSION['prepare']['app']->name) ? $_SESSION['prepare']['app']->name : null;
			$this->timezone = isset($_SESSION['prepare']['app']->timezone) ? $_SESSION['prepare']['app']->timezone : null;
			$this->className = preg_replace('/[^_0-9a-z]+/i','',ucfirst((isset($_SESSION['prepare']['app']->class))?$_SESSION['prepare']['app']->class:''));
			$this->databases = isset($_SESSION['prepare']['databases']) ? $_SESSION['prepare']['databases'] : null;
		}

		public function checkDatabases(){
			$connections = array();
			$configs = array();
			foreach($this->databases as $_db=>$conf){
				$db = preg_replace('/[^-_0-9a-z]+/i', '', $_db);
				$connect = "Oxygen_SQL_Connection_".ucfirst($db);
				$config = (array)$conf;
				$uses = explode(',', $config['uses']);
				$config['uses'] = array();
				foreach($uses as $use){
					$config['uses'][] = trim($use);
				}
				try{
					$connections[$db] = $this->scope->$connect($config, true);
					$configs[$db] = $config;
				}catch(Exception $e){
					$this->error['connectivity'][$db] = preg_replace('/ in .* at line .* in template .*/i', '', $e->getMessage());
				}
			}
			if(!isset($this->error['connectivity'])){
				$_SESSION['connectivity']['configs'] = $configs;
			}
		}

		public function createApplication(){
			$curDir = getcwd();

			$className = $this->className;

			$path = $this->scope->loader->pathFor($className, false, false);

			$pathToCreate = str_replace($curDir.'/', '', $path);

			$curCreatedPath = $curDir;

			$parts = explode('/', $pathToCreate);
			$filename = $parts[count($parts)-1];
			unset($parts[count($parts)-1]);
			foreach($parts as $k=>$part){
				$curCreatedPath .= '/'.$part;
				if(!file_exists($curCreatedPath)){
					mkdir($curCreatedPath);
				}
			}

			//if(!file_exists($curCreatedPath.'/'.$filename)){
				file_put_contents($curCreatedPath.'/'.$filename, $this->get_app());
			//}

			if(isset($_SESSION['connectivity']['configs']) && count($_SESSION['connectivity']['configs'])>0){
				foreach($_SESSION['connectivity']['configs'] as $db=>$config){
					if(!file_exists($curCreatedPath.'/config')){
						mkdir($curCreatedPath.'/config');
					}

					//if(!file_exists($curCreatedPath.'/config/'.$db.'_config.php')){
						file_put_contents($curCreatedPath.'/config/'.$db.'_config.php', '<? return '.var_export($config, 1).';');
					//}
				}
			}
		}

		public function cancelApplication(){
			$curDir = getcwd();

			$className = $this->className;

			$path = $this->scope->loader->pathFor($className, false, false);

			$pathToCreate = str_replace($curDir.'/', '', $path);

			$curCreatedPath = $curDir;

			$parts = explode('/', $pathToCreate);
			$filename = $parts[count($parts)-1];
			unset($parts[count($parts)-1]);

			$this->rrmdir(implode('/', $parts));
			var_dump($curDir);
		}

		public function rrmdir($dir){
			if(is_dir($dir)){ 
				$objects = scandir($dir); 
				foreach($objects as $object){ 
					if($object != "." && $object != ".."){ 
						if(filetype($dir."/".$object) == "dir")
							$this->rrmdir($dir."/".$object); 
						else 
							unlink($dir."/".$object); 
					} 
				} 
				reset($objects); 
				rmdir($dir); 
			}
		}

		public function rpc_finish($args){
			$curDir = getcwd();
			file_put_contents($curDir.'/index.php', $this->get_index_file());
		}

		public function validate(){
			if(!isset($this->appName)){
				$this->error['appName']['not_set'] = 'App name not set';
			}
			if(!isset($this->className)){
				$this->error['className']['not_set'] = 'Class name not set';
			}

			foreach($this->databases as $db=>$config){
				foreach($config as $k=>$v){
					if(empty($v)){
						$this->error['databases'][$db][$k] = 'must be set';
					}
				}
			}

			if(!(strlen($this->appName) >= 3)){
				$this->error['appName']['length'] = 'App name must be at least 3 symbols';
			}

			if(!(strlen($this->className) >= 3)){
				$this->error['className']['length'] = 'Class name must be at least 3 symbols';
			}

			return !(count($this->error)>0);
		}

		public function rpc_back($args){
			$this->cancelApplication();
			return $this->scope->APP['_prepare']->embed_view();
		}
	}