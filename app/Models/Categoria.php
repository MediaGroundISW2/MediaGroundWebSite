<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use \Staudenmeir\LaravelAdjacencyList\Eloquent\HasRecursiveRelationships;
/**
 * Class Categoria
 *
 * @property $id
 * @property $nombre_categoria
 * @property $parent_id
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Categoria extends Model
{
    use HasFactory;
    use HasRecursiveRelationships;
    static $rules = [
		'nombre_categoria' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre_categoria','parent_id'];



}
