<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Contrato Entity
 *
 * @property int $id
 * @property int $empresa_id
 * @property int $usuario_id
 * @property int $usuario_departamento_id
 * @property int $num_contrato
 * @property \Cake\I18n\FrozenDate $fecha_inicio
 * @property \Cake\I18n\FrozenDate $fecha_fin
 * @property string $observaciones
 * @property string $precio_anual
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Empresa $empresa
 */
class Contrato extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'num_contrato' => true,
        'fecha_inicio' => true,
        'fecha_fin' => true,
        'observaciones' => true,
        'precio_anual' => true,
        'created' => true,
        'modified' => true,
        'empresa' => true
    ];
}
