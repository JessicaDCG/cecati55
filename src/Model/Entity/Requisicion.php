<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Requisicion Entity
 *
 * @property int $id
 * @property int $solicitante_id
 * @property \Cake\I18n\FrozenDate $fecha
 * @property int $curso_id
 * @property string $justificacion
 * @property string $folio
 *
 * @property \App\Model\Entity\Personalplantel $personalplantel
 * @property \App\Model\Entity\Curso $curso
 * @property \App\Model\Entity\Articulosolicitado[] $articulosolicitado
 */
class Requisicion extends Entity
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
        'solicitante_id' => true,
        'fecha' => true,
        'curso_id' => true,
        'justificacion' => true,
        'folio' => true,
        'personalplantel' => true,
        'curso' => true,
        'articulosolicitado' => true
    ];
}
