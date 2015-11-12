<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Controllers;

/**
 * Description of User
 *
 * @author veelko
 */
class User extends \GF\DefaultController {

    public function profile() {
        $select = new \Models\Select();
        $this->view->profile = $select->getProfile();

        if ($this->input->post('salary_wage') == 'true') {
            $data = array('salary' => $this->input->post('salary'), 'wage' => $this->input->post('wage'));
            $update = new \Models\Update();
            $update->userSalary($data);
        }

        if ($this->input->post('bank') == 'true') {
            $bankData = array('bank_name' => $this->input->post('bank_name'), 'value' => $this->input->post('value'));
            $update = new \Models\Update();
            $update->bankData($bankData);
        }

        if ($this->input->post('cash') == 'true') {
            $cashData = array('bank_name' => 'cash', 'value' => $this->input->post('value'));
            $update = new \Models\Update();
            $update->cashMoney($cashData);
        }

        if ($this->input->post('bills') == 'true') {
            $billsData = array('food' => $this->input->post('food'), 'household' => $this->input->post('household'));
            $update = new \Models\Update();
            $update->userBills($billsData);
        }

        $select = new \Models\Select();
        $profile = $select->getProfile();
        $this->view->profile = $profile;
        $money = $select->getMoney();
        $this->view->money = $money;
        $managebudgets = new \Models\Managebudgets();
        $budgets = $managebudgets->getBudgets();
        $this->view->appendToLayout('sidebar', 'index.sidebar');
        $this->view->appendToLayout('mainpanel', 'index.mainpanel');
        $this->view->appendToLayout('userprofile', 'index.userprofile');
        $this->view->appendToLayout('footer', 'index.footer');
        $this->view->display('index_in');
    }

    public function wallet() {
        $select = new \Models\Select();
        $this->view->budgetMoney = $select->getBudgetMoney();
        $this->view->profile = $select->getProfile();
        $money = $select->getMoney();
        $this->view->money = $money;
//        $managebudgets = new \Models\Managebudgets();
//        $budgets = $managebudgets->getBudgets();
        $this->view->appendToLayout('sidebar', 'index.sidebar');
        $this->view->appendToLayout('mainpanel', 'index.mainpanel');
        $this->view->appendToLayout('wallet', 'index.wallet');
        $this->view->appendToLayout('footer', 'index.footer');
        $this->view->display('index_in');
    }

    public function budgets() {
        if ($this->input->post('budget') == 'true') {
            $budgetData = array('link' => $this->input->post('link'), 'description' => $this->input->post('description'));
            $create = new \Models\Managebudgets();
            $create->createBudget($budgetData);
        }
        $managebudgets = new \Models\Managebudgets();
        $this->view->budgets = $managebudgets->getBudgets();
        $this->view->appendToLayout('sidebar', 'index.sidebar');
        $this->view->appendToLayout('mainpanel', 'index.mainpanel');
        $this->view->appendToLayout('budgets', 'index.budgets');
        $this->view->appendToLayout('footer', 'index.footer');
        $this->view->display('index_in');
    }

    public function statistics() {
        $this->view->appendToLayout('sidebar', 'index.sidebar');
        $this->view->appendToLayout('mainpanel', 'index.mainpanel');
        $this->view->appendToLayout('statistics', 'index.statistics');
        $this->view->appendToLayout('footer', 'index.footer');
        $this->view->display('index_in');
    }

    public function savings() {
        $this->view->appendToLayout('sidebar', 'index.sidebar');
        $this->view->appendToLayout('mainpanel', 'index.mainpanel');
        $this->view->appendToLayout('savings', 'index.savings');
        $this->view->appendToLayout('footer', 'index.footer');
        $this->view->display('index_in');
    }

}
