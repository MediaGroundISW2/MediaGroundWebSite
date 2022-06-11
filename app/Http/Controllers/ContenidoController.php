<?php

namespace App\Http\Controllers;

use App\Models\Contenido;
use App\Models\Autor;
use App\Models\Categoria;


use Illuminate\Http\Request;

/**
 * Class ContenidoController
 * @package App\Http\Controllers
 */
class ContenidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contenidos = Contenido::paginate();

        return view('contenido.index', compact('contenidos'))
            ->with('i', (request()->input('page', 1) - 1) * $contenidos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $contenido = new Contenido();

        $autor = Autor::pluck('nombre_autor','id');
        $categoria = Categoria::pluck('nombre_categoria','id');

        return view('contenido.create', compact('contenido','autor','categoria'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Contenido::$rules);

        $contenido = Contenido::create($request->all());

        return redirect()->route('contenidos.index')
            ->with('success', 'Contenido created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contenido = Contenido::find($id);

        return view('contenido.show', compact('contenido'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contenido = Contenido::find($id);
        $autor = Autor::pluck('nombre_autor','id');
        $categoria = Categoria::pluck('nombre_categoria','id');

        return view('contenido.edit', compact('contenido','autor','categoria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Contenido $contenido
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contenido $contenido)
    {
        request()->validate(Contenido::$rules);

        $contenido->update($request->all());

        return redirect()->route('contenidos.index')
            ->with('success', 'Contenido updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $contenido = Contenido::find($id)->delete();

        return redirect()->route('contenidos.index')
            ->with('success', 'Contenido deleted successfully');
    }
}
