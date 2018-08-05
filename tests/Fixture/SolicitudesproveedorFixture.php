<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SolicitudesproveedorFixture
 *
 */
class SolicitudesproveedorFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'solicitudesproveedor';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'articulo_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'cantidad' => ['type' => 'decimal', 'length' => 18, 'precision' => 2, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'status' => ['type' => 'string', 'fixed' => true, 'length' => 10, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'proveedor_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'FK_SolicitudesProveedor_Articulo' => ['type' => 'index', 'columns' => ['articulo_id'], 'length' => []],
            'FK_SolicitudesProveedor_Proveedor' => ['type' => 'index', 'columns' => ['proveedor_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fgn_key_FK_SolicitudesProveedor_Articulo' => ['type' => 'foreign', 'columns' => ['articulo_id'], 'references' => ['articulo', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fgn_key_FK_SolicitudesProveedor_Proveedor' => ['type' => 'foreign', 'columns' => ['proveedor_id'], 'references' => ['proveedor', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
                'cantidad' => 1.5,
                'status' => 'Lorem ip',
                'proveedor_id' => 1
            ],
        ];
        parent::init();
    }
}
