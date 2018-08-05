<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Persona Model
 *
 * @property \App\Model\Table\ContactoTable|\Cake\ORM\Association\BelongsTo $Contacto
 * @property \App\Model\Table\SexoTable|\Cake\ORM\Association\BelongsTo $Sexo
 * @property \App\Model\Table\AlumnoTable|\Cake\ORM\Association\HasMany $Alumno
 * @property \App\Model\Table\PersonalplantelTable|\Cake\ORM\Association\HasMany $Personalplantel
 *
 * @method \App\Model\Entity\Persona get($primaryKey, $options = [])
 * @method \App\Model\Entity\Persona newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Persona[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Persona|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Persona|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Persona patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Persona[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Persona findOrCreate($search, callable $callback = null, $options = [])
 */
class PersonaTable extends Table
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

        $this->setTable('persona');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Contacto', [
            'foreignKey' => 'contacto_id'
        ]);
        $this->belongsTo('Sexo', [
            'foreignKey' => 'sexo_id'
        ]);
        $this->hasMany('Alumno', [
            'foreignKey' => 'persona_id'
        ]);
        $this->hasMany('Personalplantel', [ //Cambiar a hasOne para insetar en una misma visata
            'foreignKey' => 'persona_id'
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
            ->maxLength('nombre', 50)
            ->allowEmpty('nombre');

        $validator
            ->scalar('apellido_paterno')
            ->maxLength('apellido_paterno', 50)
            ->allowEmpty('apellido_paterno');

        $validator
            ->scalar('apellido_materno')
            ->maxLength('apellido_materno', 50)
            ->allowEmpty('apellido_materno');

        $validator
            ->date('fecha_nacimiento')
            ->allowEmpty('fecha_nacimiento');

        $validator
            ->date('recha_registro')
            ->allowEmpty('recha_registro');

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
        $rules->add($rules->existsIn(['contacto_id'], 'Contacto'));
        $rules->add($rules->existsIn(['sexo_id'], 'Sexo'));

        return $rules;
    }
}
