<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PersonaFixture
 *
 */
class PersonaFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'persona';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'nombre' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'apellido_paterno' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'apellido_materno' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'fecha_nacimiento' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'recha_registro' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'contacto_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'sexo_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'IX_contactoFK_idContaco' => ['type' => 'index', 'columns' => ['contacto_id'], 'length' => []],
            'IX_sexoFK_idSexo' => ['type' => 'index', 'columns' => ['sexo_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'Contacto_contactoFK_idContaco' => ['type' => 'foreign', 'columns' => ['contacto_id'], 'references' => ['contacto', 'id'], 'update' => 'noAction', 'delete' => 'cascade', 'length' => []],
            'Sexo_sexoFK_idSexo' => ['type' => 'foreign', 'columns' => ['sexo_id'], 'references' => ['sexo', 'id'], 'update' => 'noAction', 'delete' => 'cascade', 'length' => []],
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
                'apellido_paterno' => 'Lorem ipsum dolor sit amet',
                'apellido_materno' => 'Lorem ipsum dolor sit amet',
                'fecha_nacimiento' => '2018-07-26',
                'recha_registro' => '2018-07-26',
                'contacto_id' => 1,
                'sexo_id' => 1
            ],
        ];
        parent::init();
    }
}
