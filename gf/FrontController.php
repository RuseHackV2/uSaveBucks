<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FrontController
 *
 * @author gatakka
 */

namespace GF;

class FrontController {

    private static $_instance = null;
    private $ns = null;
    private $controller = null;
    private $method = null;

    /**
     *
     * @var \GF\Rourets\iRouter; 
     */
    private $router = null;

    private function __construct() {
        
    }

    public function getRouter() {
        return $this->router;
    }

    public function setRouter(\GF\Routers\IRouter $router) {
        $this->router = $router;
    }

    public function dispatch() {
//        echo 'URI: ' . $this->router->getURI();
        if ($this->router == null) {
            throw new \Exception('No valid router found', 500);
        }
        $_uri = $this->router->getURI();
        $routes = \GF\App::getInstance()->getConfig()->routes;
        $_rc = null;
        if (is_array($routes) && count($routes) > 0) {
            foreach ($routes as $k => $v) {
                if (stripos($_uri, $k) === 0 && ($_uri == $k || stripos($_uri, $k . '/') === 0) && $v['namespace']) {
                    $this->ns = $v['namespace'];
                    $_uri = substr($_uri, strlen($k) + 1);
                    $_rc = $v;
                    break;
                }
            }
        } else {
            throw new \Exception('Default route missing', 500);
        }

        if ($this->ns == null && $routes['*']['namespace']) {
            $this->ns = $routes['*']['namespace'];
            $_rc = $routes['*'];
        } else if ($this->ns == null && !$routes['*']['namespace']) {
            throw new \Exception('Default route missing', 500);
        }
        $input = \GF\InputData::getInstance();
        $_params = explode('/', $_uri);
        if ($_params[0]) {
            $link = $_params[0];
            $db = new \GF\DB\SimpleDB();
            $db->prepare("SELECT link FROM budgets WHERE link=?", array($link))->execute()->fetchAllAssoc();
            if ($db->getAffectedRows() == 1) {
                if ($_params[1]) {
                    $this->controller = strtolower($_params[1]);
                } else {
                    $this->controller = 'budgetindex';
                }
                //if we do not have controller and method, we do not have params 
                if ($_params[2]) {
                    $this->method = strtolower($_params[2]);
                    unset($_params[0], $_params[1], $_params[2]);
                    $input->setGet(array_values($_params));
                } else {
                    $this->method = $this->getDefaultMethod();
                }
            } else {
                $this->controller = strtolower($_params[0]);

                //if we do not have controller and method, we do not have params 
                if ($_params[1]) {
                    $this->method = strtolower($_params[1]);
                    unset($_params[0], $_params[1]);
                    $input->setGet(array_values($_params));
                } else {
                    $this->method = $this->getDefaultMethod();
                }
            }
        } else {
            $this->controller = $this->getDefaultController();
            $this->method = $this->getDefaultMethod();
        }
        if (is_array($_rc) && $_rc['controllers']) {
            if ($_rc['controllers'][$this->controller]['methods'][$this->method]) {
                $this->method = strtolower($_rc['controllers'][$this->controller]['methods'][$this->method]['to']);
            }
            if (isset($_rc['controllers'][$this->controller]['to'])) {
                $this->controller = strtolower($_rc['controllers'][$this->controller]['to']);
            }
        }
//        echo '<br />N: ' . $this->ns;
//        echo '<br />C: ' . ucfirst($this->controller);
//        echo '<br />M: ' . $this->method . '<br />';
        $input->setPost($this->router->getPost());
        //TODO fix it
        $f = $this->ns . '\\' . ucfirst($this->controller);
        $newControoler = new $f();
        $newControoler->{$this->method}();
    }

    public function getDefaultController() {
        $controler = \GF\App::getInstance()->getConfig()->app['default_controller'];
        if ($controler) {
            return strtolower($controler);
        }
        return 'index';
    }

    public function getDefaultMethod() {
        $method = \GF\App::getInstance()->getConfig()->app['default_method'];
        if ($method) {
            return strtolower($method);
        }
        return 'index';
    }

    /**
     * 
     * @return \GF\FrontController
     */
    public static function getInstance() {
        if (self::$_instance == null) {
            self::$_instance = new \GF\FrontController();
        }
        return self::$_instance;
    }

}
