<?php
    if (!isset($page)) { $page = 'front/common/home';}
    $this->load->view('front/common/head');
    $this->load->view($page);
    $this->load->view('front/common/footer');
?>