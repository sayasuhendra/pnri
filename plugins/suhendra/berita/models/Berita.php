<?php namespace Suhendra\Berita\Models;

use Model;

/**
 * Model
 */
class Berita extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /*
     * Validation
     */
    public $rules = [
    ];

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'suhendra_berita_posts';

    public $attachOne = [
        'gambar' => 'System\Models\File'
    ];
}