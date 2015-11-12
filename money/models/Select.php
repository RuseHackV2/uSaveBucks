<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Select
 *
 * @author v_velikov
 */

namespace Models;

class Select extends \GF\DefaultController {

    public function getProfile() {
        $profile = $this->db->prepare("SELECT * FROM users WHERE user_id=?", array($this->app->getSession()->user_id))->execute()->fetchAllAssoc();
        return $profile;
    }

    public function getMoney() {
        $money = $this->db->prepare("SELECT * FROM money WHERE user_id=?", array($this->app->getSession()->user_id))->execute()->fetchAllAssoc();
        return $money;
    }

    public function getMoneyBudget($budget_id) {
        $money = $this->db->prepare("SELECT * FROM budget_members WHERE user_id=? AND budget_id=?", array($this->app->getSession()->user_id, $budget_id))->execute()->fetchAllAssoc();
        return $money;
    }

    public function getTotalBudgets($budget_id) {
        $money = $this->db->prepare("SELECT * FROM budget_members WHERE budget_id=?", array($budget_id))->execute()->fetchAllAssoc();
        $total = 0;
        foreach ($money as $key => $value) {
            $total += $value['money'];
        }
        return $total;
    }

    public function getBudgetMoney() {
        $money = $this->db->prepare("SELECT * FROM budget_members WHERE user_id=?", array($this->app->getSession()->user_id))->execute()->fetchAllAssoc();
        return $money;
    }

}
