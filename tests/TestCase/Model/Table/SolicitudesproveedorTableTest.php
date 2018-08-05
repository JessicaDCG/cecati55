<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SolicitudesproveedorTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SolicitudesproveedorTable Test Case
 */
class SolicitudesproveedorTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SolicitudesproveedorTable
     */
    public $Solicitudesproveedor;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.solicitudesproveedor',
        'app.articulo',
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
        $config = TableRegistry::getTableLocator()->exists('Solicitudesproveedor') ? [] : ['className' => SolicitudesproveedorTable::class];
        $this->Solicitudesproveedor = TableRegistry::getTableLocator()->get('Solicitudesproveedor', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Solicitudesproveedor);

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
