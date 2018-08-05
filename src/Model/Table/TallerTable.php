<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Taller Model
 *
 * @property \App\Model\Table\PersonalplantelTable|\Cake\ORM\Association\HasMany $Personalplantel
 *
 * @method \App\Model\Entity\Taller get($primaryKey, $options = [])
 * @method \App\Model\Entity\Taller newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Taller[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Taller|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Taller|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Taller patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Taller[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Taller findOrCreate($search, callable $callback = null, $options = [])
 */
class TallerTable extends Table
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

        $this->setTable('taller');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Personalplantel', [
            'foreignKey' => 'taller_id'
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
            ->scalar('taller')
            ->maxLength('taller', 50)
            ->allowEmpty('taller');

        return $validator;
    }
}
