<?php

namespace App\Http\Controllers\Folder;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {

        $data = [
            'name' => 'Salv'
        ];

        return view('pages.home', $data);
    }
}