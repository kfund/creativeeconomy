<?php namespace Kfund\Creator\Models;

use Model;

/**
 * Model
 */
class Teachers extends Model
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
    public $table = 'kfund_creator_teachers';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

            // Relations
        
            public $attachOne = [
                'teacher_photo_png' => 'System\Models\File',
                'teacher_photo_webp' => 'System\Models\File'
            ];
}
