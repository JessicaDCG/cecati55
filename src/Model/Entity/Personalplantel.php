<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Personalplantel Entity
 *
 * @property int $id
 * @property int $area_id
 * @property int $persona_id
 * @property int $usuario_id
 * @property int $taller_id
 *
 * @property \App\Model\Entity\Area $area
 * @property \App\Model\Entity\Persona $persona
 * @property \App\Model\Entity\Usuario $usuario
 * @property \App\Model\Entity\Taller $taller
 */
class Personalplantel extends Entity
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
        'area_id' => true,
        'persona_id' => true,
        'usuario_id' => true,
        'taller_id' => true,
        'area' => true,
        'persona' => true,
        'usuario' => true,
        'taller' => true
    ];
}
