<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Articulo Entity
 *
 * @property int $id
 * @property string $nombre
 * @property string $clave_articulo
 * @property string $descripcion
 * @property int $unidad_id
 * @property float $stock
 * @property int $marca_id
 * @property int $categoria_id
 *
 * @property \App\Model\Entity\Unidad $unidad
 * @property \App\Model\Entity\Marca $marca
 * @property \App\Model\Entity\Catcategorium $catcategorium
 * @property \App\Model\Entity\Articuloorganizacion[] $articuloorganizacion
 * @property \App\Model\Entity\Articulosolicitado[] $articulosolicitado
 * @property \App\Model\Entity\Controlexistencia[] $controlexistencias
 * @property \App\Model\Entity\Entrada[] $entrada
 * @property \App\Model\Entity\Existenciame[] $existenciames
 * @property \App\Model\Entity\Maximominimo[] $maximominimo
 * @property \App\Model\Entity\Salida[] $salida
 * @property \App\Model\Entity\Solicitudesproveedor[] $solicitudesproveedor
 */
class Articulo extends Entity
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
        'clave_articulo' => true,
        'descripcion' => true,
        'unidad_id' => true,
        'stock' => true,
        'marca_id' => true,
        'categoria_id' => true,
        'unidad' => true,
        'marca' => true,
        'catcategorium' => true,
        'articuloorganizacion' => true,
        'articulosolicitado' => true,
        'controlexistencias' => true,
        'entrada' => true,
        'existenciames' => true,
        'maximominimo' => true,
        'salida' => true,
        'solicitudesproveedor' => true
    ];
}
