<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Lecturer;
use App\Models\Major;
use App\Models\Prodi;
use App\Models\User;
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
            'dosens' => Lecturer::get()->all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'title' => 'Create Dosen Data',
            'courses' => Course::get()->all(),
            'majors' => Major::get()->all(),
            'prodis' => Prodi::get()->all(),
            'dosen' => User::get()->all()

        ];

        return view('pages.dosen.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'nidn' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|max:20',
            'image' => ['required', 'file', 'image:png,jpg,jpeg', 'max:2048'],
            'course_id' => 'required',
            'prodi_id' => 'required',
            'major_id' => 'required'

        ]);

        $request['user_id'] = auth()->user()->id;
        $image = $request->file('image')->store('dosen-images');

        Lecturer::create(
            [
                'uuid' => uuid_create(),
                'name' => $request->name,
                'nidn' => $request->nidn,
                'image' =>  "storage/$image",
                'course_id' => $request->course_id,
                'prodi_id' => $request->prodi_id,
                'major_id' => $request->major_id
            ]
        );
        return redirect('/admin/dosens')->with('success', 'Dosen has been added');
    }

    /**
     * Display the specified resource.
     */
    public function show(Lecturer $dosen)
    {
        return view('pages.dosen.detail', [
            'title' => 'Detail Dosen',
            'dosen' => $dosen
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Lecturer $dosen)
    {
        return view('pages.dosen.edit', [
            'title' => 'Edit Data',
            'dosen' => $dosen,
            'courses' => Course::get()->all(),
            'majors' => Major::get()->all(),
            'prodis' => Prodi::get()->all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Lecturer $dosen)
    {
        $request->validate([
            'name' => 'required',
            'nidn' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|max:20',
            'image' => ['image:png, jpg, jpeg', 'max:2048'],
            'course_id' => 'required',
            'prodi_id' => 'required',
            'major_id' => 'required'

        ]);

        $image = null;
        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $image = $request->file('image')->store('dosen-images');
        }
        Lecturer::where('id', $dosen->id)
            ->update([
                // 'user_id' => auth()->user()->id,
                'name' => $request->name,
                'nidn' => $request->nidn,
                'image' => $image ? "storage/$image" : $dosen->image,
                'course_id' => $request->course_id,
                'prodi_id' => $request->prodi_id,
                'major_id' => $request->major_id
            ]);

        return redirect('/admin/dosens')->with('success', 'Dosen has been updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lecturer $dosen)
    {
        if ($dosen->image) {
            Storage::delete($dosen->image);
        }
        Lecturer::destroy($dosen->id);
        return redirect('/admin/dosens')->with('success', 'Dosen has been deleted');
    }
}
