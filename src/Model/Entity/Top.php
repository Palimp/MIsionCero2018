<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Top Entity
 *
 * @property int $id
 * @property int $game_id
 * @property string $question
 * @property int $sel
 * @property int $amb
 * @property int $nor
 * @property int $qui
 * @property int $votes
 *
 * @property \App\Model\Entity\Game $game
 */
class Top extends Entity
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
