<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Game Entity
 *
 * @property int $id
 * @property string $code1
 * @property string $code2
 * @property string $name
 * @property int $teams
 * @property \Cake\I18n\FrozenTime $expiration
 * @property int $active
 * @property string $trouble
 * @property int $page
 * @property \Cake\I18n\FrozenTime $time1
 * @property int $score
 */
class Game extends Entity
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
        '*' => true,
        'id' => false
    ];
}
