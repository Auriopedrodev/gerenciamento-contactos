<?php
namespace App\Http\Controllers;

use App\Models\Contacto;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function index()
    {
        $contactos = Contacto::all();
        return view('homepage', compact('contactos'));
    }

    public function criarContacto()
    {
        return view('criarContacto');
    }

    public function store(Request $request)
    {
        $validated = $request->validate(Contacto::rules());

        Contacto::create($validated);

        return redirect()->route('contactos.index')
            ->with('success', 'Contacto criado com sucesso.');
    }

    public function edit($id)
    {
        $contacto = Contacto::findOrFail($id);
        return view('editarContacto', compact('contacto'));
    }

    public function update(Request $request, $id)
    {
        $contacto = Contacto::findOrFail($id);
        
        $validated = $request->validate(Contacto::rules($id));

        $contacto->update($validated);

        return redirect()->route('contactos.index')
            ->with('success', 'Contacto atualizado com sucesso.');
    }

    public function destroy($id)
    {
        $contacto = Contacto::findOrFail($id);
        $contacto->delete();

        return redirect()->route('contactos.index')
            ->with('success', 'Contacto excluído com sucesso.');
    }

    public function show($id)
    {
        $contacto = Contacto::findOrFail($id);
        return view('detalhesContacto', compact('contacto'));
    }
}