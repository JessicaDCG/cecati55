<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Solicitudesproveedor Model
 *
 * @property \App\Model\Table\ArticuloTable|\Cake\ORM\Association\BelongsTo $Articulo
 * @property \App\Model\Table\ProveedorTable|\Cake\ORM\Association\BelongsTo $Proveedor
 *
 * @method \App\Model\Entity\Solicitudesproveedor get($primaryKey, $options = [])
 * @method \App\Model\Entity\Solicitudesproveedor newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Solicitudesproveedor[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Solicitudesproveedor|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Solicitudesproveedor|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Solicitudesproveedor patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Solicitudesproveedor[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Solicitudesproveedor findOrCreate($search, callable $callback = null, $options = [])
 */
class SolicitudesproveedorTable extends Table
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

        $this->setTable('solicitudesproveedor');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Articulo', [
            'foreignKey' => 'articulo_id'
        ]);
        $this->belongsTo('Proveedor', [
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
            ->decimal('cantidad')
            ->allowEmpty('cantidad');

        $validator
            ->scalar('status')
            ->maxLength('status', 10)
            ->allowEmpty('status');

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
        $rules->add($rules->existsIn(['proveedor_id'], 'Proveedor'));

        return $rules;
    }
}
