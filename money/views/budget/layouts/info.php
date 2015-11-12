Пари в <?php echo $this->_budgetData['link']; ?> (общо вложени от членовето на бюджета) :
<?php 
$sum_money = 0;
foreach ($this->membersData as $key => $value) {
$sum_money += $value['money'];
}
?>
<br />
<b style="color: red"><?php echo $sum_money; ?> $</b>