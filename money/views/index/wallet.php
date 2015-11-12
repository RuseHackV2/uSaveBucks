<div class="content">
    <div class="container-fluid">
        <div class="row">                   
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Available money</h4>
                        <p class="category">The money you can spend apart from household bills and food supplies.</p>
                    </div>
                    <div class="content table-responsive table-full-width">
                        <table class="table table-hover table-striped">
                            <thead>
                            <th>Period</th>
                            <th>Amount</th>
                            </thead>
                            <tbody>
                                <?php
//                                echo '<pre>', print_r($this->money), '</pre>';
                                $sum_money = 0;
                                foreach ($this->money as $key => $value) {
                                    $sum_money += $value['value'];
                                }
                                ?>
                                <tr>
                                    <td>All your money</td>
                                    <td>$<?php echo $sum_money ?></td>
                                </tr>
                                <?php
                                $budgetMoney  = 0;
                                foreach ($this->budgetMoney as $key => $value) {
                                    $budgetMoney += $value['money'];
                                }
                                $thismonth = $this->profile[0]['salary'] - $this->profile[0]['household'] - $this->profile[0]['food'] - $budgetMoney;
                                ?>
                                <tr>
                                    <td>This month</td>
                                    <td>$<?php echo $thismonth; ?></td>
                                </tr>
                                <?php
                                $thisweek = $thismonth / 4 * 0.9;
                                ?>
                                <tr>
                                    <td>Suggested limit this week</td>
                                    <td>$<?php echo $thisweek; ?></td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>  
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Banks accounts & Cash</h4>
                        <p class="category">All the deposits, debit cards and cash.</p>
                    </div>
                    <div class="content table-responsive table-full-width">
                        <table class="table table-hover table-striped">
                            <thead>
                            <th>#</th>
                            <th>Name</th>
                            <th>Amount</th>
                            </thead>
                            <tbody>
                                <?php
                                $number = 1;
                                foreach ($this->money as $key => $value) {
                                    if ($value['bank_name'] == 'cash'){
                                    echo "<tr>";
                                    echo "<td>" . $number++ . "</td>";
                                    echo "<td>" . $value['bank_name'] . "</td>";
                                    echo "<td>$" . $value['value'] . "</td>";
                                    echo "</tr>";  
                                    }

                                }
                                foreach ($this->money as $key => $value) {
                                    if ($value['bank_name'] != 'cash'){
                                    echo "<tr>";
                                    echo "<td>" . $number++ . "</td>";
                                    echo "<td>" . $value['bank_name'] . "</td>";
                                    echo "<td>$" . $value['value'] . "</td>";
                                    echo "</tr>";
                                    }
                                }
                                ?>


                            </tbody>
                        </table>

                    </div>
                </div>
            </div>  


            <!--                    <div class="col-md-12">
                                    <div class="card card-plain">
                                        <div class="header">
                                            <h4 class="title">Table on Plain Background</h4>
                                            <p class="category">Here is a subtitle for this table</p>
                                        </div>
                                        <div class="content table-responsive table-full-width">
                                            <table class="table table-hover">
                                                <thead>
                                                    <th>ID</th>
                                                    <th>Name</th>
                                                    <th>Salary</th>
                                                    <th>Country</th>
                                                    <th>City</th>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                            <td>1</td>
                                                            <td>Dakota Rice</td>
                                                            <td>$36,738</td>
                                                            <td>Niger</td>
                                                            <td>Oud-Turnhout</td>
                                                    </tr>
                                                    <tr>
                                                            <td>2</td>
                                                            <td>Minerva Hooper</td>
                                                            <td>$23,789</td>
                                                            <td>Curaçao</td>
                                                            <td>Sinaai-Waas</td>
                                                    </tr>
                                                    <tr>
                                                            <td>3</td>
                                                            <td>Sage Rodriguez</td>
                                                            <td>$56,142</td>
                                                            <td>Netherlands</td>
                                                            <td>Baileux</td>
                                                    </tr>
                                                    <tr>
                                                            <td>4</td>
                                                            <td>Philip Chaney</td>
                                                            <td>$38,735</td>
                                                            <td>Korea, South</td>
                                                            <td>Overland Park</td>
                                                    </tr>
                                                    <tr>
                                                            <td>5</td>
                                                            <td>Doris Greene</td>
                                                            <td>$63,542</td>
                                                            <td>Malawi</td>
                                                            <td>Feldkirchen in Kärnten</td>
                                                    </tr>
                                                    <tr>
                                                            <td>6</td>
                                                            <td>Mason Porter</td>
                                                            <td>$78,615</td>
                                                            <td>Chile</td>
                                                            <td>Gloucester</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                               
                                        </div>
                                    </div>
                                </div> -->


        </div>                    
    </div>
</div>