<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CI_Multidatabase {

         public function __construct() {
                 $this->load();
         }

         /**
          * Load the databases and ignore the old ordinary CI loader which only allows one
          */
         public function load() {
                 $CI =& get_instance();

                 $CI->db = $CI->load->database('default', TRUE);
                 $CI->db_oli = $CI->load->database('db_oli', TRUE);
                 $CI->db_ban = $CI->load->database('db_ban', TRUE);
                 $CI->db_kpp = $CI->load->database('db_kpp', TRUE);
                 $CI->db_wuling = $CI->load->database('db_wuling', TRUE);
                 $CI->db_hino = $CI->load->database('db_hino', TRUE);
                 $CI->db_helpdesk = $CI->load->database('db_helpdesk', TRUE);
                 $CI->db_wuling_sp = $CI->load->database('db_wuling_sp', TRUE);
                 $CI->db_wuling_as = $CI->load->database('db_wuling_as', TRUE);
                 $CI->db_kmsb_blkpp_sp = $CI->load->database('db_kmsb_blkpp_sp', TRUE);
                 $CI->db_honda = $CI->load->database('db_honda', TRUE);
                 $CI->db_honda_as = $CI->load->database('db_honda_as', TRUE);
                 $CI->db_honda_sp = $CI->load->database('db_honda_sp', TRUE);
         }

         // Add more functions two use commonly.
          public function save(){
          }
}

?>
