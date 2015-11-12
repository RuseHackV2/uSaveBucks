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

class Index extends \GF\DefaultController {

    public function index() {
        if ($this->input->post('register')) {
            $username = $this->input->post('username');
            $email = $this->input->post('email');
            $pass = $this->input->post('pass');
            $pass2 = $this->input->post('pass2');
            $register = new \Models\Register();
            $userData = array('username' => $username, 'email' => $email, 'pass' => $pass, 'pass2' => $pass2);
            $register->makeRegister($userData);
        }
        if ($this->input->post('login')) {
            $username = $this->input->post('username');
            $login = new \Models\Login();
            $userData = array('username' => $username);
            $check = $login->checkData($userData);
            if ($check === true) {
                foreach ($login->getUserData() as $k => $v) {
                    $this->app->getSession()->$k = $v;
                }
            } else {
                //returns an array with errors
                $this->view->errors = $login->getErrors();
            }
        }
        if ($this->app->getSession()->username == null) {
            $this->view->appendToLayout('header', 'index.header');
            $this->view->appendToLayout('about', 'index.about');
            $this->view->display('index_out');
        } else {

            if ($this->input->post('create')) {
                $description = $this->input->post('description');
                $link = $this->input->post('link');
                $create = new \Models\Managebudgets();
                $budgetData = array('description' => $description, 'link' => $link);
                $create->createBudget($budgetData);
//                    $servarname = $_SERVER['SERVER_NAME'];
//                    header("Location: http://$servarname/$link"); /* Redirect browser */
//                else {
//                    //returns an array with errors
//                    $this->view->errors = $create->getErrors();
//                }
            }
            $select = new \Models\Select();
            $profile = $select->getProfile();
            $this->view->profile = $profile;
            $money = $select->getMoney();
            $this->view->money = $money;
            $managebudgets = new \Models\Managebudgets();
            $budgets = $managebudgets->getBudgets();
            if ($budgets === 0) {
                $this->view->newbie = true;
            } else {
                $this->view->budgets = $budgets;
            }

            $servarname = $_SERVER['SERVER_NAME'];
            header("Location: http://$servarname/user/wallet"); /* Redirect browser */
        }
    }

}
