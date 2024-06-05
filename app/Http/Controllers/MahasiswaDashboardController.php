<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Major;
use App\Models\Prodi;
use App\Models\Semester;
use App\Models\Student;
use Illuminate\Http\Request;

class MahasiswaDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.mahasiswa.index', [
            'title' => 'Dosen',
            'students' => Student::get()->all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'title' => 'Create Data Mahasiswa',
            'majors' => Major::get()->all(),
            'prodis' => Prodi::get()->all(),
            'semesters' => Semester::get()->all(),
            'class' => Kelas::get()->all()
        ];
        return view('pages.mahasiswa.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'nim' => 'required',
            'kelas_id' => 'required',
            'semester_id' => 'required',
            'prodi_id' => 'required',
            'major_id' => 'required'
        ]);

        $request['user_id'] = auth()->user()->id;

        Student::create([
            'uuid' => uuid_create(),
            'name' => $request['name'],
            'nim' => $request['nim'],
            'kelas_id' => $request['kelas_id'],
            'semester_id' => $request['semester_id'],
            'prodi_id' => $request['prodi_id'],
            'major_id' => $request['major_id']
        ]);
        return redirect('/admin/mahasiswa')->with('success', 'Dosen has been added');
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        return view('pages.mahasiswa.edit', [
            'title' => 'Edit Data',
            'student' => $student,
            'class' => Kelas::get()->all(),
            'majors' => Major::get()->all(),
            'prodis' => Prodi::get()->all(),
            'semesters' => Semester::get()->all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'name' => 'required',
            'nim' => 'required',
            'kelas_id' => 'required',
            'semester_id' => 'required',
            'prodi_id' => 'required',
            'major_id' => 'required'
        ]);

        $request['user_id'] = auth()->user()->id;

        Student::where('id', $student->id)->update([
            'name' => $request['name'],
            'nim' => $request['nim'],
            'kelas_id' => $request['kelas_id'],
            'semester_id' => $request['semester_id'],
            'prodi_id' => $request['prodi_id'],
            'major_id' => $request['major_id']
        ]);
        return redirect('/admin/mahasiswa')->with('success', 'Dosen has been added');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        //
    }
}
