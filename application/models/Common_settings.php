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
class Common_settings extends CI_Model {

    /**
     * This is the constructor method
     * @author Jahid Al mamun
     */
    function __construct() {
        $this->table = 'common_settings';
        parent :: __construct();
    }

    public function edit($id, $image = NULL) {

        /**
         * prepare slider table value for insert in slider table.
         */
        $value = array(

            'logo' => $image,
            'add' => $this->input->post('add'),
            'mail1' => $this->input->post('mail1'),
            'mail2' => $this->input->post('mail2'),
            'phn1' => $this->input->post('phn1'),
            'phn2' => $this->input->post('phn2'),
            'eme_phn' => $this->input->post('eme_phn'),
            'appoint_phn' => $this->input->post('appoint_phn'),

            'sun_thu' => $this->input->post('sun_thu'),
            'fri' => $this->input->post('fri'),
            'sat' => $this->input->post('sat'),

            'fb' => $this->input->post('fb'),
            'twt' => $this->input->post('twt'),
            'link' => $this->input->post('link'),
            'copyright' => $this->input->post('copyright')
        
        );

        $result = $this->data->update($this->table, $id, $value);

        if($result){
            return TRUE;
        }  else {
            return FALSE; 
        }
    }


}
