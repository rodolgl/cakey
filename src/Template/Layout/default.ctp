<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * whiteistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CRM de Keytron';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css([
        'base.css',
        'style'
        ]);
    ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
    <?= $this->Html->script('cakey.js');?>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
</head>
<body>
    <div id="cssmenu">
    <ul>
        <li><?php echo $this->Html->link('<i class="fas fa-home fa-lg"></i>', '/', ['style'=> 'color:white','escape' => false]);?></li>
        <li><?php echo $this->Html->link('<i class="fas fa-inbox fa-lg"></i>','#', ['style'=> 'color:white', 'escape' => false]);?>
            <ul>
            <li><?php echo $this->Html->link('casos','/casos',['style'=> 'color:white; text-transform: uppercase; font-weight: bold;','escape' => false]);?></li>
            <li><?php echo $this->Html->link('nuevo caso','/casos/add',['style'=> 'color:white; text-transform: uppercase; font-weight: bold;', 'escape' => false]);?></li>
            </ul>
        </li>
        <li><?php echo $this->Html->link('<i class="fas fa-suitcase fa-lg"></i>','/contratos',['style'=> 'color:white; text-transform: uppercase; font-weight: bold;','escape' => false]);?></li>
        <li><?php echo $this->Html->link('<i class="fas fa-users fa-lg"></i>','/usuarios', ['style'=> 'color:white', 'escape' => false]);?></li>
        <li><?php echo $this->Html->link('<i class="fas fa-bars fa-lg"></i>','#',['style'=> 'color:white', 'escape' => false]);?>
            <ul>
                <li><?php echo $this->Html->link('Contactos','/contactos',['style'=> 'color:white; font-weight: bold;','escape' => false]);?></li>
                <li><?php echo $this->Html->link('Departamentos','/departamentos',['style'=> 'color:white; font-weight: bold;','escape' => false]);?></li>
                <li><?php echo $this->Html->link('Empresas','/Empresas',['style'=> 'color:white; font-weight: bold;','escape' => false]);?></li>
                <li><?php echo $this->Html->link('Categorizaciones','/categorizaciones',['style'=> 'color:white; font-weight: bold;','escape' => false]);?></li>
                <li><?php echo $this->Html->link('Tipos de asistencia','/tipo_asistencias',['style'=> 'color:white; font-weight: bold;','escape' => false]);?></li>
                <li><?php echo $this->Html->link('Pedidos','/pedidos',['style'=> 'color:white; font-weight: bold;','escape' => false]);?></li>
            </ul>
        </li>
        <li><?php echo $this->Html->link('<i class="fas fa-sign-out-alt fa-lg"></i>','/user/logout', ['style'=> 'color:white','escape' => false]);?></li>
    </ul>
    </div>
    <nav class="top-bar expanded" data-topbar role="navigation">
        <ul class="title-area large-3 medium-4 columns">
            <li class="name">
                <?php
                echo $this->Html->image('logokeytron_w.png');
                ?>
                <!-- <p style='text-transform: uppercase; color:white;'><?php echo $this->fetch('title') ?></p> -->
            </li>
        </ul>
    </nav>
    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
    <footer>
    </footer>
</body>
</html>
