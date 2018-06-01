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
     * Table name
     *
     * @var string
     */
    public $table = 'casos';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'empresa_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'tipo_asistencia_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'gravedad_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'usuario_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'usuario_departamento_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'num_caso' => ['type' => 'string', 'length' => 45, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'solicitud' => ['type' => 'text', 'length' => null, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'tiempo' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'si_solucionado' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'observaciones' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'fk_casos_empresas1_idx' => ['type' => 'index', 'columns' => ['empresa_id'], 'length' => []],
            'fk_casos_tipo_asistencias1_idx' => ['type' => 'index', 'columns' => ['tipo_asistencia_id'], 'length' => []],
            'fk_casos_usuarios1_idx' => ['type' => 'index', 'columns' => ['usuario_id', 'usuario_departamento_id'], 'length' => []],
            'fk_casos_gravedades1_idx' => ['type' => 'index', 'columns' => ['gravedad_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id', 'empresa_id', 'tipo_asistencia_id', 'gravedad_id', 'usuario_id', 'usuario_departamento_id'], 'length' => []],
            'fk_casos_empresas1' => ['type' => 'foreign', 'columns' => ['empresa_id'], 'references' => ['empresas', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_casos_gravedades1' => ['type' => 'foreign', 'columns' => ['gravedad_id'], 'references' => ['gravedades', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
                'empresa_id' => 1,
                'tipo_asistencia_id' => 1,
                'gravedad_id' => 1,
                'usuario_id' => 1,
                'usuario_departamento_id' => 1,
                'num_caso' => 'Lorem ipsum dolor sit amet',
                'solicitud' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'tiempo' => 1,
                'si_solucionado' => 1,
                'observaciones' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'created' => '2018-06-01 08:18:03',
                'modified' => '2018-06-01 08:18:03'
            ],
        ];
        parent::init();
    }
}
