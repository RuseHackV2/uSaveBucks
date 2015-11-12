<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Logout
 *
 * @author v_velikov
 */

namespace Controllers;

class Logout extends \GF\DefaultController {

    public function index() {
        if ($this->app->getSession()->username == null) {
            $servarname = $_SERVER['SERVER_NAME'];
            header("Location: http://$servarname"); /* Redirect browser */
            exit();
        } else {
            $this->app->getSession()->destroySession();
            $servarname = $_SERVER['SERVER_NAME'];
            header("Location: http://$servarname"); /* Redirect browser */
            exit();
        }
    }

}
