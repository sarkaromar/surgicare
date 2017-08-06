<?php
/**
 * @author -------- <--------@gmail.com>
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
 * @author --------
 */
class Admin_panel extends CI_Controller {

    /**
     * This is the constructor method
     * @author --------
     */
    function __construct() {

        parent :: __construct();

        $this->load->model('data');


        $this->table = 'slider';
        $this->slider_path = './assets/img/slider/';
        $this->load->model('slider');

        $this->about_us_table = 'about_us';
        $this->about_us_path = './assets/img/about_us/';
        $this->load->model('about_us');

        $this->services_table = 'services';
        $this->services_path = './assets/img/services/';
        $this->load->model('services');

        $this->dept_table = 'departments';
        $this->dept_path = './assets/img/dept/';
        $this->load->model('departments');

        $this->doctor_table = 'doctor';
        $this->doctor_path = './assets/img/doctor/';
        $this->load->model('doctor');

        $this->gallery_table = 'gallery';
        $this->gallery_path = './uploads/front/gallery/';
        $this->load->model('gallery');

        $this->faqs_table = 'faqs';
        $this->load->model('faqs');


        $this->com_settings_table = 'common_settings';
        $this->com_settings_path = './assets/img/settings/';
        $this->load->model('common_settings');

        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');

        if (!$this->back_user->loggedin) {
            redirect(site_url('login'));
        }

    }

    /**
     * This method display all customers with tree based 
     * @author --------
     * @package --------
     * 
     * 
     */
    public function index() {

        // $data['title'] = "Dashboard";

        // $data['page'] = "back/dashboard/index";

        // $this->load->view('back/common/template', $data);

        redirect(site_url('admin_panel/slider'));

    }

    // ##############################################################################################
    //  slider section
    // ##############################################################################################

    /**
     * this function use for add master product and view come from product/add
     * @author --------
     * 
     */
    public function slider() {

        $data['lists'] = $this->data->getall($this->table);
        
        $data['title'] = "Slider";

        $data['page'] = "back/home/slider";

        $this->load->view('back/common/template', $data);
    }

    /**
     * this function use for add master product and view come from product/add
     * @author --------
     * 
     */
    public function add_slider() {
        if($_POST){

            if ($_FILES['image']['name'] != '') {
                $image_upload = $this->do_upload('image', $this->slider_path);

                if ($image_upload == FALSE) {

                    $this->session->set_flashdata('danger', 'Image Upload Failed');
                    redirect(site_url('admin_panel/slider'));

                } else {

                    $image = $image_upload["file_name"];

                }

            }
            $id = $this->slider->add($image);
            if ($id) {
                
                $this->session->set_flashdata('success', 'Added Successfully.');
                redirect(site_url('admin_panel/slider'));

            } else {
                
                $this->session->set_flashdata('danger', 'Not Added Successfully');
                redirect(site_url('admin_panel/slider'));

            }

        } else {

            redirect(site_url('admin_panel/slider'));

        }
    }

    /**
     * this function use for update edit data process
     * @author ----------
     * @package ----------
     * @return ----------
     */    public function edit_slider($id) {
        
        if(empty($id)){

            redirect(site_url('admin_panel/slider'));

        }

        $data['list'] = $this->data->getone($this->table, $id);
        
        $data['title'] = "Edit Slider";

        $data['page'] = "back/home/edit_slider";

        $this->load->view('back/common/template', $data);

    }

    /**
     * this function use for update edit data process
     * @author ----------
     * @package ----------
     * @return ----------
     */
    public function do_edit_slider() {

        if($_POST){

            $id = $this->input->post('id');

            if ($_FILES['image']['name'] != '') {

                $del_image = $this->input->post('img');
                $filename = $this->slider_path . $del_image;
                if (file_exists($filename)) {
                    unlink($filename);
                }

                $image_upload = $this->do_upload('image', $this->slider_path);

                if ($image_upload == FALSE) {
                    $this->session->set_flashdata('danger', 'Image Upload Failed!');
                    redirect(site_url('admin_panel/slider'));
                } else {
                    $image = $image_upload["file_name"];
                }
            } else {
                $image = $this->input->post('img');
            }

            if ($this->slider->edit($id, $image)) {

                $this->session->set_flashdata('success', 'Update Successfully.');
                redirect('admin_panel/slider');

            }

        } else {
            redirect('admin_panel/slider', 'refresh');
        }

    }

