<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Entrada Entity
 *
 * @property int $id
 * @property string $folio
 * @property int $articulo_id
 * @property int $tipoEntrada_id
 * @property float $cantidad
 * @property float $precio
 * @property int $condicion_id
 * @property \Cake\I18n\FrozenDate $fecha
 * @property int $periodo_id
 *
 * @property \App\Model\Entity\Articulo $articulo
 * @property \App\Model\Entity\Tipoentrada $tipoentrada
 * @property \App\Model\Entity\Condicion $condicion
 * @property \App\Model\Entity\Periodo $periodo
 */
class Entrada extends Entity
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
        'folio' => true,
        'articulo_id' => true,
        'tipoEntrada_id' => true,
        'cantidad' => true,
        'precio' => true,
        'condicion_id' => true,
        'fecha' => true,
        'periodo_id' => true,
        'articulo' => true,
        'tipoentrada' => true,
        'condicion' => true,
        'periodo' => true
    ];
}
