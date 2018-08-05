<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Contacto Entity
 *
 * @property int $id
 * @property string $correo
 * @property int $direccion_id
 * @property string $telefono_uno
 * @property string $telefono_dos
 *
 * @property \App\Model\Entity\Direccion $direccion
 * @property \App\Model\Entity\Persona[] $persona
 * @property \App\Model\Entity\Proveedor[] $proveedor
 */
class Contacto extends Entity
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
        'correo' => true,
        'direccion_id' => true,
        'telefono_uno' => true,
        'telefono_dos' => true,
        'direccion' => true,
        'persona' => true,
        'proveedor' => true
    ];
}
