<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <title><?php echo __('Teste CRUD com CakePHP') ?></title>
        <meta name="description" content="Creating a Basic CRUD in PHP using CakePHP">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <?php echo $this->Html->css('materialize.min.css') ?>
        <?php echo $this->Html->script('Libs/jquery/jquery-1.8.2.min.js') ?>
        <?php echo $this->Html->meta('favicon.ico') ?>
    </head>
    <body>
        <?php echo $this->fetch('content') ?>
        
        <?php echo $this->Html->script('Libs/jquery/jquery-1.8.2.min.js') ?>
        <?php echo $this->Html->script('Scripts/bin/materialize.js') ?>
    </body>
</html>