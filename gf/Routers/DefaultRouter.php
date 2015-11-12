<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DefaultRouter
 *
 * @author gatakka
 */

namespace GF\Routers;

class DefaultRouter implements \GF\Routers\IRouter {

    public function getURI() {
        return substr($_SERVER["REQUEST_URI"], 1);
    }

    public function getPost() {
        return $_POST;
    }

}

