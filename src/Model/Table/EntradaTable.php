<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Entrada Model
 *
 * @property \App\Model\Table\ArticuloTable|\Cake\ORM\Association\BelongsTo $Articulo
 * @property \App\Model\Table\TipoentradaTable|\Cake\ORM\Association\BelongsTo $Tipoentrada
 * @property \App\Model\Table\CondicionTable|\Cake\ORM\Association\BelongsTo $Condicion
 * @property \App\Model\Table\PeriodoTable|\Cake\ORM\Association\BelongsTo $Periodo
 *
 * @method \App\Model\Entity\Entrada get($primaryKey, $options = [])
 * @method \App\Model\Entity\Entrada newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Entrada[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Entrada|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Entrada|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Entrada patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Entrada[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Entrada findOrCreate($search, callable $callback = null, $options = [])
 */
class EntradaTable extends Table
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

        $this->setTable('entrada');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Articulo', [
            'foreignKey' => 'articulo_id'
        ]);
        $this->belongsTo('Tipoentrada', [
            'foreignKey' => 'tipoEntrada_id'
        ]);
        $this->belongsTo('Condicion', [
            'foreignKey' => 'condicion_id'
        ]);
        $this->belongsTo('Periodo', [
            'foreignKey' => 'periodo_id'
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
            ->scalar('folio')
            ->maxLength('folio', 100)
            ->allowEmpty('folio');

        $validator
            ->decimal('cantidad')
            ->allowEmpty('cantidad');

        $validator
            ->decimal('precio')
            ->allowEmpty('precio');

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
        $rules->add($rules->existsIn(['tipoEntrada_id'], 'Tipoentrada'));
        $rules->add($rules->existsIn(['condicion_id'], 'Condicion'));
        $rules->add($rules->existsIn(['periodo_id'], 'Periodo'));

        return $rules;
    }
}
