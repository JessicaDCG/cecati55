<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Requisicion Model
 *
 * @property \App\Model\Table\PersonalplantelTable|\Cake\ORM\Association\BelongsTo $Personalplantel
 * @property \App\Model\Table\CursoTable|\Cake\ORM\Association\BelongsTo $Curso
 * @property \App\Model\Table\ArticulosolicitadoTable|\Cake\ORM\Association\HasMany $Articulosolicitado
 *
 * @method \App\Model\Entity\Requisicion get($primaryKey, $options = [])
 * @method \App\Model\Entity\Requisicion newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Requisicion[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Requisicion|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Requisicion|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Requisicion patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Requisicion[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Requisicion findOrCreate($search, callable $callback = null, $options = [])
 */
class RequisicionTable extends Table
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

        $this->setTable('requisicion');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Personalplantel', [
            'foreignKey' => 'solicitante_id'
        ]);
        $this->belongsTo('Curso', [
            'foreignKey' => 'curso_id'
        ]);
        $this->hasMany('Articulosolicitado', [
            'foreignKey' => 'requisicion_id'
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
            ->date('fecha')
            ->allowEmpty('fecha');

        $validator
            ->scalar('justificacion')
            ->maxLength('justificacion', 4294967295)
            ->allowEmpty('justificacion');

        $validator
            ->scalar('folio')
            ->maxLength('folio', 100)
            ->allowEmpty('folio');

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
        $rules->add($rules->existsIn(['solicitante_id'], 'Personalplantel'));
        $rules->add($rules->existsIn(['curso_id'], 'Curso'));

        return $rules;
    }
}
