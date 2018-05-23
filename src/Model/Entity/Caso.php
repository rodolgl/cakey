<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Caso Entity
 *
 * @property int $id
 * @property string $num_caso
 * @property string $solicitud
 * @property string $gravedad
 * @property int $usuario_id
 * @property int $usuario_departamento_id
 * @property int $empresa_id
 * @property int $tipo_asistencia_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Usuario $usuario
 * @property \App\Model\Entity\Empresa $empresa
 * @property \App\Model\Entity\TipoAsistencia $tipo_asistencia
 */
class Caso extends Entity
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
        'num_caso' => true,
        'solicitud' => true,
        'gravedad' => true,
        'created' => true,
        'modified' => true,
        'usuario' => true,
        'empresa' => true,
        'tipo_asistencia' => true
    ];
}
