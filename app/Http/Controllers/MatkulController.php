<?php

namespace App\Http\Controllers;

use App\Models\Matkul;
use Illuminate\Http\Request;

class MatkulController extends Controller
{
    public function show(Matkul $matkul)
    {
        return view('pages.dosen.index',[
            'title' => 'Detail Dosen',
            'matkul' => $matkul
        ]);
    }
}
