<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Blogs
 *
 * @author v_velikov
 */

namespace Models;

class Managebudgets extends \GF\DefaultController {

    private $budgetData = array();
    private $errors = array();

    /**
     * 
     * @param array $params
     */
    public function checkData($blogData) {
        $this->budgetData = $blogData;
        $val = new \GF\Validation;
        $val->setRule('maxlength', $this->budgetData['name'], 32, 'name')
                ->setRule('maxlength', $this->budgetData['description'], 32, 'description')
                ->setRule('maxlength', $this->budgetData['link'], 32, 'link')
                ->setRule('minlength', $this->budgetData['name'], 3, 'name')
                ->setRule('minlength', $this->budgetData['description'], 3, 'description')
                ->setRule('minlength', $this->budgetData['link'], 3, 'link');
        $check = $val->validate();
        $this->errors = $val->getErrors();
        return $check;
    }

    public function createBudget($budgetData) {
        $this->db->prepare("INSERT INTO budgets (master_id, link, description) VALUES (?, ?, ?)", array($this->app->getSession()->user_id, $budgetData['link'], $budgetData['description']))->execute();
        $budget_id = $this->db->prepare("SELECT MAX(budget_id) FROM budgets")->execute()->fetchAllAssoc();
        $this->db->prepare("INSERT INTO budget_members (budget_id, user_id) VALUES (?, ?)", array($budget_id[0]['MAX(budget_id)'], $this->app->getSession()->user_id))->execute();
//        $blog_id = $this->db->prepare("SELECT blog_id FROM blogs WHERE link=?", array($this->budgetData['link']))->execute()->fetchAllAssoc()[0]['blog_id'];
//
//
//        $sql_menu = "INSERT INTO `menus` (`user_id`, `blog_id`, `sort_no`, `text`, `link`) VALUES
//(" . $this->app->getSession()->user_id . ", " . $blog_id . ", 1, 'Menu1', NULL),
//(" . $this->app->getSession()->user_id . ", " . $blog_id . ", 2, 'Menu2', NULL),
//(" . $this->app->getSession()->user_id . ", " . $blog_id . ", 3, 'Menu3', NULL),
//(" . $this->app->getSession()->user_id . ", " . $blog_id . ", 4, 'Menu4', NULL),
//(" . $this->app->getSession()->user_id . ", " . $blog_id . ", 5, 'Menu5', NULL),
//(" . $this->app->getSession()->user_id . ", " . $blog_id . ", 6, 'Menu6', NULL);";
//        $this->db->prepare($sql_menu)->execute();
//
//        $sql_panels = "INSERT INTO `panels` (`user_id`, `blog_id`, `column_id`, `sort_no`, `collapsed`, `title`, `type`) VALUES
//(" . $this->app->getSession()->user_id . ", " . $blog_id . ", 1, 0, 0, 'Panel 1', NULL),
//(" . $this->app->getSession()->user_id . ", " . $blog_id . ", 1, 1, 1, 'Panel 2', NULL),
//(" . $this->app->getSession()->user_id . ", " . $blog_id . ", 1, 2, 0, 'Panel 3', NULL),
//(" . $this->app->getSession()->user_id . ", " . $blog_id . ", 2, 0, 0, 'Panel 4', NULL),
//(" . $this->app->getSession()->user_id . ", " . $blog_id . ", 2, 1, 0, 'Panel 5', NULL);";
//        $this->db->prepare($sql_panels)->execute();
    }


    public function getBudgets() {
        $budgets = $this->db->prepare('SELECT * FROM budgets WHERE budget_id in (SELECT budget_id FROM budget_members WHERE user_id=?)', array($this->app->getSession()->user_id))->execute()->fetchAllAssoc();
        if ($this->db->getAffectedRows() == 0) {
            return 0;
        }
        return $budgets;
    }

}
