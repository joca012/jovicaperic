<?php 

/**
 * SharedController Controller
 * @category  Controller / Model
 */
class SharedController extends BaseController{
	
	/**
     * users1_usename_value_exist Model Action
     * @return array
     */
	function users1_usename_value_exist($val){
		$db = $this->GetModel();
		$db->where("usename", $val);
		$exist = $db->has("users1");
		return $exist;
	}

	/**
     * users1_email_value_exist Model Action
     * @return array
     */
	function users1_email_value_exist($val){
		$db = $this->GetModel();
		$db->where("email", $val);
		$exist = $db->has("users1");
		return $exist;
	}

}
