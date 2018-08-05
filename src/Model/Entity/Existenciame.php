<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Existenciame Entity
 *
 * @property int $id
 * @property float $inicio
 * @property float $fin
 * @property int $articulo_id
 * @property \Cake\I18n\FrozenDate $fecha
 *
 * @property \App\Model\Entity\Articulo $articulo
 */
class Existenciame extends Entity
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
        'inicio' => true,
        'fin' => true,
        'articulo_id' => true,
        'fecha' => true,
        'articulo' => true
    ];
}
