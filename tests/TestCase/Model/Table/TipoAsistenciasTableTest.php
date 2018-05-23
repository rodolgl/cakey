<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TipoAsistenciasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TipoAsistenciasTable Test Case
 */
class TipoAsistenciasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TipoAsistenciasTable
     */
    public $TipoAsistencias;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tipo_asistencias',
        'app.casos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('TipoAsistencias') ? [] : ['className' => TipoAsistenciasTable::class];
        $this->TipoAsistencias = TableRegistry::get('TipoAsistencias', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TipoAsistencias);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