    /**
     * this method use for delete sldier
     * @author ----------
     * @package ----------
     * @return ----------
     */
    public function delete_slider($id, $image) {

        $result = $this->delete($this->table, $id, $image, $this->slider_path);

        if($result){

            $this->session->set_flashdata('success', 'Delete Successfully.');
            redirect('admin_panel/slider');

        } else{

            $this->session->set_flashdata('danger', 'Not Delete Successfully.');
            redirect('admin_panel/slider');

        }

    }

    // ##############################################################################################
    //  about us
    // ##############################################################################################

    /**
     * this function use for add master product and view come from product/add
     * @author --------
     * 
     */
    public function about_us() {

        $data['lists'] = $this->data->getall($this->about_us_table);
        
        $data['title'] = "About us";

        $data['page'] = "back/about_us/about_us";

        $this->load->view('back/common/template', $data);
    }

    /**
     * this function use for add master product and view come from product/add
     * @author --------
     * 
     */
    public function add_about() {
        if($_POST){

            if ($_FILES['image']['name'] != '') {
                $image_upload = $this->do_upload('image', $this->about_us_path);

                if ($image_upload == FALSE) {

                    $this->session->set_flashdata('danger', 'Image Upload Failed');
                    redirect(site_url('admin_panel/about_us'));

                } else {

                    $image = $image_upload["file_name"];

                }

            }

            $id = $this->about_us->add($image);

            if ($id) {
                
                $this->session->set_flashdata('success', 'Added Successfully.');
                redirect(site_url('admin_panel/about_us'));

            } else {
                
                $this->session->set_flashdata('danger', 'Not Added Successfully');
                redirect(site_url('admin_panel/about_us'));

            }

        } else {

            redirect(site_url('admin_panel/about_us'));

        }
    }

    /**
     * this function use for update edit data process
     * @author ----------
     * @package ----------
     * @return ----------
     */    
    public function edit_about($id) {
        
        if(empty($id)){
            redirect(site_url('admin_panel/about_us'));
        }

        $data['list'] = $this->data->getone($this->about_us_table, $id);

        if(empty($data['list'])){
            redirect(site_url('admin_panel/about_us'));
        }
        
        $data['title'] = "Edit About";

        $data['page'] = "back/about_us/edit_about_us";

        $this->load->view('back/common/template', $data);

    }

    /**
     * this function use for update edit data process
     * @author ----------
     * @package ----------
     * @return ----------
     */
    public function do_edit_about() {

        if($_POST){

            $id = $this->input->post('id');

            if ($_FILES['image']['name'] != '') {

                $del_image = $this->input->post('img');
                $filename = $this->about_us_path . $del_image;
                if (file_exists($filename)) {
                    unlink($filename);
                }

                $image_upload = $this->do_upload('image', $this->about_us_path);

                if ($image_upload == FALSE) {
                    $this->session->set_flashdata('danger', 'Image Upload Failed!');
                    redirect(site_url('admin_panel/our_services'));
                } else {
                    $image = $image_upload["file_name"];
                }
            } else {
                $image = $this->input->post('img');
            }

            if ($this->about_us->edit($id, $image)) {

                $this->session->set_flashdata('success', 'Update Successfully.');
                redirect('admin_panel/about_us');

            }

        } else {

            redirect('admin_panel/about_us', 'refresh');

        }

    }



