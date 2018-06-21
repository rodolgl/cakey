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
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
</head>
<body>
    <div id="cssmenu">
    <ul>
        <!--<li class="active"><a href="/">Inicio</a></li>-->
        <li>
            <?php echo $this->Html->link('<i class="fas fa-home fa-lg"></i>', '/', [
                'style'=> 'color:white',
                'escape' => false
            ]);?>
        </li>
        <li><?php echo $this->Html->link('<i class="fas fa-inbox fa-lg"></i>','#', [
            'style'=> 'color:white',
            'escape' => false
        ]);?>
            <ul>
                <li><?php echo $this->Html->link('casos','/casos',[
         'style'=> 'color:cyan',
         'escape' => false
     ]);?></li>
                <li><?php echo $this->Html->link('nuevo caso','/casos/add',[
         'style'=> 'color:yellow',
         'escape' => false
     ]);?></li>
            </ul>
        </li>
        <li class="has-sub"><?php echo $this->Html->link('<i class="fa fa-ship"></i>','#', [
         'style'=> 'color:white',
         'escape' => false
     ]);?>
            <ul>
                <li class="has-sub"><?php echo $this->Html->link('Operaciones','#',[
         'style'=> 'color:white',
         'escape' => false
     ]);?>
                    <ul>
                        <li ><?php echo $this->Html->link('Compras','/operacion_compras/index_trafico',[
         'style'=> 'color:white',
         'escape' => false
     ]);?></li>
                        <li class="last"><?php echo $this->Html->link('Ventas','/operacion_ventas',[
         'style'=> 'color:green',
         'escape' => false
     ]);?></li>
                    </ul>
                </li>
                <li><?php echo $this->Html->link('TRANSPORTE','/transportes',[
         'style'=> 'color:orange',
         'escape' => false
     ]);?></li>
                <li><?php echo $this->Html->link('FLETES','/fletes',[
         'style'=> 'color:white',
         'escape' => false
     ]);?></li>
                <li class="has-sub"><?php echo $this->Html->link('Informes','#',[
         'style'=> 'color:white',
         'escape' => false
     ]);?>
                    <ul>
                        <li><?php echo $this->Html->link('Despachos','/transportes/despacho',[
         'style'=> 'color:white',
         'escape' => false
     ]);?></li>
                        <li><?php echo $this->Html->link('Stocks','/retirada_pendientes/stock',[
         'style'=> 'color:white',
         'escape' => false
     ]);?></li>
                        <li class="last"><?php echo $this->Html->link('Prórrogas','/retirada_transporte_pendientes',[
         'style'=> 'color:white',
         'escape' => false
     ]);?></li>

                    </ul>
                </li>
            </ul>
        </li>
        <li class="has-sub"><?php echo $this->Html->link('<i class="fas fa-money data"></i>','#',[
         'style'=> 'color:white',
         'escape' => false
     ]);?>
            <ul>
                <li class="has-sub"><?php echo $this->Html->link('Operaciones','#',[
         'style'=> 'color:white',
         'escape' => false
     ]);?>
                    <ul>
                        <li><?php echo $this->Html->link('Compras','/operacion_compras',[
         'style'=> 'color:white',
         'escape' => false
     ]);?></li>
                        <li class="last"><?php echo $this->Html->link('Ventas','/operacion_ventas/index_conta',[
         'style'=> 'color:white',
         'escape' => false
     ]);?></li>
                    </ul>
                </li>
                <li class="has-sub"><?php echo $this->Html->link('FINANCIACIÓN', '/financiaciones', [
         'style'=> 'color:white',
         'escape' => false
     ]);?>
                    <ul>
                        <li class="last"><?php echo $this->Html->link('ANTICIPOS', '/anticipos', [
         'style'=> 'color:white',
         'escape' => false
     ]);?></li>
                    </ul>
                </li>
                <li class="has-sub"><?php echo $this->Html->link('Facturación', '#', [
         'style'=> 'color:white',
         'escape' => false
     ]);?>
                    <ul>
                        <li><?php echo $this->Html->link('FACTURADAS','/operacion_ventas/facturadas',[
         'style'=> 'color:white',
         'escape' => false
     ]);?></li>
                                <li class="last"><?php echo $this->Html->link('PLANTILLAS','/plantilla_facturas',[
         'style'=> 'color:white',
         'escape' => false
     ]);?></li>
                    </ul>
                </li>

                <li class="has-sub"><?php echo $this->Html->link('Informes','#',[
         'style'=> 'color:white',
         'escape' => false
     ]);?>
                    <ul>
                        <li><?php echo $this->Html->link('Despachos','/operacion_ventas/despacho',[
         'style'=> 'color:white',
         'escape' => false
     ]);?></li>
                        <li><?php echo $this->Html->link('Sacos sin adjudicar','/almacen_transportes/pendiente',[
         'style'=> 'color:white',
         'escape' => false
     ]);?></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li><?php echo $this->Html->link('<i class="fas fa-database fa-lg"></i>','/pages/datos',[
         'style'=> 'color:white',
         'escape' => false
     ]);?>
        <li><a href="/users/logout"><i class="fas fa-sign-out" aria-hidden="true"></i> Salir</a></li>
    </ul>

    </div>
    <nav class="top-bar expanded" data-topbar role="navigation">
        <ul class="title-area large-3 medium-4 columns">
            <li class="name">
                <?php
                echo $this->Html->image('logokeytron_w.png');
                ?>
                <!-- <h1 style='text-transform: uppercase;'><a href=""><?= $this->fetch('title') ?></a></h1> -->
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
