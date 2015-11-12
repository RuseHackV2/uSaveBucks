<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Register
 *
 * @author v_velikov
 */

namespace Models;

class Register extends \GF\DefaultController {

    private $userData = array();
    private $errors = array();

    /**
     * 
     * @param array $params
     */
    public function checkData($userData) {
        $this->userData = $userData;
        $val = new \GF\Validation;
        $val->setRule('minlength', $this->userData['username'], 4, 'minuser')
                ->setRule('email', $this->userData['email'], 'email')
                ->setRule('minlength', $this->userData['pass'], 6, 'minpass')
                ->setRule('matches', $this->userData['pass'], $this->userData['pass2']);
        $check = $val->validate();
        $this->errors = $val->getErrors();
        return $check;
    }

    public function makeRegister($userData) {
        $this->db->prepare('INSERT INTO users (username, pass, email) VALUES (?, ?, ?)', array($userData['username'], $userData['pass'], $userData['email']))->execute();
    }

    public function getErrors() {
            return $this->errors;

    }

}
