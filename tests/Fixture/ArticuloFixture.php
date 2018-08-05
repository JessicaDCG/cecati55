<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ArticuloFixture
 *
 */
class ArticuloFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'articulo';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'nombre' => ['type' => 'string', 'length' => 250, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'clave_articulo' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'descripcion' => ['type' => 'text', 'length' => 4294967295.0, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'unidad_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'stock' => ['type' => 'decimal', 'length' => 18, 'precision' => 2, 'unsigned' => false, 'null' => true, 'default' => '0.00', 'comment' => ''],
        'marca_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'categoria_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'FK_Articulo_catCategoria' => ['type' => 'index', 'columns' => ['categoria_id'], 'length' => []],
            'FK_Articulo_Marca' => ['type' => 'index', 'columns' => ['marca_id'], 'length' => []],
            'FK_Articulo_Unidad' => ['type' => 'index', 'columns' => ['unidad_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fgn_key_FK_Articulo_Marca' => ['type' => 'foreign', 'columns' => ['marca_id'], 'references' => ['marca', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fgn_key_FK_Articulo_Unidad' => ['type' => 'foreign', 'columns' => ['unidad_id'], 'references' => ['unidad', 'id'], 'update' => 'noAction', 'delete' => 'cascade', 'length' => []],
            'fgn_key_FK_Articulo_catCategoria' => ['type' => 'foreign', 'columns' => ['categoria_id'], 'references' => ['catcategoria', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
                'clave_articulo' => 'Lorem ipsum dolor sit amet',
                'descripcion' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'unidad_id' => 1,
                'stock' => 1.5,
                'marca_id' => 1,
                'categoria_id' => 1
            ],
        ];
        parent::init();
    }
}
