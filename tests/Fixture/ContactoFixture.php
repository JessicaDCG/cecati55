<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ContactoFixture
 *
 */
class ContactoFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'contacto';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'correo' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'direccion_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'telefono_uno' => ['type' => 'string', 'length' => 11, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'telefono_dos' => ['type' => 'string', 'length' => 11, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'IX_correoFK_idCorreo' => ['type' => 'index', 'columns' => ['correo'], 'length' => []],
            'IX_direccionFK_idDireccion' => ['type' => 'index', 'columns' => ['direccion_id'], 'length' => []],
            'IX_telefonoFK_idTelefono' => ['type' => 'index', 'columns' => ['telefono_uno'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'Direccion_direccionFK_idDireccion' => ['type' => 'foreign', 'columns' => ['direccion_id'], 'references' => ['direccion', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
                'correo' => 'Lorem ipsum dolor sit amet',
                'direccion_id' => 1,
                'telefono_uno' => 'Lorem ips',
                'telefono_dos' => 'Lorem ips'
            ],
        ];
        parent::init();
    }
}
