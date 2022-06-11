<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Autor
 *
 * @property $id
 * @property $nombre_autor
 * @property $apellido_paterno
 * @property $apellido_materno
 * @property $created_at
 * @property $updated_at
 *
 * @property Contenido[] $contenidos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Autor extends Model
{
    
    static $rules = [
		'nombre_autor' => 'required',
		'apellido_paterno' => 'required',
		'apellido_materno' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre_autor','apellido_paterno','apellido_materno'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contenidos()
    {
        return $this->hasMany('App\Models\Contenido', 'autor_id', 'id');
    }
    

}
