<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Articuloorganizacion Entity
 *
 * @property int $id
 * @property int $articulo_id
 * @property int $estante_id
 *
 * @property \App\Model\Entity\Articulo $articulo
 * @property \App\Model\Entity\Estante $estante
 */
class Articuloorganizacion extends Entity
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
        'estante_id' => true,
        'articulo' => true,
        'estante' => true
    ];
}
