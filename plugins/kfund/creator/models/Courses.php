<?php namespace Kfund\Creator\Models;

use Model;

/**
 * Model
 */
class Courses extends Model
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
    public $table = 'kfund_creator_courses';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

            // Relations

            public $belongsToMany = [
    
                'ctypes' => [
        
                    'kfund\creator\models\ctypes',
        
                    'table' => 'kfund_creator_courses_ct',
                    
                    'order' => 'course_type'
                ]
        
            ];
        
            public $attachOne = [
                'course_image_png' => 'System\Models\File',
                'course_img_webp' => 'System\Models\File',
                'course_image_inner' => 'System\Models\File'
            ];

            public $attachMany = [
                'course_technologies' => 'System\Models\File'
            ];
}
