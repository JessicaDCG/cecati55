<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Periodo Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenDate $fecha_inicio
 * @property \Cake\I18n\FrozenDate $fecha_fin
 * @property string $nombre
 *
 * @property \App\Model\Entity\Curso[] $curso
 * @property \App\Model\Entity\Entrada[] $entrada
 * @property \App\Model\Entity\Foliosalida[] $foliosalida
 */
class Periodo extends Entity
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
        'fecha_inicio' => true,
        'fecha_fin' => true,
        'nombre' => true,
        'curso' => true,
        'entrada' => true,
        'foliosalida' => true
    ];
}
