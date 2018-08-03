<?php
/**
 * Main Menu on Header every Page
 * This class is to maintenance "main menu" inside table : simas_main_menu
 * @author akhyar azni
 *
 */
class Category extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->jenis = array(1=>'Dewasa',2=>'Anak','3'=>'Kuliah');
	}
	
	final function detail(){
		$db = $this->db->get('cikini_category');
		$rowdata = $db->result();

		$result = NULL;
		if(!empty($rowdata)){
			foreach ($rowdata as $idx => $val) {
				$result[$val->cc_id] = $val->cc_name;
			}
		}

		return $result;
	}
}