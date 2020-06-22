<?php

namespace App\Http\Controllers;

use App\Factura;
use Illuminate\Http\Request;

class FacturaController extends Controller
{
    public function index()
    {
        return Factura::all();
    }

    public function show($id)
    {
        return Factura::find($id);
    }

    public function store(Request $request)
    {
        return Factura::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $article = Factura::findOrFail($id);
        $article->update($request->all());

        return $article;
    }

    public function destroy(Request $request, $id)
    {
        $article = Factura::findOrFail($id);
        $article->delete();

        return 204;
    }
}
