<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Blog
 *
 * @author v_velikov
 */

namespace Models;

class Budget extends \GF\DefaultController {

    private $_budgetData = array();
    private $_membersData = array();

    public function __construct() {
        parent::__construct();
        $link = explode('/', substr($_SERVER["REQUEST_URI"], 1))[0];
        $budgetData = $this->db->prepare("SELECT * FROM budgets WHERE link=?", array($link))->execute()->fetchAllAssoc()[0];
        $membersData = $this->db->prepare("SELECT * FROM budget_members WHERE budget_id=?", array($budgetData['budget_id']))->execute()->fetchAllAssoc();
        $this->_budgetData = $budgetData;
        $this->_membersData = $membersData;
    }
    
    public function getBudgetData() {
        return $this->_budgetData;
    }

    public function getMembersData() {
        return $this->_membersData;
    }
    
    public function getInfo() {
        echo "Пари в " . $this->_budgetData['link'] . " (общо вложени от членовето на бюджета) :";
        $sum_money = 0;
        foreach ($this->_membersData as $key => $value) {
            $sum_money += $value['money'];
        }
        echo "<br />";
        echo "<b style=\"color: red\">" . $sum_money . " $</b>";
    }

    public function getMambers() {
        echo "<br />";
        echo "Членове в " . $this->_budgetData['link'] . " :";
        foreach ($this->_membersData as $key => $value) {
            $member = $value['user_id'];
            $member = $this->db->prepare("SELECT * FROM users WHERE user_id=?", array($member))->execute()->fetchAllAssoc();
            foreach ($member as $key => $value) {
                echo "<br />";
                echo "• " . $value['username'];
                if ($value['user_id'] == $this->_budgetData['master_id']) {
                    if ($this->app->getSession()->user_id == $this->_budgetData['master_id']) {
                        echo " (<b style=\"color: red\">You are the master</b>)";
                    } else {
                        echo " (<b style=\"color: red\">master</b>)";
                    }
                }
            }
        }
    }

    public function addMembers() {
        if ($this->app->getSession()->user_id == $this->_budgetData['master_id']) {
            echo '<br>FORM';
        }
    }

}
