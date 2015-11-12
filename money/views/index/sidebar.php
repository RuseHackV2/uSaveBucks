<div class="sidebar" data-color="blue" data-image="assets2/img/sidebar-5.jpg">    
<?php
$servarname = $_SERVER['SERVER_NAME'];
?>
    <!--   
        
        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" 
        Tip 2: you can also add an image using data-image tag
        
    -->

    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="http://<?php echo $servarname ?>/user/wallet" class="simple-text">
                <img src="http://<?php echo $servarname ?>/assets2/img/logo.png" height="45" width="45">
                <b>uSaveBucks</b>
            </a>
        </div>

        <ul class="nav">
            <li>
                <a href="http://<?php echo $servarname ?>/user/profile">
                    <i class="pe-7s-user"></i> 
                    <p>User Profile</p>
                </a>
            </li>
            <li>
                <a href="http://<?php echo $servarname ?>/user/wallet">
                    <i class="pe-7s-cash"></i> 
                    <p>Wallet & Salary</p>
                </a>        
            </li>
            <li>
                <a href="http://<?php echo $servarname ?>/user/savings">
                    <i class="pe-7s-piggy"></i> 
                    <p>Savings</p>
                </a>        
            </li>
            <li class="active">
                <a href="http://<?php echo $servarname ?>/user/statistics">
                    <i class="pe-7s-graph1"></i> 
                    <p>Trends & Statistics</p>
                </a>            
            </li> 
            <li>
                <a href="http://<?php echo $servarname ?>/user/budgets">
                    <i class="pe-7s-credit"></i> 
                    <p>Budgets</p>
                </a>        
            </li>
        </ul> 
    </div>
</div>