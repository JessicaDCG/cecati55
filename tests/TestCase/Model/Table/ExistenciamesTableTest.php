<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ExistenciamesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ExistenciamesTable Test Case
 */
class ExistenciamesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ExistenciamesTable
     */
    public $Existenciames;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.existenciames',
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
        $config = TableRegistry::getTableLocator()->exists('Existenciames') ? [] : ['className' => ExistenciamesTable::class];
        $this->Existenciames = TableRegistry::getTableLocator()->get('Existenciames', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Existenciames);

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
