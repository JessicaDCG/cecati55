<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PersonalplantelTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PersonalplantelTable Test Case
 */
class PersonalplantelTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PersonalplantelTable
     */
    public $Personalplantel;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.personalplantel',
        'app.area',
        'app.persona',
        'app.usuario',
        'app.taller'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Personalplantel') ? [] : ['className' => PersonalplantelTable::class];
        $this->Personalplantel = TableRegistry::getTableLocator()->get('Personalplantel', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Personalplantel);

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
