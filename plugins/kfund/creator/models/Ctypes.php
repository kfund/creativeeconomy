<?php namespace Kfund\Creator\Models;

use Model;

/**
 * Model
 */
class Ctypes extends Model
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
    public $table = 'kfund_creator_ct';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    // Relations

    public $belongsToMany = [
    
        'courses' => [

            'Kfund\Creator\Models\Courses',

            'table' => 'kfund_creator_courses_ct',
            
            'order' => 'title'
        ]

    ];
}
