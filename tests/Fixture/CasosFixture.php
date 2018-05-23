<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CasosFixture
 *
 */
class CasosFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'num_caso' => ['type' => 'string', 'length' => 45, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'solicitud' => ['type' => 'text', 'length' => null, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'gravedad' => ['type' => 'string', 'length' => 45, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'usuario_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'usuario_departamento_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'empresa_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'tipo_asistencia_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'fk_casos_usuarios1_idx' => ['type' => 'index', 'columns' => ['usuario_id', 'usuario_departamento_id'], 'length' => []],
            'fk_casos_empresas1_idx' => ['type' => 'index', 'columns' => ['empresa_id'], 'length' => []],
            'fk_casos_tipo_asistencias1_idx' => ['type' => 'index', 'columns' => ['tipo_asistencia_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id', 'usuario_id', 'usuario_departamento_id', 'empresa_id', 'tipo_asistencia_id'], 'length' => []],
            'fk_casos_empresas1' => ['type' => 'foreign', 'columns' => ['empresa_id'], 'references' => ['empresas', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_casos_tipo_asistencias1' => ['type' => 'foreign', 'columns' => ['tipo_asistencia_id'], 'references' => ['tipo_asistencias', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_casos_usuarios1' => ['type' => 'foreign', 'columns' => ['usuario_id', 'usuario_departamento_id'], 'references' => ['usuarios', '1' => ['id', 'departamento_id']], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'id' => 1,
                'num_caso' => 'Lorem ipsum dolor sit amet',
                'solicitud' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'gravedad' => 'Lorem ipsum dolor sit amet',
                'usuario_id' => 1,
                'usuario_departamento_id' => 1,
                'empresa_id' => 1,
                'tipo_asistencia_id' => 1,
                'created' => '2018-05-23 14:45:54',
                'modified' => '2018-05-23 14:45:54'
            ],
        ];
        parent::init();
    }
}
