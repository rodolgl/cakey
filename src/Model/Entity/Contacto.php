<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Contacto Entity
 *
 * @property int $id
 * @property int $empresa_id
 * @property string $nombre
 * @property string $apellido
 * @property string $telefono
 * @property string $email
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Empresa $empresa
 */
class Contacto extends Entity
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
        'nombre' => true,
        'apellido' => true,
        'telefono' => true,
        'email' => true,
        'created' => true,
        'modified' => true,
        'empresa_id' => true,
        'created' => true,
        'modified' => true
    ];
}
