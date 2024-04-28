<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Storage;

class DashboardDosenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.dosen.index', [
            'title' => 'Dosen',
            'dosens' => Dosen::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'title' => 'Create Dosen Data'
        ];

        return view('pages.dosen.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|unique:dosens',
            'nip' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|max:20',
            'email' => ['required', 'email:dns'],
            'telp' => 'required|max:12|regex:/^([0-9\s\-\+\(\)]*)$/',
            'image' => ['image', 'file', 'max:2048'],
            'motto' => ['required', 'max:255']
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('dosen-images');
        }

        Dosen::create($validatedData);
        return redirect('/admin/dosens')->with('success', 'Dosen has been added');
    }

    /**
     * Display the specified resource.
     */
    public function show(Dosen $dosen)
    {
        return view('pages.dosen.detail', [
            'title' => 'Detail Dosen',
            'dosen' => $dosen
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dosen $dosen)
    {
        return view('pages.dosen.edit', [
            'title' => 'Edit Data',
            'dosen' => $dosen
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dosen $dosen)
    {
        $rules = [
            'name' => 'required|max:255',
            // 'username' => 'required|unique:dosens',
            'nip' => ['required', 'max:20'],
            'email' => ['required', 'email:dns'],
            'telp' => 'required|max:20',
            'image' => ['image', 'file', 'max:2048'],
            'motto' => ['required', 'max:255']
        ];

        if ($request->username != $dosen->username) {
            $rules['username'] = 'required|unique:dosens';
        }

        $validatedData = $request->validate($rules);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('dosen-images');
        }

        Dosen::where('id', $dosen->id)
            ->update($validatedData);

        return redirect('/admin/dosens')->with('success', 'Dosen has been updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dosen $dosen)
    {
        if ($dosen->image) {
            Storage::delete($dosen->image);
        }
        Dosen::destroy($dosen->id);
        return redirect('/admin/dosens')->with('success', 'Dosen has been deleted');
    }
}
