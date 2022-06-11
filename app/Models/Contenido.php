<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Contenido
 *
 * @property $id
 * @property $nombre_contenido
 * @property $tipo
 * @property $descripcion
 * @property $formato
 * @property $precio
 * @property $contenido
 * @property $autor_id
 * @property $categoria_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Autor $autor
 * @property Categoria $categoria
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Contenido extends Model
{
    
    static $rules = [
		'nombre_contenido' => 'required',
		'tipo' => 'required',
		'descripcion' => 'required',
		'formato' => 'required',
		'precio' => 'required',
		'contenido' => 'required',
		'autor_id' => 'required',
		'categoria_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre_contenido','tipo','descripcion','formato','precio','contenido','autor_id','categoria_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function autor()
    {
        return $this->hasOne('App\Models\Autor', 'id', 'autor_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function categoria()
    {
        return $this->hasOne('App\Models\Categoria', 'id', 'categoria_id');
    }
    

}
