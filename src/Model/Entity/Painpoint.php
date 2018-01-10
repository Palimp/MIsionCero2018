<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Painpoint Entity
 *
 * @property int $id
 * @property int $team_id
 * @property int $interaction_id
 * @property string $challenge
 *
 * @property \App\Model\Entity\Team $team
 * @property \App\Model\Entity\Interaction $interaction
 * @property \App\Model\Entity\Ppchallenge[] $ppchallenges
 */
class Painpoint extends Entity
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
