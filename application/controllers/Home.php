<?php  defined('BASEPATH') OR exit('No direct script access allowed');
/**
* Home Class
*/
class Home extends CI_controller {
	
	function __construct(){

        $this->slider_table = 'slider';
        $this->about_us_table = 'about_us';
        $this->services_table = 'services';
        $this->doctor_table = 'doctor';
        $this->dept_table = 'departments';
        $this->faqs_table = 'faqs';

        parent::__construct();
        $this->load->model('data');

    }

	public function index(){

        $data['title'] = "Home";
        $data['sliders'] = $this->data->getall($this->slider_table);
        $data['about_us'] = $this->data->get_last_one($this->about_us_table);
        $data['depts'] = $this->data->getall($this->dept_table);
        $data['doctors'] = $this->data->getall($this->doctor_table);
        $this->load->view('front/common/head', $data);
        $this->load->view('front/common/slider', $data);
        $this->load->view('front/common/home', $data);
        $this->load->view('front/common/footer', $data);
        
    }

    public function about(){

        $data['lists'] = $this->data->getall($this->about_us_table);
        $data['title'] = "About us";
        $data['page'] = "front/pages/about";
        $this->load->view('front/common/template', $data);

    }

    public function services(){

        $data['lists'] = $this->data->getall($this->services_table);
        $data['title'] = "Services";
        $data['page'] = "front/pages/services";
        $this->load->view('front/common/template', $data);

    }

    public function services_details($id){

        $data['list'] = $this->data->getone($this->services_table, $id);
        $data['title'] = "Services Details";
        $data['page'] = "front/pages/services_details";
        $this->load->view('front/common/template', $data);

    }

    public function departments(){

        $data['lists'] = $this->data->getall($this->dept_table);
        $data['title'] = "Departments";
        $data['page'] = "front/pages/departments";
        $this->load->view('front/common/template', $data);

    }

    public function departments_details($id){

        $data['list'] = $this->data->getone($this->dept_table, $id);
        $data['title'] = "Departments Details";
        $data['page'] = "front/pages/departments_details";
        $this->load->view('front/common/template', $data);

    }

    public function doctors(){

        $data['depts'] = $this->data->getall($this->dept_table);
        $data['doctors'] = $this->data->getall($this->doctor_table);
        $data['title'] = "Doctors";
        $data['page'] = "front/pages/doctors";
        $this->load->view('front/common/template', $data);

    }

    public function doctor_profile($id){

        $data['list'] = $this->data->getone($this->doctor_table, $id);
        $data['title'] = "Doctors Profile";
        $data['page'] = "front/pages/doctor_profile";
        $this->load->view('front/common/template', $data);

    }

    public function resource(){

        $data['title'] = "Resource";
        $data['page'] = "front/pages/resource";
        $this->load->view('front/common/template', $data);

    }

    public function faqs(){

        $data['faqs'] = $this->data->getall($this->faqs_table);
        $data['title'] = "Faqs";
        $data['page'] = "front/pages/faqs";
        $this->load->view('front/common/template', $data);

    }

    public function contact(){

        $data['title'] = "Contact";
        $data['page'] = "front/pages/contact";
        $this->load->view('front/common/template', $data);

    }
    
    public function contact_form(){
        
        if($_POST){
            
            // recv data
            $data['name'] = $this->common->nohtml($this->input->post('name'));

            $data['email'] = $this->common->nohtml($this->input->post('email'));

            $data['sub'] = $this->common->nohtml($this->input->post('subject'));

            $data['msg'] = $this->common->nohtml($this->input->post('message'));
            
            
            // rendering amil body -----------------------------------------
            $email_body = $this->load->view('front/email_body/contact_email.php', $data, TRUE);

            // email sending ------------------------------------------------
            $this->load->library('email');
            
            $this->email->set_mailtype('html');
            
            $this->email->set_newline("\r\n");
            
            $this->email->from('contact@domain.com', 'domain.com'); // web mail address, domain name
            
            $this->email->to('example@gmail.com'); // owner mail
            
            $this->email->subject('Want to contact');
            
            $this->email->message($email_body);
            

            if ($this->email->send()) {

                // redirecting with succsss message ----------------
                $this->session->set_flashdata("success", "Successfully sent!");
                redirect(site_url('contact'));

            } else {

                // redirecting with error message ----------------
                $this->session->set_flashdata("danger", "Not sent!"); // $this->email->print_debugger()
                redirect(site_url('contact'));

            }
            
        } else {
            
            redirect(site_url('contact'));
            
        }
    
//        $data = "hosie";
//        echo $r;
//        
//        $encode_data = json_encode($data);
//        echo $encode_data;
        


    }
    
    
   
}