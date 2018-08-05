<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Contacto Model
 *
 * @property \App\Model\Table\DireccionTable|\Cake\ORM\Association\BelongsTo $Direccion
 * @property \App\Model\Table\PersonaTable|\Cake\ORM\Association\HasMany $Persona
 * @property \App\Model\Table\ProveedorTable|\Cake\ORM\Association\HasMany $Proveedor
 *
 * @method \App\Model\Entity\Contacto get($primaryKey, $options = [])
 * @method \App\Model\Entity\Contacto newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Contacto[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Contacto|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Contacto|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Contacto patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Contacto[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Contacto findOrCreate($search, callable $callback = null, $options = [])
 */
class ContactoTable extends Table
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

        $this->setTable('contacto');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Direccion', [
            'foreignKey' => 'direccion_id'
        ]);
        $this->hasMany('Persona', [
            'foreignKey' => 'contacto_id'
        ]);
        $this->hasMany('Proveedor', [
            'foreignKey' => 'contacto_id'
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
            ->scalar('correo')
            ->maxLength('correo', 50)
            ->allowEmpty('correo');

        $validator
            ->scalar('telefono_uno')
            ->maxLength('telefono_uno', 11)
            ->allowEmpty('telefono_uno');

        $validator
            ->scalar('telefono_dos')
            ->maxLength('telefono_dos', 11)
            ->allowEmpty('telefono_dos');

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
        $rules->add($rules->existsIn(['direccion_id'], 'Direccion'));

        return $rules;
    }
}
