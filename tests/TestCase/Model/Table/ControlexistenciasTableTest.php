<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ControlexistenciasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ControlexistenciasTable Test Case
 */
class ControlexistenciasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ControlexistenciasTable
     */
    public $Controlexistencias;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.controlexistencias',
        'app.articulo'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Controlexistencias') ? [] : ['className' => ControlexistenciasTable::class];
        $this->Controlexistencias = TableRegistry::getTableLocator()->get('Controlexistencias', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Controlexistencias);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
