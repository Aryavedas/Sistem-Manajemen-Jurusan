<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Redirect;

class JurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        return response()->view('jurusans.index', ['jurusans' => Jurusan::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        return response()->view('jurusans.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        // $this->authorize('create', Jurusan::class);

        $validateData = $request->validate([
            'nama_jurusan' => 'required',
            'nama_dekan' => 'required',
            'jumlah_mahasiswa' => 'required',
        ]);
        Jurusan::create($validateData);
        return redirect('/')->with('pesan', "Jurusan {$request->nama_jurusan} Telah Di Tambahkan");
    }

    /**
     * Display the specified resource.
     */
    public function show(Jurusan $jurusan): Response
    {
        return response()->view('jurusans.show', compact('jurusan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Jurusan $jurusan): Response
    {
        return response()->view('jurusans.edit', compact('jurusan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Jurusan $jurusan): RedirectResponse
    {
        $validateData = $request->validate([
            'nama_jurusan' => 'required',
            'nama_dekan' => 'required',
            'jumlah_mahasiswa' => 'required',
        ]);
        $jurusan->update($validateData);
        return redirect('/jurusans/'.$jurusan->id)->with('pesan', "Data Jurusan {$request->nama_jurusan} Telah Di Ubah");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jurusan $jurusan) : RedirectResponse
    {
        $this->authorize('delete', $jurusan);
        $jurusan->delete();

        return redirect('/')->with('jurusans.index', ['pesanHapus', "Jurusan <b>{$jurusan->nama_jurusan}</b> Yang Di Dekan Oleh <b>{$jurusan->nama_dekan}</b> Telah Di Hapus"]);
    }
}
