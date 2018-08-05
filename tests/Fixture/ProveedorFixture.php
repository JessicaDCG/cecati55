<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProveedorFixture
 *
 */
class ProveedorFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'proveedor';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'nombre' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'empresa' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'contacto_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'rfc' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'tipo_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'usuario_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'FK_Proveedor_Contacto' => ['type' => 'index', 'columns' => ['contacto_id'], 'length' => []],
            'FK_Proveedor_TipoProveedor' => ['type' => 'index', 'columns' => ['tipo_id'], 'length' => []],
            'FK_Proveedor_Usuario' => ['type' => 'index', 'columns' => ['usuario_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fgn_key_FK_Proveedor_Contacto' => ['type' => 'foreign', 'columns' => ['contacto_id'], 'references' => ['contacto', 'id'], 'update' => 'noAction', 'delete' => 'cascade', 'length' => []],
            'fgn_key_FK_Proveedor_TipoProveedor' => ['type' => 'foreign', 'columns' => ['tipo_id'], 'references' => ['tipoproveedor', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fgn_key_FK_Proveedor_Usuario' => ['type' => 'foreign', 'columns' => ['usuario_id'], 'references' => ['usuario', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
                'nombre' => 'Lorem ipsum dolor sit amet',
                'empresa' => 'Lorem ipsum dolor sit amet',
                'contacto_id' => 1,
                'rfc' => 'Lorem ipsum dolor sit amet',
                'tipo_id' => 1,
                'usuario_id' => 1
            ],
        ];
        parent::init();
    }
}
