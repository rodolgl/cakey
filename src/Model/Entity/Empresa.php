<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Empresa Entity
 *
 * @property int $id
 * @property string $nombre
 * @property string $nombre_corto
 * @property string $email
 * @property string $direccion
 * @property string $municipio
 * @property string $provincia
 * @property string $pais
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Caso[] $casos
 * @property \App\Model\Entity\Contacto[] $contactos
 * @property \App\Model\Entity\Contrato[] $contratos
 */
class Empresa extends Entity
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
        'nombre_corto' => true,
        'email' => true,
        'direccion' => true,
        'municipio' => true,
        'provincia' => true,
        'pais' => true,
        'created' => true,
        'modified' => true,
        'casos' => true,
        'contactos' => true,
        'contratos' => true
    ];
}
