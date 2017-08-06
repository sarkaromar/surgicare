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
class Faqs extends CI_Model {

    /**
     * This is the constructor method
     * @author Jahid Al mamun
     */
    function __construct() {
        $this->table = 'faqs';
        parent :: __construct();
    }


    /**
     * Add New customer in database table customers
     *@author ---------------
     * @param bool tru/false
     */
    public function add() {
        
        $value = array(

            'ques'=> $this->input->post('ques'),
            'ansr'=> $this->input->post('ansr')
            
        );
        
        /**
         * call data model for save basic data in customer table and return customer
         * @author ---------------
         */
         $result = $this->data->save($this->table, $value);

         if($result){
            return TRUE;
         }  else {
            return FALSE; 
         }
        
    }
    
    public function edit($id) {

        /**
         * prepare slider table value for insert in slider table.
         */
        $value = array(

            'ques'=> $this->input->post('ques'),
            'ansr'=> $this->input->post('ansr')
            
        );

        $result = $this->data->update($this->table, $id, $value);

        if($result){
            return TRUE;
        }  else {
            return FALSE; 
        }
    }


}
