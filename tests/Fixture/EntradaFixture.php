<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EntradaFixture
 *
 */
class EntradaFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'entrada';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'folio' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'articulo_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'tipoEntrada_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'cantidad' => ['type' => 'decimal', 'length' => 18, 'precision' => 2, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'precio' => ['type' => 'decimal', 'length' => 18, 'precision' => 2, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'condicion_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'fecha' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'periodo_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'FK_Entrada_Articulo' => ['type' => 'index', 'columns' => ['articulo_id'], 'length' => []],
            'FK_Entrada_Condicion' => ['type' => 'index', 'columns' => ['condicion_id'], 'length' => []],
            'FK_Entrada_Periodo' => ['type' => 'index', 'columns' => ['periodo_id'], 'length' => []],
            'FK_Entrada_TipoEntrada' => ['type' => 'index', 'columns' => ['tipoEntrada_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fgn_key_FK_Entrada_Articulo' => ['type' => 'foreign', 'columns' => ['articulo_id'], 'references' => ['articulo', 'id'], 'update' => 'noAction', 'delete' => 'cascade', 'length' => []],
            'fgn_key_FK_Entrada_Condicion' => ['type' => 'foreign', 'columns' => ['condicion_id'], 'references' => ['condicion', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fgn_key_FK_Entrada_Periodo' => ['type' => 'foreign', 'columns' => ['periodo_id'], 'references' => ['periodo', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fgn_key_FK_Entrada_TipoEntrada' => ['type' => 'foreign', 'columns' => ['tipoEntrada_id'], 'references' => ['tipoentrada', 'id'], 'update' => 'noAction', 'delete' => 'cascade', 'length' => []],
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
                'folio' => 'Lorem ipsum dolor sit amet',
                'articulo_id' => 1,
                'tipoEntrada_id' => 1,
                'cantidad' => 1.5,
                'precio' => 1.5,
                'condicion_id' => 1,
                'fecha' => '2018-08-01',
                'periodo_id' => 1
            ],
        ];
        parent::init();
    }
}
