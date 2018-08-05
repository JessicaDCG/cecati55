<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Direccion Model
 *
 * @property \App\Model\Table\MunicipioTable|\Cake\ORM\Association\BelongsTo $Municipio
 * @property \App\Model\Table\ContactoTable|\Cake\ORM\Association\HasMany $Contacto
 *
 * @method \App\Model\Entity\Direccion get($primaryKey, $options = [])
 * @method \App\Model\Entity\Direccion newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Direccion[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Direccion|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Direccion|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Direccion patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Direccion[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Direccion findOrCreate($search, callable $callback = null, $options = [])
 */
class DireccionTable extends Table
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

        $this->setTable('direccion');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Municipio', [
            'foreignKey' => 'municipio_id'
        ]);
        $this->hasMany('Contacto', [
            'foreignKey' => 'direccion_id'
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
            ->scalar('calle')
            ->maxLength('calle', 100)
            ->allowEmpty('calle');

        $validator
            ->scalar('colonia')
            ->maxLength('colonia', 50)
            ->allowEmpty('colonia');

        $validator
            ->scalar('numero')
            ->maxLength('numero', 20)
            ->allowEmpty('numero');

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
        $rules->add($rules->existsIn(['municipio_id'], 'Municipio'));

        return $rules;
    }
}
