<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Curso Entity
 *
 * @property int $id
 * @property string $nombre
 * @property string $descripcion
 * @property int $periodo_id
 * @property int $personal_plantel_id
 * @property \Cake\I18n\FrozenDate $fecha_inicio
 * @property \Cake\I18n\FrozenDate $fecha_fFIn
 *
 * @property \App\Model\Entity\Periodo $periodo
 * @property \App\Model\Entity\Personalplantel $personalplantel
 * @property \App\Model\Entity\Requisicion[] $requisicion
 */
class Curso extends Entity
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
        'descripcion' => true,
        'periodo_id' => true,
        'personal_plantel_id' => true,
        'fecha_inicio' => true,
        'fecha_fFIn' => true,
        'periodo' => true,
        'personalplantel' => true,
        'requisicion' => true
    ];
}
