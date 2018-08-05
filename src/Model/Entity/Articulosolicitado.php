<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Articulosolicitado Entity
 *
 * @property int $id
 * @property int $articulo_id
 * @property int $requisicion_id
 * @property int $proveedor_id
 * @property \Cake\I18n\FrozenDate $fecha
 * @property \Cake\I18n\FrozenDate $fecha_termino
 * @property float $cantidad
 * @property float $precio
 *
 * @property \App\Model\Entity\Articulo $articulo
 * @property \App\Model\Entity\Requisicion $requisicion
 * @property \App\Model\Entity\Proveedor $proveedor
 */
class Articulosolicitado extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'articulo_id' => true,
        'requisicion_id' => true,
        'proveedor_id' => true,
        'fecha' => true,
        'fecha_termino' => true,
        'cantidad' => true,
        'precio' => true,
        'articulo' => true,
        'requisicion' => true,
        'proveedor' => true
    ];
}
