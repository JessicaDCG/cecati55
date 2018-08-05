<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Articulosolicitado Model
 *
 * @property \App\Model\Table\ArticuloTable|\Cake\ORM\Association\BelongsTo $Articulo
 * @property \App\Model\Table\RequisicionTable|\Cake\ORM\Association\BelongsTo $Requisicion
 * @property \App\Model\Table\ProveedorTable|\Cake\ORM\Association\BelongsTo $Proveedor
 *
 * @method \App\Model\Entity\Articulosolicitado get($primaryKey, $options = [])
 * @method \App\Model\Entity\Articulosolicitado newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Articulosolicitado[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Articulosolicitado|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Articulosolicitado|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Articulosolicitado patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Articulosolicitado[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Articulosolicitado findOrCreate($search, callable $callback = null, $options = [])
 */
class ArticulosolicitadoTable extends Table
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

        $this->setTable('articulosolicitado');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Articulo', [
            'foreignKey' => 'articulo_id'
        ]);
        $this->belongsTo('Requisicion', [
            'foreignKey' => 'requisicion_id'
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
            ->date('fecha')
            ->allowEmpty('fecha');

        $validator
            ->date('fecha_termino')
            ->allowEmpty('fecha_termino');

        $validator
            ->decimal('cantidad')
            ->allowEmpty('cantidad');

        $validator
            ->decimal('precio')
            ->allowEmpty('precio');

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
        $rules->add($rules->existsIn(['requisicion_id'], 'Requisicion'));
        $rules->add($rules->existsIn(['proveedor_id'], 'Proveedor'));

        return $rules;
    }
}