    /**
     * this method use for delete sldier
     * @author ----------
     * @package ----------
     * @return ----------
     */
    public function delete_about($id, $image) {

        $result = $this->delete($this->about_us_table, $id, $image, $this->about_us_path);

        if($result){

            $this->session->set_flashdata('success', 'Delete Successfully.');
            redirect('admin_panel/about_us');

        } else{

            $this->session->set_flashdata('danger', 'Not Delete Successfully.');
            redirect('admin_panel/about_us');

        }

    }


    // ##############################################################################################
    //  services section
    // ##############################################################################################

    /**
     * this function use for add master product and view come from product/add
     * @author --------
     * 
     */
    public function our_services() {

        $data['lists'] = $this->data->getall($this->services_table);
        
        $data['title'] = "Services";

        $data['page'] = "back/services/services";

        $this->load->view('back/common/template', $data);
    }

    /**
     * this function use for add master product and view come from product/add
     * @author --------
     * 
     */
    public function add_service() {
        if($_POST){

            if ($_FILES['image']['name'] != '') {
                $image_upload = $this->do_upload('image', $this->services_path);

                if ($image_upload == FALSE) {

                    $this->session->set_flashdata('danger', 'Image Upload Failed');
                    redirect(site_url('admin_panel/our_services'));

                } else {

                    $image = $image_upload["file_name"];

                }

            }

            $id = $this->services->add($image);
            if ($id) {
                
                $this->session->set_flashdata('success', 'Added Successfully.');
                redirect(site_url('admin_panel/our_services'));

            } else {
                
                $this->session->set_flashdata('danger', 'Not Added Successfully');
                redirect(site_url('admin_panel/our_services'));

            }

        } else {

            redirect(site_url('admin_panel/our_services'));

        }
    }

    /**
     * this function use for update edit data process
     * @author ----------
     * @package ----------
     * @return ----------
     */    
    public function edit_service($id) {
        
        if(empty($id)){
            redirect(site_url('admin_panel/our_services'));
        }

        $data['list'] = $this->data->getone($this->services_table, $id);

        if(empty($data['list'])){
            redirect(site_url('admin_panel/our_services'));
        }
        
        $data['title'] = "Edit Services";

        $data['page'] = "back/services/edit_services";

        $this->load->view('back/common/template', $data);

    }

    /**
     * this function use for update edit data process
     * @author ----------
     * @package ----------
     * @return ----------
     */
    public function do_edit_service() {

        if($_POST){

            $id = $this->input->post('id');

            if ($_FILES['image']['name'] != '') {

                $del_image = $this->input->post('img');
                $filename = $this->services_path . $del_image;
                if (file_exists($filename)) {
                    unlink($filename);
                }

                $image_upload = $this->do_upload('image', $this->services_path);

                if ($image_upload == FALSE) {
                    $this->session->set_flashdata('danger', 'Image Upload Failed!');
                    redirect(site_url('admin_panel/our_services'));
                } else {
                    $image = $image_upload["file_name"];
                }
            } else {
                $image = $this->input->post('img');
            }

            if ($this->services->edit($id, $image)) {

                $this->session->set_flashdata('success', 'Update Successfully.');
                redirect('admin_panel/our_services');

            }

        } else {
            redirect('admin_panel/our_services', 'refresh');
        }

    }



    /**
     * this method use for delete sldier
     * @author ----------
     * @package ----------
     * @return ----------
     */
    public function delete_service($id, $image) {

        $result = $this->delete($this->services_table, $id, $image, $this->services_path);

        if($result){

            $this->session->set_flashdata('success', 'Delete Successfully.');
            redirect('admin_panel/our_services');

        } else{

            $this->session->set_flashdata('danger', 'Not Delete Successfully.');
            redirect('admin_panel/our_services');

        }

    }


    // ##############################################################################################
    //  departments section
    // ##############################################################################################

    /**
     * this function use for add master product and view come from product/add
     * @author --------
     * 
     */
    public function our_departments() {

        $data['lists'] = $this->data->getall($this->dept_table);
        
        $data['title'] = "Departments";

        $data['page'] = "back/dept/dept";

        $this->load->view('back/common/template', $data);
    }

