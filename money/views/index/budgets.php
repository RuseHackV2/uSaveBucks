<div class="content">
    <div class="container-fluid">
        <div class="row">                   
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Budgets</h4>
                        <p class="category">The budgets you contribute to along with other people.</p>
                    </div>
                    <div class="content table-responsive table-full-width">
                        <table class="table table-hover table-striped">
                            <thead>
                            <th>Name</th>
                            <th>Your contribution</th>
                            <th>Total</th>
                            </thead>
                            <tbody>
                                <?php
                                $select = new \Models\Select();
                                foreach ($this->budgets as $key => $value) {
                                    echo "<tr>";
                                    echo "<td>" . $value['link'] . "</td>";
                                    $total = $select->getTotalBudgets($value['budget_id']);
                                    $mymoney = $select->getMoneyBudget($value['budget_id']);
                                    echo "<td>" . $mymoney[0]['money'] . "</td>";
                                    echo "<td>" . $total . "</td>";
                                    echo "</tr>";
                                    
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
    <div class="container-fluid">
        <div class="row">                   
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Create budget</h4>
                        <p class="category">Create budget and share it whith other people.</p>
                    </div>
                    <div class="content table-responsive table-full-width" style="margin-left: 0px; margin-right: 0px;">
                        <form action="" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Budget's name</label>
                                        <input type="text" name="link" class="form-control" value="" placeholder="Enter name"  >
                                    </div>        
                                </div>                               
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Description</label>
                                        <input type="text" name="description" class="form-control" placeholder="Enter short description">
                                    </div>        
                                </div>
                            </div>
                            <button type="submit" name="budget" value="true" class="btn btn-info btn-fill pull-right">Update</button>
                        </form>
                        <div style="margin-top: 50px;"></div>
                    </div>
                </div>
            </div>  

        </div>                    
    </div>
</div>