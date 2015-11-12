<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Blogindex
 *
 * @author v_velikov
 */

namespace Controllers;

class Budgetindex extends \GF\DefaultController {

    private $_budgetData = array();
    private $_membersData = array();

    public function index() {

        $budget = new \Models\Budget();
        $this->view->budgetData = $this->_budgetData = $budget->getBudgetData();
        $this->view->membersData = $this->_membersData = $budget->getMembersData();

        $this->view->appendToLayout('userbar', 'index.userbar');
        $this->view->appendToLayout('info', 'budget.layouts.info');
        $this->view->appendToLayout('members', 'budget.layouts.members');
        $this->view->display('budget.index');
    }
}
