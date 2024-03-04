<?php

namespace App\Http\Controllers;

use App\Models\Enha;
use Illuminate\Http\Request;

class EnhaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $member = Enha::all();
       return view('enhypen.index', compact('member'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('enhypen.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $pesan = [
            'nama.required' => 'isi nama nya woy',
            'posisi.required' => 'heh buta, ini belom diisi',
            'posisi.min' => 'sadar posisi sih kata gw mah',
        ];

        $request->validate([
            'nama'      => 'required',
            'posisi'    => 'required|min:4', //min: 4 itu berlaku buat angka ex: harga. itu artinya minimal 4 digit angka
        ], $pesan); 

        $member = new Enha();

        $member->nama = $request->nama;
        $member->posisi = $request->posisi;

        $member->save();
        return redirect()->route('enha.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $member = Enha::findOrfail($id); //find or fail tu keyword buat nemuin data melalui id
        return view('enhypen.show', compact('member')); //compact itu buat masukin data di return view di html yg bakal di tampilin,
                                                        // 'member' itu nama var yang berisi data/atau model

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $member = Enha::findOrFail($id);
        return view('enhypen.edit', compact('member'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $member = Enha::findOrFail($id);
        $member->nama = $request->nama;
        $member->posisi = $request->posisi;

        $member->update();
        return redirect()->route('enha.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $member = Enha::findOrFail($id);
        $member->delete();
        return redirect()->route('enha.index');
    }
}
