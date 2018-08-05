<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Controlexistencia Entity
 *
 * @property int $id
 * @property int $articulo_id
 * @property float $costo_medio
 * @property float $debe
 * @property float $haber
 * @property float $saldo
 * @property \Cake\I18n\FrozenDate $fecha
 *
 * @property \App\Model\Entity\Articulo $articulo
 */
class Controlexistencia extends Entity
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
        'costo_medio' => true,
        'debe' => true,
        'haber' => true,
        'saldo' => true,
        'fecha' => true,
        'articulo' => true
    ];
}
