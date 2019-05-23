<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * PostsTag Entity
 *
 * @property int $id
 * @property int $tag_id
 * @property int $post_id
 *
 * @property \App\Model\Entity\Tag $tag
 * @property \App\Model\Entity\Post $post
 */
class PostsTag extends Entity
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
        'tag_id' => true,
        'post_id' => true,
        'tag' => true,
        'post' => true
    ];
}