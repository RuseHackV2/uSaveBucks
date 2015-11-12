<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Index
 *
 * @author gatakka
 */

namespace Controllers;

class Register extends \GF\DefaultController {

    public function index() {
        if ($this->input->post('register')) {
            $username = $this->input->post('username');
            $email = $this->input->post('email');
            $pass = $this->input->post('pass');
            $pass2 = $this->input->post('pass2');
            $register = new \Models\Register();
            $userData = array('username' => $username, 'email' => $email, 'pass' => $pass, 'pass2' => $pass2);
            $check = $register->checkData($userData);
            if ($check === true) {
                $register->makeRegister();
                $this->view->success = true;
            } else {
                //returns an array with errors
                $this->view->errors = $register->getErrors();
            }
        }

        if ($this->app->getSession()->username == null) {
            $this->view->title = 'Register now - Olble Blog';
            $this->view->appendToLayout('userbar', 'index.userbar');
            $this->view->appendToLayout('info', 'register.info');
            $this->view->appendToLayout('form', 'register.form');
            $this->view->display('register');
        } else {
            $servarname = $_SERVER['SERVER_NAME'];
            header("Location: http://$servarname"); /* Redirect browser */
            exit();
        }
    }

}
