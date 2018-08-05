<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Persona Entity
 *
 * @property int $id
 * @property string $nombre
 * @property string $apellido_paterno
 * @property string $apellido_materno
 * @property \Cake\I18n\FrozenDate $fecha_nacimiento
 * @property \Cake\I18n\FrozenDate $recha_registro
 * @property int $contacto_id
 * @property int $sexo_id
 *
 * @property \App\Model\Entity\Contacto $contacto
 * @property \App\Model\Entity\Sexo $sexo
 * @property \App\Model\Entity\Alumno[] $alumno
 * @property \App\Model\Entity\Personalplantel[] $personalplantel
 */
class Persona extends Entity
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
        'apellido_paterno' => true,
        'apellido_materno' => true,
        'fecha_nacimiento' => true,
        'recha_registro' => true,
        'contacto_id' => true,
        'sexo_id' => true,
        'contacto' => true,
        'sexo' => true,
        'alumno' => true,
        'personalplantel' => true
    ];
}
