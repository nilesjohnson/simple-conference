<?php
App::uses('AppModel', 'Model');


class CcData extends AppModel {
  var $name = 'CcData';
  var $useTable = false;
  var $belongsTo = array('Registrant');
  var $_schema = array(
		       'from' => array('type'=>'string', 'length'=>100), 
		       'to' => array('type'=>'string', 'length'=>255), 
		       'subject' => array('type'=>'string', 'length'=>255), 
		       'body' =>array('type'=>'text')
    );

  var $validate = array(
			'from' => array(
					'rule'=>'notEmpty', 
					'message'=>'Please supply a valid from address.' ),
			'to' => array(
				      'rule'=>'multiEmail', 
				      'message'=>'Please supply a comma-separated list of valid email addresses.'
				      ),
			'subject' => array(
					 'rule'=>'notEmpty', 
					 'message'=>'Please supply a subject.' ),
			'body' => array(
					   'rule'=>array('minLength', 1), 
					   'message'=>'Email body is required.  If you do not want to forward this announcement, leave the To: field blank.' )
			);
  // duplicates multiEmail function below
  function multiEmail($check) {
    $email_list = split(',',$check['to']);
    $V = new Validation();
    foreach ($email_list as $email) {
      if (!$V->email(trim($email))) {
	return false;
      }
    }
    return true;
  }
}




/**
 * Registrant Model
 *
 */
class Registrant extends AppModel {

  public $displayField = 'name';
  public $name = 'Registrant';
  /*  public $virtualFields = array(
				'first_name' => 
	"IF(
	LOCATE(' ', Registrant.name) > 0,
	SUBSTRING(Registrant.name, 1, LOCATE(' ', Registrant.name) - 1),
        Registrant.name
        )",
				'last_name' =>
        "IF(
        LOCATE(' ', Registrant.name) > 0,
        SUBSTRING(Registrant.name, LOCATE(' ', Registrant.name) + 1),
        NULL
        )",
				);
  */
  public $validate = array(
			   'name' => array(
					   'rule' => 'notEmpty'
					   ),
			   //'institution' => array(
			   //'rule' => 'notEmpty',
			   //'message' => 'testing institution'
			   //),
			   'webpage' => array(
					      'rule' => 'emptyOrUrl',
					      'message' => 'Please supply a valid url or leave blank.',
					      ),
			   'email' => array(
					    'rule' => 'email',
					    'message' => 'Please supply a valid email address; this will never be displayed publicly.'
					    ),
			   'captcha' => array(
					      'rule' => 'notEmpty',
					      ),
			   );

  function emptyOrUrl($input) {
    if (!$input['webpage']) {
      return true;
    }
    $V = new Validation();
    return $V->url($input['webpage']);
  }

  public function notEqualTo($input,$value) {
    $input_values = array_values($input);
    return ((bool) strcmp($input_values[0],$value));
  }

  public function beforeSave($options = array()) {
    // add http:// if not present in webpage
    $webpage = $this->data['Registrant']['webpage'];
    $V = new Validation();
    if (!empty($webpage) && $V->url($webpage) && !$V->url($webpage,true)) {
      $this->data['Registrant']['webpage'] = 'http://'.$webpage;
    }
    
    // generate edit key
    if (empty($this->data['Registrant']['edit_key'])) {
      $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";	
      $this->data['Registrant']['edit_key'] = substr( str_shuffle( $chars ), 0, 8);
    }
    return true;
  }

  public function multiEmail($check) {
    $email_list = preg_split("/[\s,]+/",$check['contact_email']);
    $V = new Validation();
    foreach ($email_list as $email) {
      if (!$V->email(trim($email))) {
	return false;
      }
    }
    return true;
  }


}
