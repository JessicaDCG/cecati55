<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EstanteTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EstanteTable Test Case
 */
class EstanteTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EstanteTable
     */
    public $Estante;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.estante',
        'app.articuloorganizacion'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Estante') ? [] : ['className' => EstanteTable::class];
        $this->Estante = TableRegistry::getTableLocator()->get('Estante', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Estante);

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
