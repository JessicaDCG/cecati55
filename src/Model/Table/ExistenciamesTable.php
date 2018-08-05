<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Existenciames Model
 *
 * @property \App\Model\Table\ArticuloTable|\Cake\ORM\Association\BelongsTo $Articulo
 *
 * @method \App\Model\Entity\Existenciame get($primaryKey, $options = [])
 * @method \App\Model\Entity\Existenciame newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Existenciame[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Existenciame|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Existenciame|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Existenciame patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Existenciame[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Existenciame findOrCreate($search, callable $callback = null, $options = [])
 */
class ExistenciamesTable extends Table
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

        $this->setTable('existenciames');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Articulo', [
            'foreignKey' => 'articulo_id'
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
            ->decimal('inicio')
            ->allowEmpty('inicio');

        $validator
            ->decimal('fin')
            ->allowEmpty('fin');

        $validator
            ->date('fecha')
            ->allowEmpty('fecha');

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
        $rules->add($rules->existsIn(['articulo_id'], 'Articulo'));

        return $rules;
    }
}
