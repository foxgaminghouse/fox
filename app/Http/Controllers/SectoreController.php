<?php

namespace App\Http\Controllers;

use App\Models\Sectore;
use Illuminate\Http\Request;
use App\Http\Requests\StoreSectore;

class SectoreController extends Controller
{
    public function index(){

        $sectores = Sectore::orderBy('id', 'desc')->paginate();

        return view('sectores.index', compact('sectores'));
    }

    public function create(){
        return view('sectores.create');
    }

    public function store(StoreSectore $request){

        $sectore = Sectore::create($request->all());

        return redirect()->route('sectores.show', $sectore);
    }

    public function show(Sectore $sectore){

        return view('sectores.show', compact('sectore'));
    }

    public function edit(Sectore $sectore){
        return view('sectores.edit', compact('sectore'));
    }

    public function update(Request $request, Sectore $sectore){

        $request->validate([
            'name' => 'required',
            'descripcion' => 'required',
            'categoria' => 'required'
        ]);

        $sectore->update($request->all());

        return redirect()->route('sectores.show', $sectore);
    }

    public function destroy(Sectore $sectore){
        $sectore->delete();

        return redirect()->route('sectores.index');
    }
}
