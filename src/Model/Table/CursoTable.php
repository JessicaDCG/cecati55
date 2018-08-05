<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Curso Model
 *
 * @property \App\Model\Table\PeriodoTable|\Cake\ORM\Association\BelongsTo $Periodo
 * @property \App\Model\Table\PersonalplantelTable|\Cake\ORM\Association\BelongsTo $Personalplantel
 * @property \App\Model\Table\RequisicionTable|\Cake\ORM\Association\HasMany $Requisicion
 *
 * @method \App\Model\Entity\Curso get($primaryKey, $options = [])
 * @method \App\Model\Entity\Curso newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Curso[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Curso|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Curso|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Curso patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Curso[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Curso findOrCreate($search, callable $callback = null, $options = [])
 */
class CursoTable extends Table
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

        $this->setTable('curso');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Periodo', [
            'foreignKey' => 'periodo_id'
        ]);
        $this->belongsTo('Personalplantel', [
            'foreignKey' => 'personal_plantel_id'
        ]);
        $this->hasMany('Requisicion', [
            'foreignKey' => 'curso_id'
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
            ->scalar('nombre')
            ->maxLength('nombre', 100)
            ->allowEmpty('nombre');

        $validator
            ->scalar('descripcion')
            ->maxLength('descripcion', 4294967295)
            ->allowEmpty('descripcion');

        $validator
            ->date('fecha_inicio')
            ->allowEmpty('fecha_inicio');

        $validator
            ->date('fecha_fFIn')
            ->allowEmpty('fecha_fFIn');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['periodo_id'], 'Periodo'));
        $rules->add($rules->existsIn(['personal_plantel_id'], 'Personalplantel'));

        return $rules;
    }
}
