<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RequisicionTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RequisicionTable Test Case
 */
class RequisicionTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\RequisicionTable
     */
    public $Requisicion;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.requisicion',
        'app.personalplantel',
        'app.curso',
        'app.articulosolicitado'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Requisicion') ? [] : ['className' => RequisicionTable::class];
        $this->Requisicion = TableRegistry::getTableLocator()->get('Requisicion', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Requisicion);

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
