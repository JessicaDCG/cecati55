<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ArticuloorganizacionFixture
 *
 */
class ArticuloorganizacionFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'articuloorganizacion';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'articulo_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'estante_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'FK_ArticuloOrganizacion_Articulo' => ['type' => 'index', 'columns' => ['articulo_id'], 'length' => []],
            'FK_ArticuloOrganizacion_Estante' => ['type' => 'index', 'columns' => ['estante_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fgn_key_FK_ArticuloOrganizacion_Articulo' => ['type' => 'foreign', 'columns' => ['articulo_id'], 'references' => ['articulo', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fgn_key_FK_ArticuloOrganizacion_Estante' => ['type' => 'foreign', 'columns' => ['estante_id'], 'references' => ['estante', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
                'estante_id' => 1
            ],
        ];
        parent::init();
    }
}
