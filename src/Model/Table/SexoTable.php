<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Sexo Model
 *
 * @property \App\Model\Table\PersonaTable|\Cake\ORM\Association\HasMany $Persona
 *
 * @method \App\Model\Entity\Sexo get($primaryKey, $options = [])
 * @method \App\Model\Entity\Sexo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Sexo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Sexo|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sexo|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sexo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Sexo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Sexo findOrCreate($search, callable $callback = null, $options = [])
 */
class SexoTable extends Table
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

        $this->setTable('sexo');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Persona', [
            'foreignKey' => 'sexo_id'
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
            ->scalar('sexo')
            ->maxLength('sexo', 20)
            ->allowEmpty('sexo');

        return $validator;
    }
}
