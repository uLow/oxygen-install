<?
    # WARNING: THIS CLASS HAS BEEN GENERATED !!!
    class TPRO_TestApp_Entity_Users_ extends Oxygen_Entity {

    private static $data_set = null;
    private static $data_source = null;

    public $database = 'ams';
    public $table = 'users';

    public static $field_users_id = null;
    public static $field_user_id = null;
    public static $field_password = null;
    public static $field_allow_old_auth = null;
    public static $field_locked = null;
    public static $field_name = null;
    public static $field_surname = null;
    public static $field_personal_code = null;
    public static $field_description = null;
    public static $field_cl_type = null;
    public static $field_main_ccy = null;
    public static $field_attorney = null;
    public static $field_last_visit = null;
    public static $field_current_visit = null;
    public static $field_next_document_nr = null;
    public static $field_contact_phone = null;
    public static $field_id_doc_number = null;
    public static $field_fail_auth_count = null;
    public static $field_hide_blocked_cards = null;
    public static $field_pref_lang = null;
    public static $field_pref_first_page = null;
    public static $field_allow_trx_outcome = null;
    public static $field_allow_trx_own_acc = null;
    public static $field_tfa_usage = null;

    private static $fields = array();
    public static function __getFields() {
        return self::$fields;
    }

    public function __getPattern() {
        return '{users_id:int}';
    }

    public function __getPrimaryKey($pattern = false) {
        if($pattern === false){
            return 'users_id';
        }else{
        
            return '{users_id:int}';
        }
    
    }

    public function __getField($name) {
        return self::$fields[$name];
    }

    public static function all() {
        return self::$data_source;
    }

    public function __toString() {
                        return '---';
    }

    public static function extendedConstructor(){
        // meant to add extra fields (non-database-based) in entity
    }

    public static function __class_construct($scope) {
        self::$data_set = $scope->connection['ams/users'];
        self::$data_set->scope->register('Row','TPRO_TestApp_Entity_Users');
                self::$data_source = self::$data_set->getData('_');
            
        self::$fields['users_id'] = self::$field_users_id = $scope->Oxygen_Field_Integer(
            'Users','users_id',
             array (
              'type' => 'integer',
              'readonly' => true,
            )  
        );
    
        self::$fields['user_id'] = self::$field_user_id = $scope->Oxygen_Field_String(
            'Users','user_id',
             array (
              'type' => 'string',
              'readonly' => false,
            )  
        );
    
        self::$fields['password'] = self::$field_password = $scope->Oxygen_Field_String(
            'Users','password',
             array (
              'type' => 'string',
              'readonly' => false,
            )  
        );
    
        self::$fields['allow_old_auth'] = self::$field_allow_old_auth = $scope->Oxygen_Field_Integer(
            'Users','allow_old_auth',
             array (
              'type' => 'integer',
              'readonly' => false,
            )  
        );
    
        self::$fields['locked'] = self::$field_locked = $scope->Oxygen_Field_Integer(
            'Users','locked',
             array (
              'type' => 'integer',
              'readonly' => false,
            )  
        );
    
        self::$fields['name'] = self::$field_name = $scope->Oxygen_Field_String(
            'Users','name',
             array (
              'type' => 'string',
              'readonly' => false,
            )  
        );
    
        self::$fields['surname'] = self::$field_surname = $scope->Oxygen_Field_String(
            'Users','surname',
             array (
              'type' => 'string',
              'readonly' => false,
            )  
        );
    
        self::$fields['personal_code'] = self::$field_personal_code = $scope->Oxygen_Field_String(
            'Users','personal_code',
             array (
              'type' => 'string',
              'readonly' => false,
            )  
        );
    
        self::$fields['description'] = self::$field_description = $scope->Oxygen_Field_String(
            'Users','description',
             array (
              'type' => 'string',
              'readonly' => false,
            )  
        );
    
        self::$fields['cl_type'] = self::$field_cl_type = $scope->Oxygen_Field_Integer(
            'Users','cl_type',
             array (
              'type' => 'integer',
              'readonly' => false,
            )  
        );
    
        self::$fields['main_ccy'] = self::$field_main_ccy = $scope->Oxygen_Field_String(
            'Users','main_ccy',
             array (
              'type' => 'string',
              'readonly' => false,
            )  
        );
    
        self::$fields['attorney'] = self::$field_attorney = $scope->Oxygen_Field_Integer(
            'Users','attorney',
             array (
              'type' => 'integer',
              'readonly' => false,
            )  
        );
    
        self::$fields['last_visit'] = self::$field_last_visit = $scope->Oxygen_Field_Integer(
            'Users','last_visit',
             array (
              'type' => 'integer',
              'readonly' => false,
            )  
        );
    
        self::$fields['current_visit'] = self::$field_current_visit = $scope->Oxygen_Field_Integer(
            'Users','current_visit',
             array (
              'type' => 'integer',
              'readonly' => false,
            )  
        );
    
        self::$fields['next_document_nr'] = self::$field_next_document_nr = $scope->Oxygen_Field_Integer(
            'Users','next_document_nr',
             array (
              'type' => 'integer',
              'readonly' => false,
            )  
        );
    
        self::$fields['contact_phone'] = self::$field_contact_phone = $scope->Oxygen_Field_String(
            'Users','contact_phone',
             array (
              'type' => 'string',
              'readonly' => false,
            )  
        );
    
        self::$fields['id_doc_number'] = self::$field_id_doc_number = $scope->Oxygen_Field_String(
            'Users','id_doc_number',
             array (
              'type' => 'string',
              'readonly' => false,
            )  
        );
    
        self::$fields['fail_auth_count'] = self::$field_fail_auth_count = $scope->Oxygen_Field_Integer(
            'Users','fail_auth_count',
             array (
              'type' => 'integer',
              'readonly' => false,
            )  
        );
    
        self::$fields['hide_blocked_cards'] = self::$field_hide_blocked_cards = $scope->Oxygen_Field_Integer(
            'Users','hide_blocked_cards',
             array (
              'type' => 'integer',
              'readonly' => false,
            )  
        );
    
        self::$fields['pref_lang'] = self::$field_pref_lang = $scope->Oxygen_Field_String(
            'Users','pref_lang',
             array (
              'type' => 'string',
              'readonly' => false,
            )  
        );
    
        self::$fields['pref_first_page'] = self::$field_pref_first_page = $scope->Oxygen_Field_String(
            'Users','pref_first_page',
             array (
              'type' => 'string',
              'readonly' => false,
            )  
        );
    
        self::$fields['allow_trx_outcome'] = self::$field_allow_trx_outcome = $scope->Oxygen_Field_Integer(
            'Users','allow_trx_outcome',
             array (
              'type' => 'integer',
              'readonly' => false,
            )  
        );
    
        self::$fields['allow_trx_own_acc'] = self::$field_allow_trx_own_acc = $scope->Oxygen_Field_Integer(
            'Users','allow_trx_own_acc',
             array (
              'type' => 'integer',
              'readonly' => false,
            )  
        );
    
        self::$fields['tfa_usage'] = self::$field_tfa_usage = $scope->Oxygen_Field_String(
            'Users','tfa_usage',
             array (
              'type' => 'string',
              'readonly' => false,
            )  
        );
      
        self::extendedConstructor();  
    }


        public function putUsersId($tpl='short', $args=array()) {
        	array_unshift($args, self::$field_users_id[$this]);
        	self::$field_users_id->put_($tpl, $args);
        }  

        public function _getUsersId($tpl='short', $args=array()) {
            array_unshift($args, self::$field_users_id[$this]);
            return self::$field_users_id->get_($tpl, $args);
        } 

        public function extUsersId($args=array()) {
            if(!is_array($args)){
                $args = (array)$args;
            }
        	array_unshift($args, $this['users_id']);
        	return self::$field_users_id->get_('extended_field', $args);
        }        

        public function getUsersId() {
            return self::$field_users_id[$this];
        }

        public function putUserId($tpl='short', $args=array()) {
        	array_unshift($args, self::$field_user_id[$this]);
        	self::$field_user_id->put_($tpl, $args);
        }  

        public function _getUserId($tpl='short', $args=array()) {
            array_unshift($args, self::$field_user_id[$this]);
            return self::$field_user_id->get_($tpl, $args);
        } 

        public function extUserId($args=array()) {
            if(!is_array($args)){
                $args = (array)$args;
            }
        	array_unshift($args, $this['user_id']);
        	return self::$field_user_id->get_('extended_field', $args);
        }        

        public function getUserId() {
            return self::$field_user_id[$this];
        }


        public function setUserId($user_id) {
            self::$field_user_id[$this] = $user_id;
        }

        public function putPassword($tpl='short', $args=array()) {
        	array_unshift($args, self::$field_password[$this]);
        	self::$field_password->put_($tpl, $args);
        }  

        public function _getPassword($tpl='short', $args=array()) {
            array_unshift($args, self::$field_password[$this]);
            return self::$field_password->get_($tpl, $args);
        } 

        public function extPassword($args=array()) {
            if(!is_array($args)){
                $args = (array)$args;
            }
        	array_unshift($args, $this['password']);
        	return self::$field_password->get_('extended_field', $args);
        }        

        public function getPassword() {
            return self::$field_password[$this];
        }


        public function setPassword($password) {
            self::$field_password[$this] = $password;
        }

        public function putAllowOldAuth($tpl='short', $args=array()) {
        	array_unshift($args, self::$field_allow_old_auth[$this]);
        	self::$field_allow_old_auth->put_($tpl, $args);
        }  

        public function _getAllowOldAuth($tpl='short', $args=array()) {
            array_unshift($args, self::$field_allow_old_auth[$this]);
            return self::$field_allow_old_auth->get_($tpl, $args);
        } 

        public function extAllowOldAuth($args=array()) {
            if(!is_array($args)){
                $args = (array)$args;
            }
        	array_unshift($args, $this['allow_old_auth']);
        	return self::$field_allow_old_auth->get_('extended_field', $args);
        }        

        public function getAllowOldAuth() {
            return self::$field_allow_old_auth[$this];
        }


        public function setAllowOldAuth($allow_old_auth) {
            self::$field_allow_old_auth[$this] = $allow_old_auth;
        }

        public function putLocked($tpl='short', $args=array()) {
        	array_unshift($args, self::$field_locked[$this]);
        	self::$field_locked->put_($tpl, $args);
        }  

        public function _getLocked($tpl='short', $args=array()) {
            array_unshift($args, self::$field_locked[$this]);
            return self::$field_locked->get_($tpl, $args);
        } 

        public function extLocked($args=array()) {
            if(!is_array($args)){
                $args = (array)$args;
            }
        	array_unshift($args, $this['locked']);
        	return self::$field_locked->get_('extended_field', $args);
        }        

        public function getLocked() {
            return self::$field_locked[$this];
        }


        public function setLocked($locked) {
            self::$field_locked[$this] = $locked;
        }

        public function putName($tpl='short', $args=array()) {
        	array_unshift($args, self::$field_name[$this]);
        	self::$field_name->put_($tpl, $args);
        }  

        public function _getName($tpl='short', $args=array()) {
            array_unshift($args, self::$field_name[$this]);
            return self::$field_name->get_($tpl, $args);
        } 

        public function extName($args=array()) {
            if(!is_array($args)){
                $args = (array)$args;
            }
        	array_unshift($args, $this['name']);
        	return self::$field_name->get_('extended_field', $args);
        }        

        public function getName() {
            return self::$field_name[$this];
        }


        public function setName($name) {
            self::$field_name[$this] = $name;
        }

        public function putSurname($tpl='short', $args=array()) {
        	array_unshift($args, self::$field_surname[$this]);
        	self::$field_surname->put_($tpl, $args);
        }  

        public function _getSurname($tpl='short', $args=array()) {
            array_unshift($args, self::$field_surname[$this]);
            return self::$field_surname->get_($tpl, $args);
        } 

        public function extSurname($args=array()) {
            if(!is_array($args)){
                $args = (array)$args;
            }
        	array_unshift($args, $this['surname']);
        	return self::$field_surname->get_('extended_field', $args);
        }        

        public function getSurname() {
            return self::$field_surname[$this];
        }


        public function setSurname($surname) {
            self::$field_surname[$this] = $surname;
        }

        public function putPersonalCode($tpl='short', $args=array()) {
        	array_unshift($args, self::$field_personal_code[$this]);
        	self::$field_personal_code->put_($tpl, $args);
        }  

        public function _getPersonalCode($tpl='short', $args=array()) {
            array_unshift($args, self::$field_personal_code[$this]);
            return self::$field_personal_code->get_($tpl, $args);
        } 

        public function extPersonalCode($args=array()) {
            if(!is_array($args)){
                $args = (array)$args;
            }
        	array_unshift($args, $this['personal_code']);
        	return self::$field_personal_code->get_('extended_field', $args);
        }        

        public function getPersonalCode() {
            return self::$field_personal_code[$this];
        }


        public function setPersonalCode($personal_code) {
            self::$field_personal_code[$this] = $personal_code;
        }

        public function putDescription($tpl='short', $args=array()) {
        	array_unshift($args, self::$field_description[$this]);
        	self::$field_description->put_($tpl, $args);
        }  

        public function _getDescription($tpl='short', $args=array()) {
            array_unshift($args, self::$field_description[$this]);
            return self::$field_description->get_($tpl, $args);
        } 

        public function extDescription($args=array()) {
            if(!is_array($args)){
                $args = (array)$args;
            }
        	array_unshift($args, $this['description']);
        	return self::$field_description->get_('extended_field', $args);
        }        

        public function getDescription() {
            return self::$field_description[$this];
        }


        public function setDescription($description) {
            self::$field_description[$this] = $description;
        }

        public function putClType($tpl='short', $args=array()) {
        	array_unshift($args, self::$field_cl_type[$this]);
        	self::$field_cl_type->put_($tpl, $args);
        }  

        public function _getClType($tpl='short', $args=array()) {
            array_unshift($args, self::$field_cl_type[$this]);
            return self::$field_cl_type->get_($tpl, $args);
        } 

        public function extClType($args=array()) {
            if(!is_array($args)){
                $args = (array)$args;
            }
        	array_unshift($args, $this['cl_type']);
        	return self::$field_cl_type->get_('extended_field', $args);
        }        

        public function getClType() {
            return self::$field_cl_type[$this];
        }


        public function setClType($cl_type) {
            self::$field_cl_type[$this] = $cl_type;
        }

        public function putMainCcy($tpl='short', $args=array()) {
        	array_unshift($args, self::$field_main_ccy[$this]);
        	self::$field_main_ccy->put_($tpl, $args);
        }  

        public function _getMainCcy($tpl='short', $args=array()) {
            array_unshift($args, self::$field_main_ccy[$this]);
            return self::$field_main_ccy->get_($tpl, $args);
        } 

        public function extMainCcy($args=array()) {
            if(!is_array($args)){
                $args = (array)$args;
            }
        	array_unshift($args, $this['main_ccy']);
        	return self::$field_main_ccy->get_('extended_field', $args);
        }        

        public function getMainCcy() {
            return self::$field_main_ccy[$this];
        }


        public function setMainCcy($main_ccy) {
            self::$field_main_ccy[$this] = $main_ccy;
        }

        public function putAttorney($tpl='short', $args=array()) {
        	array_unshift($args, self::$field_attorney[$this]);
        	self::$field_attorney->put_($tpl, $args);
        }  

        public function _getAttorney($tpl='short', $args=array()) {
            array_unshift($args, self::$field_attorney[$this]);
            return self::$field_attorney->get_($tpl, $args);
        } 

        public function extAttorney($args=array()) {
            if(!is_array($args)){
                $args = (array)$args;
            }
        	array_unshift($args, $this['attorney']);
        	return self::$field_attorney->get_('extended_field', $args);
        }        

        public function getAttorney() {
            return self::$field_attorney[$this];
        }


        public function setAttorney($attorney) {
            self::$field_attorney[$this] = $attorney;
        }

        public function putLastVisit($tpl='short', $args=array()) {
        	array_unshift($args, self::$field_last_visit[$this]);
        	self::$field_last_visit->put_($tpl, $args);
        }  

        public function _getLastVisit($tpl='short', $args=array()) {
            array_unshift($args, self::$field_last_visit[$this]);
            return self::$field_last_visit->get_($tpl, $args);
        } 

        public function extLastVisit($args=array()) {
            if(!is_array($args)){
                $args = (array)$args;
            }
        	array_unshift($args, $this['last_visit']);
        	return self::$field_last_visit->get_('extended_field', $args);
        }        

        public function getLastVisit() {
            return self::$field_last_visit[$this];
        }


        public function setLastVisit($last_visit) {
            self::$field_last_visit[$this] = $last_visit;
        }

        public function putCurrentVisit($tpl='short', $args=array()) {
        	array_unshift($args, self::$field_current_visit[$this]);
        	self::$field_current_visit->put_($tpl, $args);
        }  

        public function _getCurrentVisit($tpl='short', $args=array()) {
            array_unshift($args, self::$field_current_visit[$this]);
            return self::$field_current_visit->get_($tpl, $args);
        } 

        public function extCurrentVisit($args=array()) {
            if(!is_array($args)){
                $args = (array)$args;
            }
        	array_unshift($args, $this['current_visit']);
        	return self::$field_current_visit->get_('extended_field', $args);
        }        

        public function getCurrentVisit() {
            return self::$field_current_visit[$this];
        }


        public function setCurrentVisit($current_visit) {
            self::$field_current_visit[$this] = $current_visit;
        }

        public function putNextDocumentNr($tpl='short', $args=array()) {
        	array_unshift($args, self::$field_next_document_nr[$this]);
        	self::$field_next_document_nr->put_($tpl, $args);
        }  

        public function _getNextDocumentNr($tpl='short', $args=array()) {
            array_unshift($args, self::$field_next_document_nr[$this]);
            return self::$field_next_document_nr->get_($tpl, $args);
        } 

        public function extNextDocumentNr($args=array()) {
            if(!is_array($args)){
                $args = (array)$args;
            }
        	array_unshift($args, $this['next_document_nr']);
        	return self::$field_next_document_nr->get_('extended_field', $args);
        }        

        public function getNextDocumentNr() {
            return self::$field_next_document_nr[$this];
        }


        public function setNextDocumentNr($next_document_nr) {
            self::$field_next_document_nr[$this] = $next_document_nr;
        }

        public function putContactPhone($tpl='short', $args=array()) {
        	array_unshift($args, self::$field_contact_phone[$this]);
        	self::$field_contact_phone->put_($tpl, $args);
        }  

        public function _getContactPhone($tpl='short', $args=array()) {
            array_unshift($args, self::$field_contact_phone[$this]);
            return self::$field_contact_phone->get_($tpl, $args);
        } 

        public function extContactPhone($args=array()) {
            if(!is_array($args)){
                $args = (array)$args;
            }
        	array_unshift($args, $this['contact_phone']);
        	return self::$field_contact_phone->get_('extended_field', $args);
        }        

        public function getContactPhone() {
            return self::$field_contact_phone[$this];
        }


        public function setContactPhone($contact_phone) {
            self::$field_contact_phone[$this] = $contact_phone;
        }

        public function putIdDocNumber($tpl='short', $args=array()) {
        	array_unshift($args, self::$field_id_doc_number[$this]);
        	self::$field_id_doc_number->put_($tpl, $args);
        }  

        public function _getIdDocNumber($tpl='short', $args=array()) {
            array_unshift($args, self::$field_id_doc_number[$this]);
            return self::$field_id_doc_number->get_($tpl, $args);
        } 

        public function extIdDocNumber($args=array()) {
            if(!is_array($args)){
                $args = (array)$args;
            }
        	array_unshift($args, $this['id_doc_number']);
        	return self::$field_id_doc_number->get_('extended_field', $args);
        }        

        public function getIdDocNumber() {
            return self::$field_id_doc_number[$this];
        }


        public function setIdDocNumber($id_doc_number) {
            self::$field_id_doc_number[$this] = $id_doc_number;
        }

        public function putFailAuthCount($tpl='short', $args=array()) {
        	array_unshift($args, self::$field_fail_auth_count[$this]);
        	self::$field_fail_auth_count->put_($tpl, $args);
        }  

        public function _getFailAuthCount($tpl='short', $args=array()) {
            array_unshift($args, self::$field_fail_auth_count[$this]);
            return self::$field_fail_auth_count->get_($tpl, $args);
        } 

        public function extFailAuthCount($args=array()) {
            if(!is_array($args)){
                $args = (array)$args;
            }
        	array_unshift($args, $this['fail_auth_count']);
        	return self::$field_fail_auth_count->get_('extended_field', $args);
        }        

        public function getFailAuthCount() {
            return self::$field_fail_auth_count[$this];
        }


        public function setFailAuthCount($fail_auth_count) {
            self::$field_fail_auth_count[$this] = $fail_auth_count;
        }

        public function putHideBlockedCards($tpl='short', $args=array()) {
        	array_unshift($args, self::$field_hide_blocked_cards[$this]);
        	self::$field_hide_blocked_cards->put_($tpl, $args);
        }  

        public function _getHideBlockedCards($tpl='short', $args=array()) {
            array_unshift($args, self::$field_hide_blocked_cards[$this]);
            return self::$field_hide_blocked_cards->get_($tpl, $args);
        } 

        public function extHideBlockedCards($args=array()) {
            if(!is_array($args)){
                $args = (array)$args;
            }
        	array_unshift($args, $this['hide_blocked_cards']);
        	return self::$field_hide_blocked_cards->get_('extended_field', $args);
        }        

        public function getHideBlockedCards() {
            return self::$field_hide_blocked_cards[$this];
        }


        public function setHideBlockedCards($hide_blocked_cards) {
            self::$field_hide_blocked_cards[$this] = $hide_blocked_cards;
        }

        public function putPrefLang($tpl='short', $args=array()) {
        	array_unshift($args, self::$field_pref_lang[$this]);
        	self::$field_pref_lang->put_($tpl, $args);
        }  

        public function _getPrefLang($tpl='short', $args=array()) {
            array_unshift($args, self::$field_pref_lang[$this]);
            return self::$field_pref_lang->get_($tpl, $args);
        } 

        public function extPrefLang($args=array()) {
            if(!is_array($args)){
                $args = (array)$args;
            }
        	array_unshift($args, $this['pref_lang']);
        	return self::$field_pref_lang->get_('extended_field', $args);
        }        

        public function getPrefLang() {
            return self::$field_pref_lang[$this];
        }


        public function setPrefLang($pref_lang) {
            self::$field_pref_lang[$this] = $pref_lang;
        }

        public function putPrefFirstPage($tpl='short', $args=array()) {
        	array_unshift($args, self::$field_pref_first_page[$this]);
        	self::$field_pref_first_page->put_($tpl, $args);
        }  

        public function _getPrefFirstPage($tpl='short', $args=array()) {
            array_unshift($args, self::$field_pref_first_page[$this]);
            return self::$field_pref_first_page->get_($tpl, $args);
        } 

        public function extPrefFirstPage($args=array()) {
            if(!is_array($args)){
                $args = (array)$args;
            }
        	array_unshift($args, $this['pref_first_page']);
        	return self::$field_pref_first_page->get_('extended_field', $args);
        }        

        public function getPrefFirstPage() {
            return self::$field_pref_first_page[$this];
        }


        public function setPrefFirstPage($pref_first_page) {
            self::$field_pref_first_page[$this] = $pref_first_page;
        }

        public function putAllowTrxOutcome($tpl='short', $args=array()) {
        	array_unshift($args, self::$field_allow_trx_outcome[$this]);
        	self::$field_allow_trx_outcome->put_($tpl, $args);
        }  

        public function _getAllowTrxOutcome($tpl='short', $args=array()) {
            array_unshift($args, self::$field_allow_trx_outcome[$this]);
            return self::$field_allow_trx_outcome->get_($tpl, $args);
        } 

        public function extAllowTrxOutcome($args=array()) {
            if(!is_array($args)){
                $args = (array)$args;
            }
        	array_unshift($args, $this['allow_trx_outcome']);
        	return self::$field_allow_trx_outcome->get_('extended_field', $args);
        }        

        public function getAllowTrxOutcome() {
            return self::$field_allow_trx_outcome[$this];
        }


        public function setAllowTrxOutcome($allow_trx_outcome) {
            self::$field_allow_trx_outcome[$this] = $allow_trx_outcome;
        }

        public function putAllowTrxOwnAcc($tpl='short', $args=array()) {
        	array_unshift($args, self::$field_allow_trx_own_acc[$this]);
        	self::$field_allow_trx_own_acc->put_($tpl, $args);
        }  

        public function _getAllowTrxOwnAcc($tpl='short', $args=array()) {
            array_unshift($args, self::$field_allow_trx_own_acc[$this]);
            return self::$field_allow_trx_own_acc->get_($tpl, $args);
        } 

        public function extAllowTrxOwnAcc($args=array()) {
            if(!is_array($args)){
                $args = (array)$args;
            }
        	array_unshift($args, $this['allow_trx_own_acc']);
        	return self::$field_allow_trx_own_acc->get_('extended_field', $args);
        }        

        public function getAllowTrxOwnAcc() {
            return self::$field_allow_trx_own_acc[$this];
        }


        public function setAllowTrxOwnAcc($allow_trx_own_acc) {
            self::$field_allow_trx_own_acc[$this] = $allow_trx_own_acc;
        }

        public function putTfaUsage($tpl='short', $args=array()) {
        	array_unshift($args, self::$field_tfa_usage[$this]);
        	self::$field_tfa_usage->put_($tpl, $args);
        }  

        public function _getTfaUsage($tpl='short', $args=array()) {
            array_unshift($args, self::$field_tfa_usage[$this]);
            return self::$field_tfa_usage->get_($tpl, $args);
        } 

        public function extTfaUsage($args=array()) {
            if(!is_array($args)){
                $args = (array)$args;
            }
        	array_unshift($args, $this['tfa_usage']);
        	return self::$field_tfa_usage->get_('extended_field', $args);
        }        

        public function getTfaUsage() {
            return self::$field_tfa_usage[$this];
        }


        public function setTfaUsage($tfa_usage) {
            self::$field_tfa_usage[$this] = $tfa_usage;
        }


    }

    

