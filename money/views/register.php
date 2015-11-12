<html>
    <head>
        <title><?= $this->title; ?></title>
    </head>
    <body>
        <?= $this->getLayoutData('userbar'); ?>
        <br />
    <center>
        
        <?=$this->getLayoutData('info');?> 
        <?=$this->getLayoutData('form');?>  
    </center>     
    </body>
</html>

