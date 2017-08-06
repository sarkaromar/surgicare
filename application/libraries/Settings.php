<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
* common settings Class
*/
class Settings {

    /**
     * This is the constructor method
     * @author --------
     */
    public function __construct() {

        $CI = & get_instance();
        $result = $CI->db->select('*')->where('id', 1)->get("common_settings");

        if ($result->num_rows() == 0) {
            die('Your are missing the site database row!');
        } else {
            $this->info = $result->row();
        }

    }

}

?>