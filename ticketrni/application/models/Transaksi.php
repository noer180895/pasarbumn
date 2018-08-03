<?php
/**
 * Main Menu on Header every Page
 * This class is to maintenance "main menu" inside table : simas_main_menu
 * @author akhyar azni
 *
 */
class Transaksi extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->jenis = array(1=>'Dewasa',2=>'Anak','3'=>'Kuliah');
	}
	
	final function detail(){
		$db = $this->db->get('cikini_transaksi');
		$rowdata = $db->result();
		return $rowdata;
	}
}