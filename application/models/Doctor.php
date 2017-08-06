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
class Doctor extends CI_Model {

    /**
     * This is the constructor method
     * @author Jahid Al mamun
     */
    function __construct() {
        $this->table = 'doctor';
        parent :: __construct();
    }


    /**
     * Add New customer in database table customers
     *@author ---------------
     * @param bool tru/false
     */
    public function add($image) {
        
        $value = array(

            'dept_name'=> $this->input->post('dept_name'),
            'name'=> $this->input->post('name'),
            'special'=> $this->input->post('special'),
            'edu'=> $this->input->post('edu'),
            'work_days'=> $this->input->post('work_days'),
            'speech'=> $this->input->post('speech'),
            'fb'=> $this->input->post('fb'),
            'twt'=> $this->input->post('twt'),
            'skype'=> $this->input->post('skype'),
            'image'=> $image

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
    
    public function edit($id, $image = NULL) {

        /**
         * prepare slider table value for insert in slider table.
         */
        $value = array(

            'dept_name'=> $this->input->post('dept_name'),
            'name'=> $this->input->post('name'),
            'special'=> $this->input->post('special'),
            'edu'=> $this->input->post('edu'),
            'work_days'=> $this->input->post('work_days'),
            'speech'=> $this->input->post('speech'),
            'fb'=> $this->input->post('fb'),
            'twt'=> $this->input->post('twt'),
            'skype'=> $this->input->post('skype'),
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
