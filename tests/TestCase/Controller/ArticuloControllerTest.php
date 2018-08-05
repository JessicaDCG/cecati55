<?php
namespace App\Test\TestCase\Controller;

use App\Controller\ArticuloController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\ArticuloController Test Case
 */
class ArticuloControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.articulo',
        'app.unidad',
        'app.marca',
        'app.catcategoria',
        'app.articuloorganizacion',
        'app.articulosolicitado',
        'app.controlexistencias',
        'app.entrada',
        'app.existenciames',
        'app.maximominimo',
        'app.salida',
        'app.solicitudesproveedor'
    ];

    /**
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
