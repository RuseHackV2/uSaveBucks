<?php
if (is_array($this->errors)) {
    foreach ($this->errors as $value) {
        $$value = true;
    }
}
?>
<u><h3>Вход в системата</h3></u>
<form action="" method="post">
    Потребителско име: <br />
    <input type="text" name="username"/><br />
    Парола: <br />
    <input type="password" name="pass"/><br />
    <font color ='red'><?php echo isset($invaliduser) || isset($invalidpass) ? '<br />Невалидно име или парола<br />' : '';  ?></font><br />
    <input type="submit" name="login" value="Влез" />
</form>
<a href="/register/">Нямаш регистрация? Направи си една сега.</a>