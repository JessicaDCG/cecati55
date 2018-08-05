<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Articulo Model
 *
 * @property \App\Model\Table\UnidadTable|\Cake\ORM\Association\BelongsTo $Unidad
 * @property \App\Model\Table\MarcaTable|\Cake\ORM\Association\BelongsTo $Marca
 * @property \App\Model\Table\CatcategoriaTable|\Cake\ORM\Association\BelongsTo $Catcategoria
 * @property \App\Model\Table\ArticuloorganizacionTable|\Cake\ORM\Association\HasMany $Articuloorganizacion
 * @property \App\Model\Table\ArticulosolicitadoTable|\Cake\ORM\Association\HasMany $Articulosolicitado
 * @property \App\Model\Table\ControlexistenciasTable|\Cake\ORM\Association\HasMany $Controlexistencias
 * @property \App\Model\Table\EntradaTable|\Cake\ORM\Association\HasMany $Entrada
 * @property \App\Model\Table\ExistenciamesTable|\Cake\ORM\Association\HasMany $Existenciames
 * @property \App\Model\Table\MaximominimoTable|\Cake\ORM\Association\HasMany $Maximominimo
 * @property \App\Model\Table\SalidaTable|\Cake\ORM\Association\HasMany $Salida
 * @property \App\Model\Table\SolicitudesproveedorTable|\Cake\ORM\Association\HasMany $Solicitudesproveedor
 *
 * @method \App\Model\Entity\Articulo get($primaryKey, $options = [])
 * @method \App\Model\Entity\Articulo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Articulo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Articulo|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Articulo|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Articulo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Articulo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Articulo findOrCreate($search, callable $callback = null, $options = [])
 */
class ArticuloTable extends Table
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

        $this->setTable('articulo');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Unidad', [
            'foreignKey' => 'unidad_id'
        ]);
        $this->belongsTo('Marca', [
            'foreignKey' => 'marca_id'
        ]);
        $this->belongsTo('Catcategoria', [
            'foreignKey' => 'categoria_id'
        ]);
        $this->hasMany('Articuloorganizacion', [
            'foreignKey' => 'articulo_id'
        ]);
        $this->hasMany('Articulosolicitado', [
            'foreignKey' => 'articulo_id'
        ]);
        $this->hasMany('Controlexistencias', [
            'foreignKey' => 'articulo_id'
        ]);
        $this->hasMany('Entrada', [
            'foreignKey' => 'articulo_id'
        ]);
        $this->hasMany('Existenciames', [
            'foreignKey' => 'articulo_id'
        ]);
        $this->hasMany('Maximominimo', [
            'foreignKey' => 'articulo_id'
        ]);
        $this->hasMany('Salida', [
            'foreignKey' => 'articulo_id'
        ]);
        $this->hasMany('Solicitudesproveedor', [
            'foreignKey' => 'articulo_id'
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
            ->maxLength('nombre', 250)
            ->allowEmpty('nombre');

        $validator
            ->scalar('clave_articulo')
            ->maxLength('clave_articulo', 50)
            ->allowEmpty('clave_articulo');

        $validator
            ->scalar('descripcion')
            ->maxLength('descripcion', 4294967295)
            ->allowEmpty('descripcion');

        $validator
            ->decimal('stock')
            ->allowEmpty('stock');

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
        $rules->add($rules->existsIn(['unidad_id'], 'Unidad'));
        $rules->add($rules->existsIn(['marca_id'], 'Marca'));
        $rules->add($rules->existsIn(['categoria_id'], 'Catcategoria'));

        return $rules;
    }
}
