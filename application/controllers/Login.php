<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->model("login_model");
        $this->load->model("user_model");

        if ($this->back_user->loggedin) {
            redirect(site_url('admin_panel'));
        }
    }

    // *** index ---------------------------------------------------------------
    public function index() {

        $data['title'] = "Login Form";
        $this->load->view('back/login/login', $data);

    }

    // *** login check ---------------------------------------------------------
    public function logincheck() {

        // retrieve log info from cookie ------------
        $config = $this->config->item("cookieprefix");
        if ($this->back_user->loggedin) {
            redirect('admin_panel');
        }

        // get info ------------
        $email = $this->input->post("email", true);
        $pass = $this->common->nohtml($this->input->post("pass", true));
        $rem = $this->input->post("rem", true);

        // blank check ------------
        if (empty($email) || empty($pass)) {
            $this->session->set_flashdata("danger", 'Empty Email or Passwod!');
        }

        // is email exist ------------
        $login = $this->login_model->get_user_by_email($email);
        if ($login->num_rows() == 0) {
            $this->session->set_flashdata("danger", ' Incorrect Email or Password!');
        }

        // pass matching ------------
        $r = $login->row();
        $id = $r->id;
        $phpass = new PasswordHash(12, false);
        if (!$phpass->CheckPassword($pass, $r->password)) {
            $this->session->set_flashdata("danger", ' Incorrect Email or Password!');
        }

        // generate a token and update it ------------
        $token = rand(1, 100000) . $email;
        $token = md5(sha1($token));
        $this->login_model->update_user_token($id, $token);
        
        // if remenber create cookies ------------
        if ($rem == 1) {
            $ttl = 3600 * 12;
        } else {
            $ttl = 3600 * 12;
        }
        setcookie($config . "un", $email, time() + $ttl, "/");
        setcookie($config . "tkn", $token, time() + $ttl, "/");
        redirect(site_url('admin_panel'));
    }
    
    // *** inactive ------------------------------------------------------------
    public function inactive() {
        $this->back_temp->set_layout("layout/login_layout.php");
        $this->back_temp->loadCont("back/login/inactive.php");
    }

}