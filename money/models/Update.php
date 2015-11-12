<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Update
 *
 * @author v_velikov
 */

namespace Models;

class Update extends \GF\DefaultController {

    private $_blogData = null;

    public function __construct() {
        parent::__construct();
//        $link = explode('/', substr($_SERVER["REQUEST_URI"], 1))[0];
//        $result = $this->db->prepare("SELECT * FROM blogs WHERE link=?", array($link))->execute()->fetchAllAssoc()[0];
//        $this->_blogData = $result;
    }

    public function userSalary($profileData) {
        $this->db->prepare("UPDATE users SET salary=?, wage=? WHERE user_id=?", array($profileData['salary'], $profileData['wage'], $this->app->getSession()->user_id))->execute();
        $servarname = $_SERVER['SERVER_NAME'];
        $this->view->success = true;
        header("Location: http://$servarname/user/profile"); /* Redirect browser */
    }

    public function userBills($billsData) {
        $this->db->prepare("UPDATE users SET food=?, household=? WHERE user_id=?", array($billsData['food'], $billsData['household'], $this->app->getSession()->user_id))->execute();
        $servarname = $_SERVER['SERVER_NAME'];
        header("Location: http://$servarname/user/profile"); /* Redirect browser */
    }

    public function bankData($bankData) {
        $this->db->prepare('INSERT INTO money (user_id, bank_name, value) VALUES (?, ?, ?)', array($this->app->getSession()->user_id, $bankData['bank_name'], $bankData['value']))->execute();
        $servarname = $_SERVER['SERVER_NAME'];
        header("Location: http://$servarname"); /* Redirect browser */
    }

    public function cashMoney($cashData) {
        echo '<pre>', print_r($cashData), '</pre>';
        $istherecash = $this->db->prepare("SELECT * FROM money WHERE bank_name=? AND user_id=?", array('cash', $this->app->getSession()->user_id))->execute()->fetchAllAssoc();
        echo '<pre>', print_r($istherecash), '</pre>';
        if (isset($istherecash[0])) {
            $istherecash[0]['value'] += $cashData['value'];
            $this->db->prepare("UPDATE money SET value=? WHERE user_id=? and bank_name=?", array($istherecash[0]['value'], $this->app->getSession()->user_id, 'cash'))->execute();
        } else {
            $this->db->prepare('INSERT INTO money (user_id, bank_name, value) VALUES (?, ?, ?)', array($this->app->getSession()->user_id, $cashData['bank_name'], $cashData['value']))->execute();
        }
        $servarname = $_SERVER['SERVER_NAME'];
        header("Location: http://$servarname"); /* Redirect browser */
    }


}
