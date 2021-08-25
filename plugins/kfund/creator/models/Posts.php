<?php namespace Kfund\Creator\Models;

use Model;

/**
 * Model
 */
class Posts extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'kfund_creator_posts';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

        // Relations

        public $belongsToMany = [
    
            'tags' => [
    
                'kfund\creator\models\tags',
    
                'table' => 'kfund_creator_posts_tags',
                
                'order' => 'title'
            ]
    
        ];
    
        public $attachOne = [
            'post_image' => 'System\Models\File',
            'post_image_inner' => 'System\Models\File'
        ];
}
