<?
    class TPRO_TestApp_Form_Userses_ extends Oxygen_Common_Forms {
        public function __construct($model = '*') {
            if($model === '*') {
                $model = TPRO_TestApp_Entity_Users::all();
            }
            parent::__construct($model);
        }

        public function getListFields() {
            return $model = TPRO_TestApp_Entity_Users::__getFields();
        }

        public function __toString() {
            //return 'Userses';
            return $this->_("userses");
        }

        public function getIcon() {
            return 'plugin';
        }

        public function configure($x) {
            $x['{users_id:int}']->TPRO_TestApp_Form_Users($this->getModel());
        }
    }