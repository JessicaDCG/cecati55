<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ContactoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ContactoTable Test Case
 */
class ContactoTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ContactoTable
     */
    public $Contacto;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.contacto',
        'app.direccion',
        'app.persona',
        'app.proveedor'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Contacto') ? [] : ['className' => ContactoTable::class];
        $this->Contacto = TableRegistry::getTableLocator()->get('Contacto', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Contacto);

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
