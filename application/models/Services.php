<?php
/**
 * @author jahid al mamun <rjs.jahid11@gmail.com>
 * 
 * @copyright  Copyright (C) 2017 rjs. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 *
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * This controller used for customer maintains
 * @package customer
 * @author Jahid Al Mamun
 */
class Services extends CI_Model {

    /**
     * This is the constructor method
     * @author Jahid Al mamun
     */
    function __construct() {
        $this->table = 'services';
        parent :: __construct();
    }


    /**
     * Add New customer in database table customers
     *@author Jahid Al Mamun
     * @param bool tru/false
     */
    public function add($image) {
        
        $value = array(

            'name'=> $this->input->post('name'),
            'short_desc'=> $this->input->post('short_desc'),
            'long_desc'=> $this->input->post('long_desc'),
            'image'=> $image

        );
        
        /**
         * call data model for save basic data in customer table and return customer
         * @author rjs
         */
         $result = $this->data->save($this->table, $value);

         if($result){
            return TRUE;
         }  else {
            return FALSE; 
         }
        
    }
    
    public function edit($id, $image = NULL) {

        /**
         * prepare slider table value for insert in slider table.
         */
        $value = array(

            'name'=> $this->input->post('name'),
            'short_desc'=> $this->input->post('short_desc'),
            'long_desc'=> $this->input->post('long_desc'),
            'image'=> $image
        );

        $result = $this->data->update($this->table, $id, $value);

        if($result){
            return TRUE;
        }  else {
            return FALSE; 
        }
    }


}
