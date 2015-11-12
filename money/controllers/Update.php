<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Edit
 *
 * @author v_velikov
 */

namespace Controllers;

class Update extends \GF\DefaultController {


    public function bankaccount() {
        $bankData = array('bank_name' => $this->input->post('bank_name'), 'value' => $this->input->post('value'));
        $update = new \Models\Update();
        $update->bankData($bankData);

//        $profile = new \Models\Update();
//        
//        $this->view->blogData = $blog->getBlogData();
//        if (!$_POST["data"]) {
//            echo "Invalid data";
////            exit;
//        }
//        $data = json_decode($_POST["data"]);
//        foreach ($data->items as $item) {
//            $col_id = preg_replace('/[^\d\s]/', '', $item->column);
//
//            $panel_id = preg_replace('/[^\d\s]/', '', $item->panel_id);
//
//            $this->db->prepare("UPDATE panels SET column_id=?, sort_no=?, collapsed=? WHERE panel_id=? AND blog_id=?", array($col_id, $item->order, $item->collapsed, $panel_id, $this->view->blogData['blog_id']))->execute();
//        }
//        echo "success";
    }


    public function cash() {
        $cashData = array('bank_name' => 'cash', 'value' => $this->input->post('value'));
        $update = new \Models\Update();
        $update->cashMoney($cashData);
    }

    public function budgetmembers() {
        $memberData = array('username' => $this->input->post('member'));
        $update = new \Models\Update();
        $update->addMember($memberData);
    }

}
