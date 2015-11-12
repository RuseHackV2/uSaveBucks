<?php echo $this->newbie ? 'Нямаш съвместен бюджет? Създай си един бързо и лесно!' : 'Създай си нов бюджет:'; ?>
<br />
<?php
if (is_array($this->errors)) {
    foreach ($this->errors as $value) {
        $$value = true;
    }
}
?>
<form action="" method="post">
    Име на бюджета: <br /><font color ='red'><?php echo isset($name) ? 'Името трабва де е от 3 до 32 знака<br />' : ''; ?></font>
    <input type="text" name="link"/><br />
    Описание: <br /><font color ='red'><?php echo isset($description) ? 'Описанието трабва де е от 3 до 32 знака<br />' : ''; ?></font>
    <input type="text" name="description"/><br />
<!--    Линк: <br /><font color ='red'><?php echo isset($link) ? 'Линка трабва де е от 3 до 32 знака<br />' : ''; ?></font>-->
<!--    <?php
    echo "www." . $_SERVER['SERVER_NAME'] . "/";
    ?>
    <input type="text" name="link"/><br />-->
    <br />
    <button type="submit" name="create" value="budget">Създай</button>
</form>
<?php
if (!$this->newbie) :
    ?>
    <style type="text/css">
        .tg  {border-collapse:collapse;}
        .tg td{padding:10px 5px;border-style:solid;border-width:1px;}
        .tg th{padding:10px 5px;border-style:solid;border-width:1px;}
    </style>
    Моите бюджети:
    <table class="tg">
        <tr>
            <th>№</th>
            <th>Бюджети</th>
            <th>Конфигурация</th>
        </tr>
        <?php
        foreach ($this->budgets as $key => $value) {
            ++$key;

            echo "<tr>"
            . "<td>$key</td>"
            . "<td><a href='http://" . $_SERVER['SERVER_NAME'] . "/" . $value['link'] . "'>" . $value['link'] . "</a></td>"
            . "<td><a href='http://" . $_SERVER['SERVER_NAME'] . "/edit/blog/" . $value['budget_id'] . "'>Редактирай</a> | <a href='http://" . $_SERVER['SERVER_NAME'] . "/delete/blog/" . $value['budget_id'] . "'>Изтрий</a></td>";
        }
        ?>
    </table>
<?php endif; ?>