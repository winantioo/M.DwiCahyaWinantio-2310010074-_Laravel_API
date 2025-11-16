<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    public function index()
    {
        return Agenda::all();
    }

    public function store(Request $request)
    {
        return Agenda::create([
            'judul' => $request->judul,
            'keterangan' => $request->keterangan
        ]);
    }

    public function update(Request $request, $id)
    {
        $agenda = Agenda::find($id);
        $agenda->update([
            'judul' => $request->judul,
            'keterangan' => $request->keterangan
        ]);
        return $agenda;
    }

    public function destroy($id)
    {
        Agenda::destroy($id);
        return response()->json(['status' => 'deleted']);
    }
}
