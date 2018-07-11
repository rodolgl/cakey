<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CategorizacionesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CategorizacionesTable Test Case
 */
class CategorizacionesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CategorizacionesTable
     */
    public $Categorizaciones;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.categorizaciones'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Categorizaciones') ? [] : ['className' => CategorizacionesTable::class];
        $this->Categorizaciones = TableRegistry::get('Categorizaciones', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Categorizaciones);

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
