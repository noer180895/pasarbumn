<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migrate extends MX_Controller {

        public function __construct() {
                // $this->load->library('database');
        }

        /*public function index(){
        	die('maintain mode');
        }*/

        public function run(){
                $this->load->library('migration');

                if ($this->migration->latest() === FALSE){
                        show_error($this->migration->error_string());
                }
                die('selesai');
        }

        public function rollback($id=NULL){
                $this->load->library('migration');

                $id = (empty($id)?20180408080000:$id);
                // $id = (empty($id)?NULL:$id);
                if ($this->migration->version($id) === FALSE){
                        show_error($this->migration->error_string());
                }
                die('selesai');
        }

}
