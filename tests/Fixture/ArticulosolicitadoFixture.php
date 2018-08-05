<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ArticulosolicitadoFixture
 *
 */
class ArticulosolicitadoFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'articulosolicitado';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'articulo_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'requisicion_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'proveedor_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'fecha' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'fecha_termino' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'cantidad' => ['type' => 'decimal', 'length' => 18, 'precision' => 2, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'precio' => ['type' => 'decimal', 'length' => 18, 'precision' => 2, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        '_indexes' => [
            'FK_ArticuloSolicitado_Articulo' => ['type' => 'index', 'columns' => ['articulo_id'], 'length' => []],
            'FK_ArticuloSolicitado_Proveedor' => ['type' => 'index', 'columns' => ['proveedor_id'], 'length' => []],
            'FK_ArticuloSolicitado_Requisicion' => ['type' => 'index', 'columns' => ['requisicion_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fgn_key_FK_ArticuloSolicitado_Articulo' => ['type' => 'foreign', 'columns' => ['articulo_id'], 'references' => ['articulo', 'id'], 'update' => 'noAction', 'delete' => 'cascade', 'length' => []],
            'fgn_key_FK_ArticuloSolicitado_Proveedor' => ['type' => 'foreign', 'columns' => ['proveedor_id'], 'references' => ['proveedor', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fgn_key_FK_ArticuloSolicitado_Requisicion' => ['type' => 'foreign', 'columns' => ['requisicion_id'], 'references' => ['requisicion', 'id'], 'update' => 'noAction', 'delete' => 'cascade', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'id' => 1,
                'articulo_id' => 1,
                'requisicion_id' => 1,
                'proveedor_id' => 1,
                'fecha' => '2018-07-31',
                'fecha_termino' => '2018-07-31',
                'cantidad' => 1.5,
                'precio' => 1.5
            ],
        ];
        parent::init();
    }
}
