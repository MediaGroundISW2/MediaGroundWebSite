<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Promocione
 *
 * @property $id
 * @property $f_inicio
 * @property $f_fin
 * @property $descuento
 * @property $portada
 * @property $contenido_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Contenido $contenido
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Promocione extends Model
{
    
    static $rules = [
		'f_inicio' => 'required',
		'f_fin' => 'required',
		'descuento' => 'required',
		'portada' => 'required',
		'contenido_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['f_inicio','f_fin','descuento','portada','contenido_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function contenido()
    {
        return $this->hasOne('App\Models\Contenido', 'id', 'contenido_id');
    }
    

}
