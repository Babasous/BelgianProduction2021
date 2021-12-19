<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    /**
     * the table associated with the model.
     * 
     * @var string
     */
    protected $table = 'categories';

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
    public $timestamps = false;

    // Relation entre la table Categories et Movies: Une catégorie a plusieurs instances de films.
    public function movies(){
        return $this->hasMany(Movie::class);
    }
}
