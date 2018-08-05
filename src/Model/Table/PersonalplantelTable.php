<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Personalplantel Model
 *
 * @property \App\Model\Table\AreaTable|\Cake\ORM\Association\BelongsTo $Area
 * @property \App\Model\Table\PersonaTable|\Cake\ORM\Association\BelongsTo $Persona
 * @property \App\Model\Table\UsuarioTable|\Cake\ORM\Association\BelongsTo $Usuario
 * @property \App\Model\Table\TallerTable|\Cake\ORM\Association\BelongsTo $Taller
 *
 * @method \App\Model\Entity\Personalplantel get($primaryKey, $options = [])
 * @method \App\Model\Entity\Personalplantel newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Personalplantel[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Personalplantel|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Personalplantel|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Personalplantel patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Personalplantel[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Personalplantel findOrCreate($search, callable $callback = null, $options = [])
 */
class PersonalplantelTable extends Table
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

        $this->setTable('personalplantel');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Area', [
            'foreignKey' => 'area_id'
        ]);
        $this->belongsTo('Persona', [
            'foreignKey' => 'persona_id'
        ]);
        $this->belongsTo('Usuario', [
            'foreignKey' => 'usuario_id'
        ]);
        $this->belongsTo('Taller', [
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
        $rules->add($rules->existsIn(['area_id'], 'Area'));
        $rules->add($rules->existsIn(['persona_id'], 'Persona'));
        $rules->add($rules->existsIn(['usuario_id'], 'Usuario'));
        $rules->add($rules->existsIn(['taller_id'], 'Taller'));

        return $rules;
    }
}