    /**
     * this function use for add master product and view come from product/add
     * @author --------
     * 
     */
    public function add_dept() {
        if($_POST){

            if ($_FILES['image']['name'] != '') {
                $image_upload = $this->do_upload('image', $this->dept_path);

                if ($image_upload == FALSE) {

                    $this->session->set_flashdata('danger', 'Image Upload Failed');
                    redirect(site_url('admin_panel/our_departments'));

                } else {

                    $image = $image_upload["file_name"];

                }

            }
            $id = $this->departments->add($image);
            if ($id) {
                
                $this->session->set_flashdata('success', 'Added Successfully.');
                redirect(site_url('admin_panel/our_departments'));

            } else {
                
                $this->session->set_flashdata('danger', 'Not Added Successfully');
                redirect(site_url('admin_panel/our_departments'));

            }

        } else {

            redirect(site_url('admin_panel/our_departments'));

        }
    }

    /**
     * this function use for update edit data process
     * @author ----------
     * @package ----------
     * @return ----------
     */    
    public function edit_dept($id) {
        
        if(empty($id)){
            redirect(site_url('admin_panel/our_departments'));
        }

        $data['list'] = $this->data->getone($this->dept_table, $id);

        if(empty($data['list'])){
            redirect(site_url('admin_panel/our_departments'));
        }
        
        $data['title'] = "Edit Departments";

        $data['page'] = "back/dept/edit_dept";

        $this->load->view('back/common/template', $data);

    }

    /**
     * this function use for update edit data process
     * @author ----------
     * @package ----------
     * @return ----------
     */
    public function do_edit_dept() {

        if($_POST){

            $id = $this->input->post('id');

            if ($_FILES['image']['name'] != '') {

                $del_image = $this->input->post('img');
                $filename = $this->dept_path . $del_image;
                if (file_exists($filename)) {
                    unlink($filename);
                }

                $image_upload = $this->do_upload('image', $this->dept_path);

                if ($image_upload == FALSE) {
                    $this->session->set_flashdata('danger', 'Image Upload Failed!');
                    redirect(site_url('admin_panel/our_departments'));
                } else {
                    $image = $image_upload["file_name"];
                }
            } else {
                $image = $this->input->post('img');
            }

            if ($this->departments->edit($id, $image)) {

                $this->session->set_flashdata('success', 'Update Successfully.');
                redirect('admin_panel/our_departments');

            }

        } else {
            redirect('admin_panel/our_departments', 'refresh');
        }

    }



    /**
     * this method use for delete sldier
     * @author ----------
     * @package ----------
     * @return ----------
     */
    public function delete_dept($id, $image) {

        $result = $this->delete($this->dept_table, $id, $image, $this->dept_path);

        if($result){

            $this->session->set_flashdata('success', 'Delete Successfully.');
            redirect('admin_panel/our_departments');

        } else{

            $this->session->set_flashdata('danger', 'Not Delete Successfully.');
            redirect('admin_panel/our_departments');

        }

    }



    // ##############################################################################################
    //  doctors section
    // ##############################################################################################



    /**
     * this function use for add master product and view come from product/add
     * @author --------
     * 
     */
    public function our_doctors() {

        $data['lists'] = $this->data->getall($this->doctor_table);

        $data['depts'] = $this->data->getall($this->dept_table);
        
        $data['title'] = "Our Doctors";

        $data['page'] = "back/doctor/doctor";

        $this->load->view('back/common/template', $data);
    }

    /**
     * this function use for add master product and view come from product/add
     * @author --------
     * 
     */
    public function add_doctor() {
        if($_POST){

            if ($_FILES['image']['name'] != '') {
                $image_upload = $this->do_upload('image', $this->doctor_path);

                if ($image_upload == FALSE) {

                    $this->session->set_flashdata('danger', 'Image Upload Failed');
                    redirect(site_url('admin_panel/our_doctors'));

                } else {

                    $image = $image_upload["file_name"];

                }

            }
            $id = $this->doctor->add($image);
            if ($id) {
                
                $this->session->set_flashdata('success', 'Added Successfully.');
                redirect(site_url('admin_panel/our_doctors'));

            } else {
                
                $this->session->set_flashdata('danger', 'Not Added Successfully');
                redirect(site_url('admin_panel/our_doctors'));

            }

        } else {

            redirect(site_url('admin_panel/our_doctors'));

        }
    }

