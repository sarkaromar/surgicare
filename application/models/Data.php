<?php
/**
 * @author jahid al mamun <rjs.jahid11@gmail.com>
 * @date: 2015-9-10
 * 
 * @copyright  Copyright (C) 2015 rjs. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 *
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Model used in product models for category/brand/product type/product/
 * @package product
 * @author Jahid Al Mamun <rjs.jahid11@gmail.com>
 */
class Data extends CI_Model {

    /**
     * this method use for all data retrive with table name
     * @author Jahid All Mamun
     */
    public function getall($table) {
        $this->db->from("$table");
        return $this->db->get()->result();
    }
    /**
     * This function use for get all data with check status = 1
     * @author Jahid Al Mamun<rjs.jahid11@gmail.com>
     * @param type $table
     * @return type
     */
    public function getall_with_status($table) {
        $this->db->where('status',1);
        $this->db->from("$table");
        return $this->db->get()->result();
    }

    /**
     * this method use for one data or rows retrive with table name and id
     * @author Jahid All Mamun
     */
    public function getone($table, $id) {
        $this->db->where('id', $id);
        $this->db->limit(1);
        $this->db->from("$table");
        return $this->db->get()->result();
    }
    
     public function getcat($table, $id) {
        $this->db->where('id', $id);
        $this->db->where('type', 'clipart');
        $this->db->limit(1);
        $this->db->from("$table");
        return $this->db->get()->result();
    }
        /**
     * this method use for one data or rows retrive with table name and id and status = 1
     * @author Jahid All Mamun
     */
    public function getone_with_status($table, $id) {
        $this->db->where('id', $id);
        $this->db->where('status', 1);
        $this->db->limit(1);
        $this->db->from("$table");
        return $this->db->get()->result();
    }

    /**
     * delete row with table name and id
     * @author Jahid All Mamun
     */
    public function delete($table, $id) {
        $this->db->where('id', $id);
        $resul = $this->db->delete($table);
        if ($resul) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    /**
     * This method use for save single row with table name and id
     * @author Jahid Al Mamun <rjs.jahid11@gmail.com>
     * @param array value save with table name provided
     */
    public function save($table, $data) {
 
        $result = $this->db->insert($table, $data);
        if ($result) {
            return $this->db->insert_id();
        } else {
            return FALSE;
        }
    }

    /**
     * update table value with table name / id / and array value
     * @author Jahid All Mamun
     */
    function update($table, $id, $data) {
        $this->db->where('id', $id);
        $result = $this->db->update($table, $data);
        if($result)
        {
            return TRUE;
        }  else {
            return FALSE;   
         }
    }
    





    /**
     * 
     * @param type $table
     * @param type $id
     * @param type $data
     * @return boolean
     * this function use to update page update
     * @author JAHID AL MAMUN
     */
        function page_update($table, $id,$lang_id, $data) {
        $this->db->where('id', $id);
        $this->db->where('lng_id', $lang_id);
        $result = $this->db->update($table, $data);
        if($result)
        {
            return TRUE;
        }  else {
            return FALSE;   
         }
    }
    






        /**
     * update table value with table name / id / and array value
     * @author Jahid All Mamun
     */
    function art_update($table, $id, $data) {
        $this->db->where('clipart_id', $id);
        $result = $this->db->update($table, $data);
        if($result)
        {
            return TRUE;
        }  else {
            return FALSE;   
         }
    }
    
    
        /**
     * update table value with table name / id / and array value
     * @author Jahid All Mamun
     */
    function updateall($table, $data) {
//        $this->db->where('id', $id);
        $result = $this->db->update($table, $data);
        if($result)
        {
            return TRUE;
        }  else {
            return FALSE;   
         }
    }

    /**
     * get all by id
     * @author jahid al mamun
     */
    public function getallbyid($table, $id) {
        $this->db->where('id', $id);
        $this->db->from("$table");
        return $this->db->get()->result();
    }
    /**
     * 
     * This method use for get all data with id with status = 1
     * @author Jahid Al mamun <rjs.jahid11@gmail.com>
     * @param type $table
     * @param type $id
     * @return type
     */
    public function getallbyid_with_status($table, $id) {
        $this->db->where('id', $id);
        $this->db->where('status', 1);
        $this->db->from("$table");
        return $this->db->get()->result();
    }

    /**
     * this method use for one data or rows retrive with table name and id
     * @author Jahid All Mamun
     */
    public function get_last_one($table) {
        $this->db->limit(1);
        $this->db->from("$table");
        return $this->db->get()->result();
    }





   
    
}