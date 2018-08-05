<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PersonalplantelFixture
 *
 */
class PersonalplantelFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'personalplantel';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'area_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'persona_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'usuario_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'taller_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'IX_areaFK_idArea' => ['type' => 'index', 'columns' => ['area_id'], 'length' => []],
            'IX_personaFK_idPersona' => ['type' => 'index', 'columns' => ['persona_id'], 'length' => []],
            'IX_usuarioFK_idUsuario' => ['type' => 'index', 'columns' => ['usuario_id'], 'length' => []],
            'FK_PersonalPlantel_Taller' => ['type' => 'index', 'columns' => ['taller_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'FK_PersonalPlantel_Area' => ['type' => 'foreign', 'columns' => ['area_id'], 'references' => ['area', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'Persona_personaFK_idPersona' => ['type' => 'foreign', 'columns' => ['persona_id'], 'references' => ['persona', 'id'], 'update' => 'noAction', 'delete' => 'cascade', 'length' => []],
            'Usuario_usuarioFK_idUsuario' => ['type' => 'foreign', 'columns' => ['usuario_id'], 'references' => ['usuario', 'id'], 'update' => 'noAction', 'delete' => 'cascade', 'length' => []],
            'fgn_key_FK_PersonalPlantel_Taller' => ['type' => 'foreign', 'columns' => ['taller_id'], 'references' => ['taller', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
                'area_id' => 1,
                'persona_id' => 1,
                'usuario_id' => 1,
                'taller_id' => 1
            ],
        ];
        parent::init();
    }
}
