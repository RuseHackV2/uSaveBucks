<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Create
 *
 * @author v_velikov
 */

namespace Controllers;

class Create extends \GF\DefaultController {

    public function budget() {
        if ($this->input->post('create')) {
            $description = $this->input->post('description');
            $link = $this->input->post('link');
            $create = new \Models\Managebudgets();
            $budgetData = array('description' => $description, 'link' => $link);
            $check = $create->checkData($budgetData);
            if ($check === true) {
                $create->createBudget();

            } else {
                //returns an array with errors
                echo '<pre>' . print_r($create->getErrors(), true) . '</pre>';
                $this->view->errors = $create->getErrors();
            }
        }
    }
    

}
