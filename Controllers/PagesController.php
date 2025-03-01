<?php

class PagesController extends BaseController {
    public function login() {
        $this->view('pages/login');
    }

    public function register() {
        $this->view('pages/register');
    }

    public function forgotpsw() {
        $this->view('pages/forgot_password');
    }

    public function _404page() {
        $this->view('pages/404page');
    }

    public function blankpage() {
        $this->view('pages/blankpage');
    }
}

?>