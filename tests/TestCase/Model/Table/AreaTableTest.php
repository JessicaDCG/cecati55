<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AreaTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AreaTable Test Case
 */
class AreaTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AreaTable
     */
    public $Area;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.area',
        'app.personalplantel'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Area') ? [] : ['className' => AreaTable::class];
        $this->Area = TableRegistry::getTableLocator()->get('Area', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Area);

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
