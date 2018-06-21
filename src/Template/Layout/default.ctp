<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
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
        <li class="has-sub"><?php echo $this->Html->link('<i class="fa fa-shopping-cart"></i> COMPRAS','#',['escape' => false]);?>
            <ul>
                <li class="has-sub"><?php echo $this->Html->link('Contratos','/contratos',['escape' => false]);?>
                    <ul>
                        <li class="last"><?php echo $this->Html->link('Peso Pendiente','/contratos/index_left',['escape' => false]);?></li>
                    </ul>
                </li>
                <li class="has-sub"><?php echo $this->Html->link('Operaciones','/operacion_compras',['escape' => false]);?>
                    <ul>
                        <li ><?php echo $this->Html->link('Compras','/operacion_compras',['escape' => false]);?></li>
                        <li class="last"><?php echo $this->Html->link('Ventas','/operacion_ventas',['escape' => false]);?></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li><?php echo $this->Html->link('<i class="fa fa-flask"></i> LABORATORIO','#',['escape' => false]);?>
            <ul>
                <li><?php echo $this->Html->link('ENTREGA','/muestras/index/Search.tipo_id:3',['escape' => false]);?></li>
                <li><?php echo $this->Html->link('Contratos','/contratos',['escape' => false]);?></li>
            </ul>
        </li>
        <li class="has-sub"><?php echo $this->Html->link('<i class="fa fa-ship"></i> TRAFICO','#', ['escape' => false]);?>
            <ul>
                <li class="has-sub"><?php echo $this->Html->link('Operaciones','#',['escape' => false]);?>
                    <ul>
                        <li ><?php echo $this->Html->link('Compras','/operacion_compras/index_trafico',['escape' => false]);?></li>
                        <li class="last"><?php echo $this->Html->link('Ventas','/operacion_ventas',['escape' => false]);?></li>
                    </ul>
                </li>
                <li><?php echo $this->Html->link('TRANSPORTE','/transportes',['escape' => false]);?></li>
                <li><?php echo $this->Html->link('FLETES','/fletes',['escape' => false]);?></li>
                <li class="has-sub"><?php echo $this->Html->link('Informes','#',['escape' => false]);?>
                    <ul>
                        <li><?php echo $this->Html->link('Despachos','/transportes/despacho',['escape' => false]);?></li>
                        <li><?php echo $this->Html->link('Stocks','/retirada_pendientes/stock',['escape' => false]);?></li>
                        <li class="last"><?php echo $this->Html->link('Prórrogas','/retirada_transporte_pendientes',['escape' => false]);?></li>

                    </ul>
                </li>
            </ul>
        </li>
        <li class="has-sub"><?php echo $this->Html->link('<i class="fa fa-money"></i> CONTABILIDAD','#',['escape' => false]);?>
            <ul>
                <li class="has-sub"><?php echo $this->Html->link('Operaciones','#',['escape' => false]);?>
                    <ul>
                        <li><?php echo $this->Html->link('Compras','/operacion_compras',['escape' => false]);?></li>
                        <li class="last"><?php echo $this->Html->link('Ventas','/operacion_ventas/index_conta',['escape' => false]);?></li>
                    </ul>
                </li>
                <li class="has-sub"><?php echo $this->Html->link('FINANCIACIÓN', '/financiaciones', ['escape' => false]);?>
                    <ul>
                        <li class="last"><?php echo $this->Html->link('ANTICIPOS', '/anticipos', ['escape' => false]);?></li>
                    </ul>
                </li>
                <li class="has-sub"><?php echo $this->Html->link('Facturación', '#', ['escape' => false]);?>
                    <ul>
                        <li><?php echo $this->Html->link('FACTURADAS','/operacion_ventas/facturadas',['escape' => false]);?></li>
                                <li class="last"><?php echo $this->Html->link('PLANTILLAS','/plantilla_facturas',['escape' => false]);?></li>
                    </ul>
                </li>

                <li class="has-sub"><?php echo $this->Html->link('Informes','#',['escape' => false]);?>
                    <ul>
                        <li><?php echo $this->Html->link('Despachos','/operacion_ventas/despacho',['escape' => false]);?></li>
                        <li><?php echo $this->Html->link('Sacos sin adjudicar','/almacen_transportes/pendiente',['escape' => false]);?></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li><?php echo $this->Html->link('<i class="fa fa-database"></i> DATOS','/pages/gestiondatos',['escape' => false]);?>
        <li><a href="/users/logout"><i class="fa fa-sign-out" aria-hidden="true"></i> Salir</a></li>
    </ul>
    </div>
    <nav class="top-bar expanded" data-topbar role="navigation">
        <ul class="title-area large-3 medium-4 columns">
            <li class="name">
                <h1><a href=""><?= $this->fetch('title') ?></a></h1>
            </li>
        </ul>
        <div class="top-bar-section">
            <ul class="right">
                <li><?php echo $this->Html->image('logokeytron_w.png');?></li>
                <li><a target="_blank" href="https://book.cakephp.org/3.0/">Documentation</a></li>
                <!-- <li><a target="_blank" href="https://api.cakephp.org/3.0/">API</a></li> -->
            </ul>
        </div>
    </nav>
    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
    <footer>
    </footer>
</body>
</html>
