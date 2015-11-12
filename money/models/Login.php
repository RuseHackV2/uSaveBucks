<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Login
 *
 * @author v_velikov
 */

namespace Models;

class Login extends \GF\DefaultController {

    private $userData = array();
    private $errors = array();

    /**
     * 
     * @param array $params
     */
    public function checkData($userData) {
        $this->userData = $userData;
        $val = new \GF\Validation;
        $val->setRule('minlength', $this->userData['username'], 4, 'invaliduser');
        $check = $val->validate();
        $this->errors = $val->getErrors();
        if ($check === true) {
            $check = $this->checkDB();
        }
        return $check;
    }

    public function checkDB() {
        $userData = $this->db->prepare('SELECT * FROM users WHERE username=?', array($this->userData['username']))->execute()->fetchAllAssoc();
        if ($this->db->getAffectedRows() == 1) {
            $this->userData = $userData[0];
            unset($this->userData['pass']);
            return true;
        } else {
            $this->errors = array('invaliduser', 'invalidpass');
            return false;
        }
    }

    public function getUserData() {
        return $this->userData;
    }   

    public function getErrors() {
        return $this->errors;
    }

}
