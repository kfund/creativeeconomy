<?php namespace Kfund\Creator\Models;

use Model;

/**
 * Model
 */
class Comments extends Model
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
    public $table = 'kfund_creator_comments';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

            // Relations

            public $belongsToMany = [
    
                'courses' => [
        
                    'kfund\creator\models\courses',
        
                    'table' => 'kfund_creator_comments_courses',
                    
                    'order' => 'title'
                ]
        
            ];
        
            public $attachOne = [
                'photo_webp' => 'System\Models\File',
                'photo_png' => 'System\Models\File'
            ];
}