    /**
     * this function use for update edit data process
     * @author ----------
     * @package ----------
     * @return ----------
     */    public function edit_doctor($id) {
        
        if(empty($id)){

            redirect(site_url('admin_panel/our_doctors'));

        }

        $data['list'] = $this->data->getone($this->doctor_table, $id);

        $data['depts'] = $this->data->getall($this->dept_table);
        
        $data['title'] = "Edit Doctor";

        $data['page'] = "back/doctor/edit_doctor";

        $this->load->view('back/common/template', $data);

    }

    /**
     * this function use for update edit data process
     * @author ----------
     * @package ----------
     * @return ----------
     */
    public function do_edit_doctor() {

        if($_POST){

            $id = $this->input->post('id');

            if ($_FILES['image']['name'] != '') {

                $del_image = $this->input->post('img');
                $filename = $this->doctor_path . $del_image;
                if (file_exists($filename)) {
                    unlink($filename);
                }

                $image_upload = $this->do_upload('image', $this->doctor_path);

                if ($image_upload == FALSE) {
                    $this->session->set_flashdata('danger', 'Image Upload Failed!');
                    redirect(site_url('admin_panel/our_doctors'));
                } else {
                    $image = $image_upload["file_name"];
                }
            } else {
                $image = $this->input->post('img');
            }

            if ($this->doctor->edit($id, $image)) {

                $this->session->set_flashdata('success', 'Update Successfully.');
                redirect('admin_panel/our_doctors');

            }

        } else {

            redirect('admin_panel/our_doctors', 'refresh');
        }

    }



    /**
     * this method use for delete sldier
     * @author ----------
     * @package ----------
     * @return ----------
     */
    public function delete_doctor($id, $image) {

        $result = $this->delete($this->doctor_table, $id, $image, $this->doctor_path);

        if($result){

            $this->session->set_flashdata('success', 'Delete Successfully.');
            redirect('admin_panel/our_doctors');

        } else{

            $this->session->set_flashdata('danger', 'Not Delete Successfully.');
            redirect('admin_panel/our_doctors');

        }

    }

    // ##############################################################################################
    //  faqs section
    // ##############################################################################################

    /**
     * this function use for add master product and view come from product/add
     * @author --------
     * 
     */
    public function faqs() {

        $data['lists'] = $this->data->getall($this->faqs_table);
        
        $data['title'] = "Faqs";

        $data['page'] = "back/faqs/faqs";

        $this->load->view('back/common/template', $data);
    }

    /**
     * this function use for add master product and view come from product/add
     * @author --------
     * 
     */
    public function add_faqs() {
        if($_POST){

            $id = $this->faqs->add();
            if ($id) {
                
                $this->session->set_flashdata('success', 'Added Successfully.');
                redirect(site_url('admin_panel/faqs'));

            } else {
                
                $this->session->set_flashdata('danger', 'Not Added Successfully');
                redirect(site_url('admin_panel/faqs'));

            }

        } else {

            redirect(site_url('admin_panel/faqs'));

        }
    }

    /**
     * this function use for update edit data process
     * @author ----------
     * @package ----------
     * @return ----------
     */    public function edit_faqs($id) {
        
        if(empty($id)){

            redirect(site_url('admin_panel/faqs'));

        }

        $data['list'] = $this->data->getone($this->faqs_table, $id);
        
        $data['title'] = "Edit Faqs";

        $data['page'] = "back/faqs/edit_faqs";

        $this->load->view('back/common/template', $data);

    }

