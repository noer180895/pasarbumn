<?php
// http://localhost/dropbox/codeigniter/%5bguide%5d/database/forge.html?highlight=dbforge#id7
// http://localhost/dropbox/codeigniter/%5bguide%5d/libraries/migration.html?highlight=migrate
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Base_table extends CI_Migration {

        public function up(){
              $this->db->query("
                DROP TABLE IF EXISTS `cikini_category`;
              ");
              $this->db->query("
                CREATE TABLE `cikini_category` (
                  `cc_id` int(5) unsigned NOT NULL AUTO_INCREMENT,
                  `cc_name` varchar(100) DEFAULT NULL,
                  PRIMARY KEY (`cc_id`)
                ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
              ");
              $this->db->query("
                DROP TABLE IF EXISTS `cikini_investor`;
              ");
              $this->db->query("
                CREATE TABLE `cikini_investor` (
                  `ci_id` int(5) unsigned NOT NULL AUTO_INCREMENT,
                  `ci_name` varchar(100) DEFAULT NULL,
                  PRIMARY KEY (`ci_id`)
                ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
              ");
              $this->db->query("
                DROP TABLE IF EXISTS `cikini_persentasi`;
              ");
              $this->db->query("
                CREATE TABLE `cikini_persentasi` (
                  `cp_id` int(5) unsigned NOT NULL AUTO_INCREMENT,
                  `cp_cat_id` int(5) unsigned NULL,
                  `cp_inv_id` int(5) unsigned NULL,
                  `cp_jenis` tinyint unsigned NULL,
                  `cp_persentasi` float unsigned NULL,
                  PRIMARY KEY (`cp_id`)
                ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
              ");
              $this->db->query("
                DROP TABLE IF EXISTS `cikini_transaksi`;
              ");
              $this->db->query("
                CREATE TABLE `cikini_transaksi` (
                  `ct_id` int(5) unsigned NOT NULL AUTO_INCREMENT,
                  `ct_cat_id` int(5) unsigned NULL,
                  `ct_jenis` tinyint unsigned NULL,
                  `ct_date` datetime  NULL,
                  `ct_num` int unsigned NULL,
                  PRIMARY KEY (`ct_id`)
                ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
              ");
        }

        public function down(){
              $this->db->query("drop table `cikini_category`;");
              $this->db->query("drop table `cikini_investor`;");
              $this->db->query("drop table `cikini_persentasi`;");
              $this->db->query("drop table `cikini_transaksi`;");
        }
}
