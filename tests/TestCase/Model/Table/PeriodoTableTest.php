<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PeriodoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PeriodoTable Test Case
 */
class PeriodoTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PeriodoTable
     */
    public $Periodo;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.periodo',
        'app.curso',
        'app.entrada',
        'app.foliosalida'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Periodo') ? [] : ['className' => PeriodoTable::class];
        $this->Periodo = TableRegistry::getTableLocator()->get('Periodo', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Periodo);

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
