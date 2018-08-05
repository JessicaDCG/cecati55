<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Proveedor Model
 *
 * @property \App\Model\Table\ContactoTable|\Cake\ORM\Association\BelongsTo $Contacto
 * @property \App\Model\Table\TipoproveedorTable|\Cake\ORM\Association\BelongsTo $Tipoproveedor
 * @property \App\Model\Table\UsuarioTable|\Cake\ORM\Association\BelongsTo $Usuario
 * @property \App\Model\Table\ArticulosolicitadoTable|\Cake\ORM\Association\HasMany $Articulosolicitado
 * @property \App\Model\Table\SolicitudesproveedorTable|\Cake\ORM\Association\HasMany $Solicitudesproveedor
 *
 * @method \App\Model\Entity\Proveedor get($primaryKey, $options = [])
 * @method \App\Model\Entity\Proveedor newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Proveedor[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Proveedor|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Proveedor|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Proveedor patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Proveedor[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Proveedor findOrCreate($search, callable $callback = null, $options = [])
 */
class ProveedorTable extends Table
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

        $this->setTable('proveedor');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Contacto', [
            'foreignKey' => 'contacto_id'
        ]);
        $this->belongsTo('Tipoproveedor', [
            'foreignKey' => 'tipo_id'
        ]);
        $this->belongsTo('Usuario', [
            'foreignKey' => 'usuario_id'
        ]);
        $this->hasMany('Articulosolicitado', [
            'foreignKey' => 'proveedor_id'
        ]);
        $this->hasMany('Solicitudesproveedor', [
            'foreignKey' => 'proveedor_id'
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
            ->scalar('empresa')
            ->maxLength('empresa', 50)
            ->allowEmpty('empresa');

        $validator
            ->scalar('rfc')
            ->maxLength('rfc', 50)
            ->allowEmpty('rfc');

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
        $rules->add($rules->existsIn(['tipo_id'], 'Tipoproveedor'));
        $rules->add($rules->existsIn(['usuario_id'], 'Usuario'));

        return $rules;
    }
}
