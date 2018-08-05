<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Solicitudesproveedor Entity
 *
 * @property int $id
 * @property int $articulo_id
 * @property float $cantidad
 * @property string $status
 * @property int $proveedor_id
 *
 * @property \App\Model\Entity\Articulo $articulo
 * @property \App\Model\Entity\Proveedor $proveedor
 */
class Solicitudesproveedor extends Entity
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
        'cantidad' => true,
        'status' => true,
        'proveedor_id' => true,
        'articulo' => true,
        'proveedor' => true
    ];
}
