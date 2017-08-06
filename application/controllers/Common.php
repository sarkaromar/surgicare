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
 * This controller used for product category maintains
 * @package product
 * @author Jahid Al Mamun
 */
class Common extends CI_Controller {

    /**
     * This is the constructor method
     * @author Jahid Al mamun
     */
    function __construct() {

        $root = base_url();
        parent :: __construct();
        $this->load->model('data');
    }

    /**
     * It's a good global function to use for delete row with table name and id. here if we want to delete multiple table then we send it with array and this function call from javascript function dodelete
     * @example dodelete(table,id);
     * here table can be array object to delet more table
     * @author Jahid Al Mamun
     * @param type $table
     * @param type $id
     * @return boolean
     */
    function delete($table, $id) {

        if ($this->data->delete($table, $id)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    /**
     * this function used for delete specific image with path and image name
     * @author Jahid Al Mamun
     */
    public function image_delete($path, $name) {

        $filename = $root . "/" . $path . "/" . $name;
        if (file_exists($filename)) {
            unlink($filename);
            return TRUE;
        } else {
            return FALSE;
        }
    }

    
   
}