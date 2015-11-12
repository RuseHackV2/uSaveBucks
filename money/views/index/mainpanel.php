<?php
$servarname = $_SERVER['SERVER_NAME'];
?>
<nav class="navbar navbar-default navbar-fixed">
    <div class="container-fluid">    
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Dashboard</a>
        </div>
        <div class="collapse navbar-collapse">       
            <ul class="nav navbar-nav navbar-left">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-globe"></i>
                        <b class="caret"></b>
                        <span class="notification">5</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Notification 1</a></li>
                        <li><a href="#">Notification 2</a></li>
                        <li><a href="#">Notification 3</a></li>
                        <li><a href="#">Notification 4</a></li>
                        <li><a href="#">Another notification</a></li>
                    </ul>
                </li>
                <li>
                    <a href="">
                        <i class="fa fa-search"></i>
                    </a>
                </li> 
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="">
                        Test
                    </a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <?php 
                        $userData = \GF\App::getInstance();
                        echo $userData->getSession()->username 
                        ?>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="http://<?php echo $servarname ?>/user/wallet">Wallet & Salary</a></li>
                        <li><a href="http://<?php echo $servarname ?>/user/savings">Savings</a></li>
                        <li><a href="http://<?php echo $servarname ?>/user/budgets">Budgets</a></li>
                        <li><a href="http://<?php echo $servarname ?>/user/dashboard">Trends & Statistics</a></li>
                    </ul>
                </li>
                <li>
                    <a href="http://<?php echo $servarname ?>/logout">
                        Log out
                    </a>
                </li> 
            </ul>
        </div>
    </div>
</nav>