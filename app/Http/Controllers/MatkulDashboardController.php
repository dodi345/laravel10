<?php

namespace App\Http\Controllers;

use App\Models\Matkul;
use Illuminate\Http\Request;

class MatkulDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.matkul.index', [
            'title' => 'Matkul',
            'matkuls' => Matkul::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'title' => 'Create Matkul Data'
        ];

        return view('pages.matkul.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'code' => 'required|unique:matkuls,code',
            'name' => 'required',
            'sks' => ['required'],
            'type' => ['required'],

        ]);

        Matkul::create($validatedData);
        return redirect('/admin/matkuls')->with('success', 'Mata kuliah has been added');
    }

    /**
     * Display the specified resource.
     */
    public function show(Matkul $matkul)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Matkul $matkul)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Matkul $matkul)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Matkul $matkul)
    {
        Matkul::destroy($matkul->id);
        return redirect('/admin/matkuls')->with('success', 'Mata kuliah has been deleted');
    }
}
