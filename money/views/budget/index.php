<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title><?php echo $this->blogData['name'] . " :: " . $this->blogData['description']; ?></title>
        <link rel="stylesheet" type="text/css" media="all" href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/css/style.css" />
    </head>

    <body>
        <?= $this->getLayoutData('userbar'); ?>
        <br />
    <center>
        <?= $this->getLayoutData('info'); ?>  
        <?= $this->getLayoutData('members'); ?>  
    </center> 
</body>
</html>