<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Gravedad[]|\Cake\Collection\CollectionInterface $gravedades
 */

$class = $this->fetch('class');
$titulo = $this->fetch('titulo');
$add_button = $this->fetch('add_button'); //Variable que se asignará en el index cuando no se quiera  ver el botón de añadir.
// 0 con botón
// 1 sin botón

//el controller se calcula por defecto a partir
//de la clase
$controller = \Cake\Utility\Inflector::tableize($class);
//si no hay $object definido explicitamente en
//la vista padre, se calcula uno por defecto a partir
//de la clase
$object = $this->fetch('object');
if ($object == '')
    $object = \Cake\Utility\Inflector::humanize(\Cake\Utility\Inflector::singularize($controller));
$this->Html->addCrumb($object, array(
    'controller'=>$controller,
    'action'=>'index'
));

?>
<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Gravedad'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Casos'), ['controller' => 'Casos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Caso'), ['controller' => 'Casos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="large-9 medium-8 columns content">
    <?php if(empty($titulo)){
        echo "<h3>$object</h3>";
    }else{
        echo "<h3>$object | $titulo</h3>";
    }
    
    echo $this->fetch('main'); ?>
    <?php echo $this->element('paginador');?>
</div>
