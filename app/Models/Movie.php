<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    /**
     * the table associated with the model.
     * 
     * @var string
     */
    protected $table = 'movies';

    /**
     * The primary key associated with the table.
     * 
     * @var string
     */
    protected $primaryKey = 'id';

     /**
     * Indicates if the model should be timestamped.
     * 
     * @var bool
     */
    public $timestamps = true;

    // Relation entre la table Movies et Categories: Un film appartient à une seule catégorie.
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
