<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Direccion Entity
 *
 * @property int $id
 * @property string $calle
 * @property string $colonia
 * @property string $numero
 * @property int $municipio_id
 *
 * @property \App\Model\Entity\Municipio $municipio
 * @property \App\Model\Entity\Contacto[] $contacto
 */
class Direccion extends Entity
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
        'calle' => true,
        'colonia' => true,
        'numero' => true,
        'municipio_id' => true,
        'municipio' => true,
        'contacto' => true
    ];
}
