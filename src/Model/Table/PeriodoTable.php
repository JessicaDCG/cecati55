<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Periodo Model
 *
 * @property \App\Model\Table\CursoTable|\Cake\ORM\Association\HasMany $Curso
 * @property \App\Model\Table\EntradaTable|\Cake\ORM\Association\HasMany $Entrada
 * @property \App\Model\Table\FoliosalidaTable|\Cake\ORM\Association\HasMany $Foliosalida
 *
 * @method \App\Model\Entity\Periodo get($primaryKey, $options = [])
 * @method \App\Model\Entity\Periodo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Periodo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Periodo|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Periodo|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Periodo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Periodo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Periodo findOrCreate($search, callable $callback = null, $options = [])
 */
class PeriodoTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('periodo');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Curso', [
            'foreignKey' => 'periodo_id'
        ]);
        $this->hasMany('Entrada', [
            'foreignKey' => 'periodo_id'
        ]);
        $this->hasMany('Foliosalida', [
            'foreignKey' => 'periodo_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->date('fecha_inicio')
            ->allowEmpty('fecha_inicio');

        $validator
            ->date('fecha_fin')
            ->allowEmpty('fecha_fin');

        $validator
            ->scalar('nombre')
            ->maxLength('nombre', 50)
            ->allowEmpty('nombre');

        return $validator;
    }
}
