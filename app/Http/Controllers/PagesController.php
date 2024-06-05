<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function dashboard()
    {
        $data =[
            'title' => 'Admin Page',
            'totalusers' => User::count()

        ];
        return view('pages.admin.index', $data);
    }

    public function users()
    {
        $data = [
            'title' => 'User Page'
        ];
        return view('pages.user.index', $data);
    }
}
