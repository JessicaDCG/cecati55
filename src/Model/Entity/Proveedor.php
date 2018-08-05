<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Proveedor Entity
 *
 * @property int $id
 * @property string $nombre
 * @property string $empresa
 * @property int $contacto_id
 * @property string $rfc
 * @property int $tipo_id
 * @property int $usuario_id
 *
 * @property \App\Model\Entity\Contacto $contacto
 * @property \App\Model\Entity\Tipoproveedor $tipoproveedor
 * @property \App\Model\Entity\Usuario $usuario
 * @property \App\Model\Entity\Articulosolicitado[] $articulosolicitado
 * @property \App\Model\Entity\Solicitudesproveedor[] $solicitudesproveedor
 */
class Proveedor extends Entity
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
        'nombre' => true,
        'empresa' => true,
        'contacto_id' => true,
        'rfc' => true,
        'tipo_id' => true,
        'usuario_id' => true,
        'contacto' => true,
        'tipoproveedor' => true,
        'usuario' => true,
        'articulosolicitado' => true,
        'solicitudesproveedor' => true
    ];
}
