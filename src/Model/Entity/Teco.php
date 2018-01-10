<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Teco Entity
 *
 * @property int $id
 * @property int $games_id
 * @property int $team
 * @property string $name
 * @property string $members
 * @property int $taken
 * @property int $bikles
 * @property int $num
 *
 * @property \App\Model\Entity\Game $game
 */
class Teco extends Entity
{

}
