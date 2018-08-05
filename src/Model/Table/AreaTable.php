<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Area Model
 *
 * @property \App\Model\Table\PersonalplantelTable|\Cake\ORM\Association\BelongsTo $Personalplantel
 * @property \App\Model\Table\PersonalplantelTable|\Cake\ORM\Association\HasMany $Personalplantel
 *
 * @method \App\Model\Entity\Area get($primaryKey, $options = [])
 * @method \App\Model\Entity\Area newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Area[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Area|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Area|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Area patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Area[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Area findOrCreate($search, callable $callback = null, $options = [])
 */
class AreaTable extends Table
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

        $this->setTable('area');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Personalplantel', [
            'foreignKey' => 'jefe_area_id'
        ]);
        $this->hasMany('Personalplantel', [
            'foreignKey' => 'area_id'
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
            ->scalar('area')
            ->maxLength('area', 25)
            ->allowEmpty('area');

        $validator
            ->scalar('descripcion')
            ->maxLength('descripcion', 4294967295)
            ->allowEmpty('descripcion');

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
        $rules->add($rules->existsIn(['jefe_area_id'], 'Personalplantel'));

        return $rules;
    }
}
