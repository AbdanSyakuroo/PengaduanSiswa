<?php

namespace App\Http\Controllers;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gurus = Siswa::all();

        // Kirim data siswa ke view index.blade.php
        return view('guru.index', compact('gurus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $gurusz = Siswa::findOrFail($id);

        //render view with product
        return view('guru.edit', compact('gurusz'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'status'       => 'required',
           
        ]);

        //get product by ID
        $gurusz = Siswa::findOrFail($id);

        //check if image is uploaded
       

           

            //update product with new image
            $gurusz->update([
                
                'status'         => $request->status,
                
            ]);
       

        //redirect to index
        return redirect()->route('guru.index')->with(['success' => 'Data Berhasil Diubah!']);
     }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
