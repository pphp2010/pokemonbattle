<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Player Entity
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $rate
 * @property string|null $pokemon1
 * @property string|null $item1
 * @property string|null $ability1
 * @property string|null $memo1
 * @property string|null $pokemon2
 * @property string|null $item2
 * @property string|null $ability2
 * @property string|null $memo2
 * @property string|null $pokemon3
 * @property string|null $item3
 * @property string|null $ability3
 * @property string|null $memo3
 * @property string|null $pokemon4
 * @property string|null $item4
 * @property string|null $ability4
 * @property string|null $memo4
 * @property string|null $pokemon5
 * @property string|null $item5
 * @property string|null $ability5
 * @property string|null $memo5
 * @property string|null $pokemon6
 * @property string|null $item6
 * @property string|null $ability6
 * @property string|null $memo6
 * @property string|null $winlose
 * @property string|null $playermemo
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 */
class Player extends Entity
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
        'name' => true,
        'rate' => true,
        'pokemon1' => true,
        'item1' => true,
        'ability1' => true,
        'memo1' => true,
        'pokemon2' => true,
        'item2' => true,
        'ability2' => true,
        'memo2' => true,
        'pokemon3' => true,
        'item3' => true,
        'ability3' => true,
        'memo3' => true,
        'pokemon4' => true,
        'item4' => true,
        'ability4' => true,
        'memo4' => true,
        'pokemon5' => true,
        'item5' => true,
        'ability5' => true,
        'memo5' => true,
        'pokemon6' => true,
        'item6' => true,
        'ability6' => true,
        'memo6' => true,
        'winlose' => true,
        'playermemo' => true,
        'created' => true,
        'modified' => true
    ];
}