    /**
     * this function use for update edit data process
     * @author ----------
     * @package ----------
     * @return ----------
     */
    public function do_edit_faqs() {

        if($_POST){

            $id = $this->input->post('id');

            if ($this->faqs->edit($id)) {

                $this->session->set_flashdata('success', 'Update Successfully.');
                redirect('admin_panel/faqs');

            }

        } else {
            redirect('admin_panel/faqs', 'refresh');
        }

    }



    /**
     * this method use for delete sldier
     * @author ----------
     * @package ----------
     * @return ----------
     */
    public function delete_faqs($id) {

        $result = $this->delete($this->faqs_table, $id);

        if($result){

            $this->session->set_flashdata('success', 'Delete Successfully.');
            redirect('admin_panel/faqs');

        } else{

            $this->session->set_flashdata('danger', 'Not Delete Successfully.');
            redirect('admin_panel/faqs');

        }

    }


    // ##############################################################################################
    //  Common settings section
    // ##############################################################################################

    /**
     * this function use for add master product and view come from product/add
     * @author --------
     * 
     */
    public function common_settings() {

        $data['list'] = $this->data->getall($this->com_settings_table);
        
        $data['title'] = "Common Settings";

        $data['page'] = "back/settings/common_settings";

        $this->load->view('back/common/template', $data);
    }

    
    /**
     * this function use for update edit data process
     * @author ----------
     * @package ----------
     * @return ----------
     */
    public function do_edit_common_settings() {

        if($_POST){

            $id = $this->input->post('id');
            if ($_FILES['image']['name'] != '') {

                $del_image = $this->input->post('img');
                $filename = $this->com_settings_path . $del_image;
                if (file_exists($filename)) {
                    unlink($filename);
                }

                $image_upload = $this->do_upload('image', $this->com_settings_path);

                if ($image_upload == FALSE) {
                    $this->session->set_flashdata('danger', 'Image Upload Failed!');
                    redirect(site_url('admin_panel/common_settings'));
                } else {
                    $image = $image_upload["file_name"];
                }
            } else {
                $image = $this->input->post('img');
            }

            if ($this->common_settings->edit($id, $image)) {
                $this->session->set_flashdata('success', 'Update Successfully.');
                redirect('admin_panel/common_settings');
            }
        } else {

            redirect('admin_panel/common_settings', 'refresh');

        }

    }



















    /**
     * This method has been used to upload file.
     * @author ---------------
     * @param type $field_name
     * @return boolean
     */
    public function do_upload($field_name , $path) {

        $config['upload_path'] = $path;
        $config['allowed_types'] = 'gif|jpg|png|pdf';
        $config['encrypt_name'] = TRUE;
        $config['max_size'] = '5120';
        $config['xss_clean'] = TRUE;
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload($field_name)) {
            return false;
        } else {
            return $this->upload->data();
        }
    }

    /**
     * This method has been used to delete anything
     * @author ---------------
     * @param type $field_name
     * @return boolean
     */
    public function delete($table, $id, $image = NULL, $path = NULL) {

        if($image != NULL){

            $this->data->delete($table, $id);
            $filename = $path . $image;

            if (file_exists($filename)) {
                unlink($filename);
                return TRUE;
            } else {
                return FALSE;
            }

        } else {

            if ($this->data->delete($table, $id)) {
                return TRUE;
            } else {
                return FALSE;
            }

        }
        
    }

    /**
     * This method has been used for logout.
     * @author ---------------
     * @param ---
     * @return ---
     */
    public function logout($hash) {

        $config = $this->config->item("cookieprefix");

        $this->load->helper("cookie");
        if ($hash != $this->security->get_csrf_hash()) {

            $data['title'] = "Error";

            $data['page'] = "back/error/admin_error";

            $this->session->set_flashdata('danger', 'CSRF and Cookie problem');

            $this->load->view('back/common/template', $data);
        }
        delete_cookie($config . "un");
        delete_cookie($config . "tkn");
        $this->session->sess_destroy();
        redirect('login');
    }





    





}