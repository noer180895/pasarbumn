<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends MX_Controller {

	function __construct(){
	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function get_category($catId=NULL)
	{
		$this->load->model('category');
		$result = $this->category->detail();
		echo json_encode($result);exit;
	}

	public function add_category($catName)
	{
		$this->db->where(array('cc_name'=>$catName));
		$objdata = $this->db->get('cikini_category');
		$existing = $objdata->result();

		$result = FALSE;
		if(!$existing){
			$data = array('cc_name'=>$catName);
			$result = $this->db->insert('cikini_category',$data);
		}
		echo json_encode($result);exit;
	}

	public function edit_category($catId,$catName)
	{
		$this->db->where(array('cc_id'=>$catId));
		$data = array('cc_name'=>$catName);
		$result = $this->db->update('cikini_category',$data);
		echo json_encode($result);exit;
	}

	public function del_category($catId)
	{
		$this->db->where(array('cc_id'=>$catId));
		$result = $this->db->delete('cikini_category');
		echo json_encode($result);exit;
	}

	public function get_jenis()
	{
		$this->load->model('transaksi');
		echo json_encode($this->transaksi->jenis);exit;
	}

	public function get_investor($catId=NULL)
	{
		$db = $this->db->get('cikini_investor');
		$rowdata = $db->result();

		$result = NULL;
		if(!empty($rowdata)){
			foreach ($rowdata as $idx => $val) {
				$result[$val->ci_id] = $val->ci_name;
			}
		}
		echo json_encode($result);exit;
	}

	public function add_investor($catName)
	{
		$this->db->where(array('ci_name'=>$catName));
		$objdata = $this->db->get('cikini_investor');
		$existing = $objdata->result();

		$result = FALSE;
		if(!$existing){
			$data = array('ci_name'=>$catName);
			$result = $this->db->insert('cikini_investor',$data);
		}
		echo json_encode($result);exit;
	}

	public function edit_investor($catId,$catName)
	{
		$this->db->where(array('ci_id'=>$catId));
		$data = array('ci_name'=>$catName);
		$result = $this->db->update('cikini_investor',$data);
		echo json_encode($result);exit;
	}

	public function del_investor($catId)
	{
		$this->db->where(array('ci_id'=>$catId));
		$result = $this->db->delete('cikini_investor');
		echo json_encode($result);exit;
	}

	public function get_monthly_transaksi()
	{
		$this->load->model('transaksi');
		$rowdata = $this->transaksi->detail();

		$result = NULL;
		if(!empty($rowdata)){
			$result = array('data'=>NULL);
			foreach ($rowdata as $idx => $val) {
				$result['data'][] = array(
											'id'=>$val->ct_id
											,'cc1'=>$val->ct_cat_id
											,'cc2'=>$val->ct_jenis
											,'cc3'=>$val->ct_date
											,'cc4'=>$val->ct_num
										);
			}
		}
		echo json_encode($result);exit;
	}

	public function add_transaksi($trxCat,$trxJenis,$trxNum)
	{
		$data = array(
			'ct_cat_id'=>$trxCat
			,'ct_jenis'=>$trxJenis
			,'ct_date'=>date('Y-m-d H:i:s')
			,'ct_num'=>$trxNum
		);
		$result = $this->db->insert('cikini_transaksi',$data);
		echo json_encode($result);exit;
	}

	public function edit_transaksi($trxId,$trxCat,$trxJenis,$trxNum)
	{
		$this->db->where(array('ct_id'=>$trxId));
		$data = array(
			'ct_cat_id'=>$trxCat
			,'ct_jenis'=>$trxJenis
			,'ct_num'=>$trxNum
		);
		$result = $this->db->update('cikini_transaksi',$data);
		echo json_encode($result);exit;
	}

	public function del_transaksi($trxId)
	{
		$this->db->where(array('ct_id'=>$trxId));
		$result = $this->db->delete('cikini_transaksi');
		echo json_encode($result);exit;
	}
}
